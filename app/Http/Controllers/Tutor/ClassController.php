<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassController extends Controller
{
    public function renderNewClass()
    {
        $data = CourseType::all();
        return view('tutors.newClass', compact('data'));
    }

    /**
     * To store new Class
     *
     * @param  mixed $request
     * @return void
     */
    public function storeNewClass(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required',
            'price' => 'required',
            'cover' => 'required|mimes:jpeg,png,jpg',
        ]);

        $data = $request->all();

        $imageName = str_replace(' ', '-', $data['title']);
        $imagePath = $request->file('cover')->store('course/' . $imageName . '/cover');

        $photo = Photo::create([
            'types' => 'Course Cover',
            'imageURL' => $imagePath,
        ]);

        Course::create([
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
            'coverID' => $photo->id,
            'courseTypeID' => $data['type'],
            'creatorID' => Auth::user()->id,
            'price' => $data['price'],
        ]);

        return redirect()->route('tutor.dashboard')->with('success', 'A new Class has successfully created!');
    }

    /**
     * To store new Class Type
     *
     * @param  mixed $request
     * @return void
     */
    public function storeNewType(Request $request)
    {
        $request->validate([
            'type' => 'required'
        ]);

        CourseType::create([
            'name' => $request->type,
        ]);

        return redirect()->back()->with('success', 'A new Class Type has successfully created!');
    }
}
