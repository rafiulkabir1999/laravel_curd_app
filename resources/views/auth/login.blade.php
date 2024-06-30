@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-center align-items-center"style="min-height: 90vh">

    <div  class="mx-auto w-25  shadow rounded-3 p-4">
        <p class="fs-5 p-0 text-center">Login in here</p>
        <form action="{{route('auth.check')}}" post='POST'>
            @csrf
            <div class="form-group">
              <label for="text-left">Name</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group pt-2">
              <label for="text-left">Password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="form-group pt-4">
              
              <input type="submit"  id="" class="form-control bg-primary text-white" placeholder="" aria-describedby="helpId">
              
            </div>
            <div class="">
                <p class="text-center text-6 p-2 text-muted">
                  <a href="/register">Register User</a>
                </p>
            </div>
        </form>
    </div>
</div>
@stop