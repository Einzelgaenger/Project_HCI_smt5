<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syllabus;
use App\Models\Course;
use App\Models\DoneModule;
use App\Models\SavedSyllabus;
use Illuminate\Support\Facades\Auth;

class syllabusController extends Controller
{
    //
    public function ViewAllSyllabus() {
        $syllabus = Syllabus::all();
        return view('syllabus', compact('syllabus'));
    }

    public function ViewSyllabusDetail(Syllabus $syllabus) {
        return view('courses', [
            'title' => 'Syllabus Detail',
            'syllabus' => $syllabus,
        ]);
    }

    public function ViewCourseDetail(Course $course) {
        return view('module', [
            'title' => 'Course Detail',
            'course' => $course,
        ]);
    }

    public function Syllabus($id){
        $syllabus = Syllabus::findOrFail($id);
        $user = Auth::user();
        $done = DoneModule::with('module')->where('user_id', $user->id)->get()->toArray();

        return view('syllabus', [
            'syllabus' => $syllabus,
            'user' => $user,
            'done' => $done,
        ]);
    }

    public function storeProgressModule(Request $request) {

        $user = Auth::user();
        $data = $request->input('module_id', []);
        $id = $request->syllabus_id;

        foreach($data as $i){

            DoneModule::create([
                'user_id' => $user->id,
                'module_id' => $i
            ]);
        }

        return redirect(route('syllabus', $id));
    }

    public function savedSyllabus(Request $req){
        $id = $req->syllabus_id;

        SavedSyllabus::create([
            'user_id' => $req->user_id,
            'syllabus_id' => $req->syllabus_id,
        ]);

        return redirect(route('syllabus', $id));
    }

    public function course($id){
        $course = Course::findOrFail($id);
        $user = Auth::user();

        return view('view-course', [
            'course' => $course,
            'user' => $user
        ]);
    }
}
