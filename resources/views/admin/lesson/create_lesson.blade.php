@extends('admin.layout.master')

@section('title','Create Lesson')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/switch.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials._notify')
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title">Create New Lesson</h5>
                    <p class="card-category">Make sure lessons are observed well</p>
                </div>
                <div class="card-body">

                    <form method="post" action="{{ route('lessons.store') }}" enctype="multipart/form-data">

                        {{csrf_field()}}

                        <input type="hidden" value="{{ $id }}" name="course_id">

                        <div class="form-group">
                            <label for="titleInputField">Lesson Title</label>
                            <input type="text" class="form-control" id="titleInputField"  name="title"
                                   placeholder="Enter lesson title" required>
                            <small id="emailHelp" class="form-text text-muted">Lesson name should be vivid</small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Lesson Video Link</label>
                            <input type="text" class="form-control" id="titleInputField"  name="video"
                                   placeholder="Enter lesson video link" required>
                            <small id="emailHelp" class="form-text text-muted">Lesson video should be vivid</small>
                        </div>


                        <div class="form-group">
                            <label for="titleInputField">Lesson Image</label>
                            <input type="file" class="form-control" id="titleInputField"  name="image">
                            <small id="emailHelp" class="form-text text-muted">
                                Image size should not exceed 3MB and its optional
                            </small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Lesson Short Description</label>
                            <textarea class="form-control textarea"
                                      name="short_text" placeholder="Enter lesson short description" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Lesson Long Description</label>
                            <textarea class="form-control" required
                                      name="long_text" placeholder="Everything about lesson"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Lesson Downloadable Files</label>
                            <input type="file" class="form-control" id="titleInputField"  name="file">
                            <small id="emailHelp" class="form-text text-muted">Image size should not
                                exceed 6MB and should be optional</small>
                        </div>

                        <div class="form-group">
                            <label for="coursePublish">Lesson Publish</label><br>
                            <label class="switch">
                                <input type="checkbox" id="coursePublish" name="published" value="published">
                                <span class="slider round"></span>
                            </label>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-icon-split" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Create New Lesson</span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
