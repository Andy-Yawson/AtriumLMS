<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class LessonsController extends Controller
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
        $lessons = Lesson::all();
        return view('admin.lesson.view_lessons',['lessons'=>$lessons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.lesson.create_lesson',['id'=>$id]);
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
            'title' => 'required|min:3',
            'short_text' => 'required|min:3',
            'long_text' => 'required|min:10',
            'video' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg|max:3048',
            'file' => 'mimes:pdf,docx,doc,pptx,rtf|max:5048',
        ));

        if ($request->has('published'))
            $publish = 1;
        else
            $publish = 0;

        $lesson = new Lesson();

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/lessons/'.$file_name);
            Image::make($image)->resize(800,400)->save($location);

            $lesson->image = $file_name;
        }

        if ($request->hasFile('file')){
            $download = $request->file('file');
            $download_file = time() . '.' . $download->getClientOriginalExtension();
            $download->move(public_path('downloadable/lessons'),$download_file);

            $lesson->files = $download_file;
        }

        $position = Lesson::where('course_id',$request->course_id)
                    ->max('position');


        $lesson->title = $request->title;
        $lesson->course_id = $request->course_id;
        $lesson->slug = Str::slug($request->title);
        $lesson->short_text = $request->short_text;
        $lesson->long_text = $request->long_text;
        $lesson->video = $request->video;
        $lesson->published = $publish;
        $lesson->position = $position + 1;

        $lesson->save();

        return redirect()->route('lessons.create',$request->course_id)
            ->with('success','Lesson successfully created');

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
        $lesson = Lesson::where('id',$id)->first();
        return view('admin.lesson.edit_lesson',compact('lesson'));
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
        $this->validate($request,array(
            'title' => 'required|min:3',
            'short_text' => 'required|min:3',
            'long_text' => 'required|min:10',
            'video' => 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg|max:3048',
            'file' => 'mimes:pdf,docx,doc,pptx,rtf|max:5048',
        ));

        $lesson = Lesson::where('id',$id)->first();

        if ($request->has('published'))
            $publish = 1;
        else
            $publish = 0;


        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/lessons/'.$file_name);
            Image::make($image)->resize(800,400)->save($location);

            $lesson->image = $file_name;
        }

        if ($request->hasFile('file')){
            $download = $request->file('file');
            $download_file = time() . '.' . $download->getClientOriginalExtension();
            $download->move(public_path('downloadable/lessons'),$download_file);

            $lesson->files = $download_file;
        }

        $lesson->title = $request->title;
        $lesson->course_id = $request->course_id;
        $lesson->slug = Str::slug($request->title);
        $lesson->short_text = $request->short_text;
        $lesson->long_text = $request->long_text;
        $lesson->video = $request->video;
        $lesson->published = $publish;

        $lesson->save();

        return redirect()->route('lessons.index')
            ->with('success','Lesson successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::where('id',$id)->first();
        $lesson->delete();

        return redirect()->route('lessons.index')
            ->with('success','Lesson successfully deleted');
    }
}
