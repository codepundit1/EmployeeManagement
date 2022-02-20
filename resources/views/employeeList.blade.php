@extends('layout')
@section('content')
<div class="container">
   <span class="row">
     <span class="col-md-8"> <h2 class="mb-3">Employee List</h2></span>
     <span class="col-md-4"><a href="/add" class="btn btn-primary btn-sm float-end">Add Employee</a></span>
   </span>

   @if (Session::has('status'))

  <div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
    {{Session::get('status')}}
  </div>
   @endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $list)
            <tr>
                <td>{{$list->name}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->phone}}</td>
                <td>
                    <a href="/edit/{{$list->id}}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="/delete/{{$list->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" ></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
