@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Management') }} <a href="{{ route('register') }}" class="btn btn-primary float-right">Add new admin</a></div>
                        <table class="table table-hover table-stripped table-bordered">
                            <thead>
                            <tr>
                                <td>S.no</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Role</td>
                                @can('edit-user','delete-user')
                                <td>Action</td>
                                    @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>
                                        {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}
                                    </td>
                                    @can('edit-user','delete-user')
                                    <td>
                                        @can('edit-user')
                                        <a href="{{route('admin.users.edit', $user->id)}}" type="button" class="btn btn-warning float-left"><i class="fa fa-pencil"></i></a>
                                        @endcan
                                        @can('delete-user')
                                            <form action="{{route('admin.users.destroy', $user)}}" method="POST" class=" float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button  type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                            @endcan
                                    </td>
                                        @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
