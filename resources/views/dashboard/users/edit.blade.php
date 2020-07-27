@extends('dashboard.base')
@section('main')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h3>Edit User</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{$user->name}}</h6>
                <form class="basic-repeater" action="/dashboard/users/edit/{{$user->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="customer_name">Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="company">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="company">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="company">Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                        @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                    <button type="submit" class="btn btn-primary">
                        <i data-feather="edit" class="mr-2"></i> Edit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
