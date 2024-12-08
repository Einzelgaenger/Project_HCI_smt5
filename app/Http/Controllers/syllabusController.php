<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syllabus;
use App\Models\Course;


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

    public function ViewBook($id){
        $syllabus = Syllabus::findOrFail($id);

        return view('syllabus')->with('syllabus', $syllabus);
    }
    
}
