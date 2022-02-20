@extends('layout')
@section('content')
<div class="container">
    <div class="col-md-6" style="margin: 0 auto;">
        <span class="row">
            <span class="col-md-8"> <h2 class="mb-3">Add Employee</h2></span>
            <span class="col-md-4"><a href="/list" class="btn btn-primary btn-sm float-end">Back</a></span>
          </span>
        <form action="add" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label for="">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email address">
            </div>

            <div class="mb-3">
                <label for="">PhoneNo.</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
            </div>
        <input type="submit" value="Submit" class="btn btn-success btn-sm">
        </form>
    </div>
</div>
@stop
