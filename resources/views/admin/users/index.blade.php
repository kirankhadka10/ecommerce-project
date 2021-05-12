@extends('adminlte::page')

@section('title', 'All Users')


@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title tect-bold">All Users</h3>
        <div class="card-tools">
          <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-sm">
            Add New User
          </a>
        </div>
      </div>
      
      <div class="card-body">
        <table class="table">

          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>E-mail</td>
              <td>Role</td> 
              <td>Action</td>           
            </tr>
          </thead>

          <tbody>
              @foreach ($users as $user )
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role}}</td>

                  <td>
                    <a href="{{route('admin.users.show',$user->id)}}" class="btn btn-secondary btn-sm">Details</a>

                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>

                    <button></button>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
@stop
