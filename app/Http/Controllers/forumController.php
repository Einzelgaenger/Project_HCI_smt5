<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Forum;
use App\Models\UserForumStatus;
use Illuminate\Support\Facades\Auth;

class forumController extends Controller
{
    // Display a paginated list of all forums
    public function display(){
        return view('forum');
    }

    public function store(Request $request){
        // Retrieve the validated input data
        $validated = $request->validate([
            'content' => ['content'],
        ]);

        // Create the forum post
        Forum::create([
            'content' => $validated['content'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('forum')->with('success', 'Forum post created successfully!');
    }
    public function index()
    {
        $forums = Forum::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->orderBy('title', 'asc')
            ->paginate(15);

        return view('forum', compact('forums'));
    }

    // Show a specific forum with its comments and replies
    public function show($forumId)
    {
        // Find the forum
        $forum = Forum::findOrFail($forumId); // Use findOrFail for automatic 404

        // Retrieve the comments related to the forum, including replies
        $comments = Comment::where('forum_id', $forum->id)
            ->whereNull('parent_id') // Fetch only root comments (no parent)
            ->with('comments') // Load replies using eager loading
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        // Return view with forum and its comments
        return view('forum-detail', compact('forum', 'comments'));
    }

    public function destroy($forumId){
        $forum = Forum::findOrFail($forumId);
        $forum->delete();

        return redirect()->route('forum')->with('success', 'Forum updated successfully');;
    }

    public function comment(Request $request, $forumId, $parentId = null)
    {
        $validated = $request->validate([
            'content' => ['content'],
        ]);

        Comment::create([
            'forum_id' => $forumId,
            'parent_id'=> $parentId,
            'user_id' => Auth::id(),
            'content' => $request->input('comment'),
        ]);

        return redirect()->route('forum-detail', $forumId)->with('success', 'Comment added successfully.');
    }

    public function delete($id){
        Forum::destroy($id);

        return redirect('/home');
    }
}
