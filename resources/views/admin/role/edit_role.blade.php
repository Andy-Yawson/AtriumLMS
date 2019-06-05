@extends('admin.layout.master')

@section('title','Edit Role')


@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('admin.partials._notify')
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="card-title">Edit New Role</h5>
                    <p class="card-category">Make sure roles are unique</p>
                </div>
                <div class="card-body">

                    <form method="post" action="{{ route('roles.update', $role->id) }}">
                        @method('PUT')
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="titleInputField">Role Name</label>
                            <input type="text" class="form-control" id="titleInputField"  name="name"
                                   value="{{ $role->name }}">
                            <small id="emailHelp" class="form-text text-muted">Role name should be unique</small>
                        </div>

                        <div class="form-group">
                            <label for="titleInputField">Role Description</label>
                            <textarea class="form-control"
                                      name="description">{{ $role->description }}
                            </textarea>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary btn-icon-split" type="submit">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Update Role</span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection

