<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Forum;
use Illuminate\Support\Facades\Auth;
use App\Models\UserForumStatus;

class forumStatusController extends Controller
{
    //
    public function forum(){
        $user = Auth::user();
        $forums = Forum::all();

        return view('forum', [
            'user' => $user,
            'forums' => $forums,
        ]);
    }

    public function forumStatus(Request $req, $userId, $forumId){
        $user_id = User::find($userId);
        $forum_id = Forum::find($forumId);

        if($user_id && $forum_id){
            UserForumStatus::create([
                'user_id' => $userId,
                'forum_id' => $forumId,
            ]);
        }
        return redirect('/home');
    }

    public function likeStatus($forumId)
    {
        $user = Auth::user();

        if($user){
            $forum = Forum::findOrFail($forumId);
            $status = UserForumStatus::where('forum_id', $forumId)->where('user_id', $user->id)->first();
            if(!$status || $status->like_status == 0) {
                UserForumStatus::updateOrCreate([
                    'user_id' => $user->id,
                    'forum_id' => $forumId,
                ], [
                    'like_status' => 1,
                ]);
                return response()->json(['message' => 'Liked successfully'], 200);
            } else {
                UserForumStatus::where('user_id', $user->id)->where('forum_id', $forumId)->update([
                    'like_status' => 0,
                ]);
                return response()->json(['message' => 'Unliked successfully'], 200);
            }
        }
        return redirect('/login');
    }

    public function reportStatus($forumId){

        $user = Auth::user();

        if($user){
            $forum = Forum::findOrFail($forumId);
            $status = UserForumStatus::where('forum_id', $forumId)->where('user_id', $user->id)->first();
            if(!$status || $status->report_status == 0) {
                UserForumStatus::updateOrCreate([
                    'user_id' => $user->id,
                    'forum_id' => $forumId,
                ], [
                    'report_status' => 1,
                ]);
            } else {
                UserForumStatus::where('user_id', $user->id)->where('forum_id', $forumId)->update([
                    'report_status' => 0,
                ]);
            }
        } else {
            return redirect('/login');
        }
    }

}
