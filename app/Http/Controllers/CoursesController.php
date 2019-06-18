<?php

namespace App\Http\Controllers;

use App\Course;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CoursesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.course.view_courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tutors = User::where('role_id',2)->get();
        return view('admin.course.create_course',compact('tutors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'price' => 'numeric|max:10000',
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:3048',
        ));

        $slug = str_replace (" ", "-", strtolower($request->title));
        $publish = 0;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/courses/'.$file_name);
            Image::make($image)->resize(800,400)->save($location);
        }

        if ($request->has('published'))
            $publish = 1;
        else
            $publish = 0;

        Course::create([
            'title' => $request->title,
            'slug' => $slug,
            'long_desc' => $request->long_desc,
            'short_desc' => $request->short_desc,
            'price' => $request->price,
            'start' => $request->start,
            'image' => $file_name,
            'published' => $publish,
            'tutor_id' => $request->tutor
        ]);

        return redirect()->route('courses.index')
                ->with('success','Course successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::where('id',$id)->first();

        return view('admin.course.edit_course',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $publish = 0;

        if ($request->has('published'))
            $publish = 1;

        Course::where('id',$id)
            ->update([
                'title' => $request->title,
                'price' => $request->price,
                'start' => $request->start,
                'short_desc' => $request->short_desc,
                'long_desc' => $request->long_desc,
                'slug' => $request->slug,
                'published' => $publish
            ]);

        return redirect()->route('courses.index')
            ->with('success','Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::where('id',$id)->first();
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success','Course successfully deleted');
    }
}
