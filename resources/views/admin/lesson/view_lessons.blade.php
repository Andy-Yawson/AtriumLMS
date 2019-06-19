@extends('admin.layout.master')

@section('title','Show All Courses')

@section('content')

    @include('admin.partials._notify')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Created Lessons</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Course</th>
                        <th>Created On</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->title }}</td>
                            <td>{{ $lesson->course->title }}</td>
                            <td>{{ $lesson->created_at->diffForHumans() }}</td>
                            <td>
                                @if($lesson->published == 1)
                                    <button class="btn btn-success">Active</button>
                                @else
                                    <button class="btn btn-danger">Inactive</button>
                                @endif
                            </td>
                            <td>
                                <form method="post" action="{{ route('lessons.destroy',$lesson->id) }}"
                                      style="display: inline">
                                    @method('DELETE')
                                    {{csrf_field()}}
                                    <button class="btn btn-danger btn-circle btn-sm" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route('lessons.edit',$lesson->id) }}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-pen"></i>
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

@section('scripts')
    <script>

    </script>
@endsection
