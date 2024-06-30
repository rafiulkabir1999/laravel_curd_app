@extends('layouts.app')
@section('content')
<div class="pt-4 " style="min-height: 100vh">
    <p class="text-center pt-4 fs-3">Edit Student Info</p>
    <form action="{{ route('student.update',$student->id) }}" method="POST" class="w-50 border rounded-3 mx-auto p-4">
        
        @csrf
        @method('PUT')
         <div class="form-group pt-2">
            <label for="" class="form-label">Name</label>
            <input type="text" name='name' class="form-control" required value="{{ old('name', $student->name) }}">
         </div> 
         <div class="form-group pt-2">
            <label for="" class="form-label">Email</label>
            <input type="email" required class="form-control" name='email' value="{{ old('email', $student->email) }}">
         </div> 
         <div class="form-group pt-2">
            <label for="" class="form-label">Phone </label>
            <input type="text" required class="form-control" name='phone' value="{{ old('phone', $student->phone) }}">
         </div> 
         <div class="form-group pt-2">
            <label for="" class="form-label">Address</label>
            <input type="text" required class="form-control" name='address' value="{{ old('address', $student->address) }}">
         </div> 
         {{-- <div class="">
            <label for="">ID</label>
            <input type="text" required name='id' value="{{ old('id', $student->s_id) }}">
         </div>  --}}
         
         <button  type='submit' class="btn mt-4 btn-primary form-control p-2">Save</button>
    
    </form>
</div>
@stop