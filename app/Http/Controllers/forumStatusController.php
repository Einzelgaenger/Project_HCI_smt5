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

    public function likeStatus(Request $req, $id, $userId, $forumId){
        $user_id = User::find($userId);
        $forum_id = Forum::find($forumId);


        if($user_id && $forum_id){
            UserForumStatus::findOrFail($id)->update([
                'like_status' => 1,
            ]);
        }
        return redirect('/home');
    }

    public function reportStatus(Request $req, $id, $userId, $forumId){
        $user_id = User::find($userId);
        $forum_id = Forum::find($forumId);


        if($user_id && $forum_id){
            UserForumStatus::findOrFail($id)->update([
                'report_status' => 1,
            ]);
        }
        return redirect('/home');
    }


}
