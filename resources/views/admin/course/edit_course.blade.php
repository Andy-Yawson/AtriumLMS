@extends('admin.layout.master')

@section('title','Create Role')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/switch.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials._notify')
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title">Create New Course</h5>
                    <p class="card-category">Make sure course is uniquely created</p>
                </div>
                <div class="card-body">

                    <form method="post" action="{{ route('courses.update',$course->id) }}">
                        @method('PUT')
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="titleInputField">Course Title</label>
                            <input type="text" class="form-control" id="titleInputField"  name="title"
                                   required value="{{ $course->title }}">
                            <small id="emailHelp" class="form-text text-muted">Course name should be interesting</small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Course Slug</label>
                            <input type="text" class="form-control" id="titleInputField"  name="slug"
                                   required value="{{ $course->slug }}">
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Course Price</label>
                            <input type="text" class="form-control" id="titleInputField"  name="price"
                                  required value="{{ $course->price }}">
                            <small id="emailHelp" class="form-text text-muted">Enter zero(0) if course is free</small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Course Starting Date</label>
                            <input type="date" class="form-control" id="titleInputField"  name="start"
                                   required value="{{ $course->start }}">
                            <small id="emailHelp" class="form-text text-muted">Enter the exact date to begin course</small>
                        </div>


                        <div class="form-group">
                            <label for="titleInputField">Course Short Description</label>
                            <textarea class="form-control"
                                      name="short_desc" required>{{ $course->short_desc }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Course Long Description</label>
                            <textarea class="form-control" required
                                      name="long_desc" >{{ $course->long_desc }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="coursePublish">Course Publish</label><br>
                            <label class="switch">
                                <input type="checkbox" id="coursePublish" name="published" value="published"
                                @if($course->published == 1) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-icon-split" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Update Course</span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
