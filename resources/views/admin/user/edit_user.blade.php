@extends('admin.layout.master')

@section('title','Create Role')


@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials._notify')
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title">Create New User</h5>
                    <p class="card-category">Make sure to assign user roles</p>
                </div>
                <div class="card-body">

                    <form method="post" action="{{ route('users.update',$user->id) }}">
                        @method('PUT')
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="titleInputField">Full Name</label>
                            <input type="text" class="form-control" id="titleInputField"  name="name"
                                   placeholder="Enter user name" value="{{ $user->name }}">
                            <small id="emailHelp" class="form-text text-muted">name should is not unique</small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">User Email</label>
                            <input type="email" class="form-control" id="titleInputField"  name="email"
                                   placeholder="Enter user email" value="{{ $user->email }}">
                            <small id="emailHelp" class="form-text text-muted">email is always unique</small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">User Role</label>
                            <select class="form-control" name="role">
                                <option>========== Select a role ==========</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" @if($user->role_id == $role->id) selected @endif>{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-icon-split" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Update {{ $user->name }} Field</span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

