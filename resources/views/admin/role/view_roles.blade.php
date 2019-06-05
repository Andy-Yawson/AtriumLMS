@extends('admin.layout.master')

@section('title','Show All Roles')

@section('content')

    @include('admin.partials._notify')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All available roles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->name}}</td>
                            <td>{{\Illuminate\Support\Str::words(strip_tags($role->description),10,'...')}}</td>
                            <td>{{$role->created_at->diffForHumans()}}</td>
                            <td>
                                <form method="post" action="{{ route('roles.destroy', $role->id) }}" style="display: inline">
                                    @method('DELETE')
                                    {{csrf_field()}}
                                    <button class="btn btn-danger btn-circle btn-sm" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-info btn-circle btn-sm">
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
