@extends('dashboard.base')
@section('main')

    <link href="{{ asset('/vendors/dataTable/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h3>List</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title mb-0">Users</h6>
                    </div>
                    <div class="text-right col-12">
                        <a href="{{route('dashboard.users.create')}}" type="button" class="btn btn-outline-secondary btn-uppercase" data-toggle="tooltip" title="Add new User">
                            <i class="ti-plus mr-2"  data-feather="plus"></i> Create User
                        </a>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{session('success')}}
                        </div>
                        @endif
                    <div class="table-responsive">
                        <table id="orders" class="table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="orders-select-all">
                                        <label class="custom-control-label" for="orders-select-all"></label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Password</th>
                                <th>Date</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($users) > 0)
                                @foreach($users as $user)
                                    <tr>
                                        <td></td>
                                        <td>
                                            <a href="#">{{$user->id}}</a>
                                        </td>
                                        <td>
                                            <a href="product-detail.html" class="d-flex align-items-center">
                                                <img width="40" src="../media/image/products/product1.png"
                                                     class="rounded mr-3" alt="Vase">
                                                <span>{{$user->username}}</span>
                                            </a>
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>***</td>
                                        <td>NULL</td>
                                        <td class="text-right">
                                            <a href="/dashboard/users/edit/{{$user->id}}" class="btn btn-outline-primary btn-sm btn-floating" data-toggle="tooltip" title="Edit">
                                                <i class="feather feather-users" data-feather="edit"></i>
                                            </a>
                                            <form method="post" action="/dashboard/users/{{$user->id}}">
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm btn-floating ml-2"
                                               data-toggle="tooltip" title="Delete">
                                                <i class="ti-trash" data-feather="trash"></i>
                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p>No users found.</p>
                            @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Datatable -->
    <script src="{{asset('../vendors/dataTable/datatables.min.js')}}"></script>

    <script src="{{asset('../js/examples/pages/orders.js')}}"></script>
@endsection
