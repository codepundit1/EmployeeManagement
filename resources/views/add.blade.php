@extends('layout')
@section('content')
<div class="container">
    <div class="col-md-6" style="margin: 0 auto;">
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
