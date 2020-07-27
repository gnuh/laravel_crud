@extends('dashboard.base')
@section('main')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h3>Create User</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h6 class="card-title">New</h6>
                <form class="basic-repeater" action="{{route('dashboard.users.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="customer_name">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="company">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="company">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="company">Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">
                        <i data-feather="plus" class="mr-2"></i> Add
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
