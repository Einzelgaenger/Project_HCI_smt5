<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Ongoing;
use Illuminate\Http\Request;
use App\Models\Syllabus;
use App\Models\Course;
use App\Models\DoneModule;
use App\Models\SavedSyllabus;
use App\Models\Done;
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

    public function ViewPathOngoing()
    {
        $user = Auth::user();

        if($user){
            $ongoings = Ongoing::with('course')->where('user_id', $user->id)->get();
            $dones = Done::with('course')->where('user_id', $user->id)->get();

            return view ('path-ongoing', [
                'ongoings' => $ongoings,
                'dones' => $dones,
            ]);
        } else {
            return redirect('/login');
        }
    }

    public function Syllabus($id){
        $syllabus = Syllabus::findOrFail($id);
        $user = Auth::user();
        $doneModules = DoneModule::where('user_id', $user->id)->get()->toArray();
        $done = Done::where('user_id', $user->id)->get()->toArray();
        $savedSyllabus = SavedSyllabus::where('user_id', $user->id)->where('syllabus_id', $id)->first();

        return view('syllabus', [
            'syllabus' => $syllabus,
            'user' => $user,
            'doneModules' => $doneModules,
            'doneCourses' => $done,
            'saved' => $savedSyllabus ?? null,
        ]);
    }

    public function storeProgressModule(Request $request) {

        $user = Auth::user();
        $data = $request->input('module_id', []);
        $id = $request->syllabus_id;

        foreach($data as $i){
            DoneModule::firstOrCreate([
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
        $ongoing = Ongoing::where('course_id', $course->id)->where('user_id', $user->id)->first();
        $done = Done::where('course_id', $course->id)->where('user_id', $user->id)->first();
        $status = $ongoing ? 'ongoing' : ($done ? 'completed' : null);

        return view('view-course', [
            'course' => $course,
            'user' => $user,
            'status' => $status,
        ]);
    }

    public function markOngoing($id)
    {
        $user = Auth::user();
        if($user){
            Ongoing::firstOrCreate([
                'user_id' => $user->id,
                'course_id' => $id,
            ]);
            return redirect(route('course', $id));
        } else {
            return redirect('/login');
        }
    }

    public function markDone($id)
    {
        $user = Auth::user();
        if($user){
            Done::firstOrCreate([
                'user_id' => $user->id,
                'course_id' => $id,
            ]);
            Ongoing::destroy(Ongoing::where('user_id', $user->id)->where('course_id', $id)->first()->id);
            return redirect(route('course', $id));
        } else {
            return redirect('/login');
        }
    }
}
