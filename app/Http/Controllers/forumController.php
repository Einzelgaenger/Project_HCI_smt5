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
    public function index()
    {
        $forums = Forum::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
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

        if($comments){
            return view('show-forum', [
                'forum' => $forum,
                'comments' => $comments
            ]);
        }

        return view('show-forum', [
            'forum' => $forum
        ]);
        
        
    }

    // Store a new forum post
    public function store(Request $request)
    {
        // Retrieve the validated input data
        $validated = $request->validate([
            'content' => ['required', 'string'], // Ensure content is required and a string
        ]);

        $user = Auth::user();
        // Create the forum post
        Forum::create([
            'content' => $validated['content'],
            'user_id' => $user->id,
        ]);

        return redirect()->route('forum')->with('success', 'Forum post created successfully!');
    }

    // Delete a forum post
    public function destroy($forumId)
    {
        $forum = Forum::findOrFail($forumId);
        $forum->delete();

        return redirect()->route('forum.index')->with('success', 'Forum deleted successfully');
    }

    // Comment on a forum post
    public function comment(Request $request, $forumId, $parentId = null)
    {

        Comment::create([
            'forum_id' => $forumId,
            'parent_id' => $parentId,
            'user_id' => Auth::id(),
            'content' => $request->content, // Use validated content
        ]);

        return redirect()->route('forum.show', $forumId)->with('success', 'Comment added successfully.');
    }

    // Show the reply page for a specific comment
    public function reply(Request $request)
    {
        $commentText = $request->query('commentText');
        $username = $request->query('username');

        return view('reply', compact('commentText', 'username'));
    }


}
