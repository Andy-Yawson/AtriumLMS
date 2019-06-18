@extends('admin.layout.master')

@section('title','Show All Courses')

@section('content')

    @include('admin.partials._notify')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Created Courses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Start Date</th>
                        <th>Image</th>
                        <th>Created On</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Start Date</th>
                        <th>Image</th>
                        <th>Created On</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->title}}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->start }}</td>
                            <td><img src="{{ asset('images/courses/'.$course->image) }}" width="100px" height="50px"></td>
                            <td>{{ \Carbon\Carbon::parse($course->created_at)->format('d M Y H:ia') }}</td>
                            <td>
                                @if($course->published == 1)
                                    <button class="btn btn-success">Active</button>
                                @else
                                    <button class="btn btn-danger">Inactive</button>
                                @endif
                            </td>
                            <td>
                                <form method="post" action="{{ route('courses.destroy', $course->id) }}" style="display: inline">
                                    @method('DELETE')
                                    {{csrf_field()}}
                                    <button class="btn btn-danger btn-circle btn-sm" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('courses.edit',$course->id)}}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="" class="btn btn-primary btn-circle btn-sm"
                                title="Add a topic">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
