@extends('layouts.app')

@section('content')
   <div class="pt-4" style="min-height: 100vh">
    <p class="text-center fs-3">Creatre A Student Here</p>
    <form action="{{ route('student.store') }}" method="POST" class="w-50 mx-auto p-4 border rounded-1">
        
        @csrf
         <div class="form-group pt-2">
            <label for="" class="form-label">Name</label>
            <input type="text" name='name' class="form-control" required>
         </div> 
         <div class="form-group pt-2">
            <label for="" class="form-label">Email</label>
            <input type="email" required  class="form-control" name='email'>
         </div> 
         <div class="form-group pt-2">
            <label for="" class="form-label">Phone </label>
            <input type="text" required class="form-control" name='phone'>
         </div> 
         <div class="form-grupu">
            <label class="form-label" for="">Address</label>
            <input type="text" class="form-control" required name='address'>
         </div> 
         {{-- <div class="">
            <label for="">ID</label>
            <input type="text" required name='id'>
         </div>  --}}
         
         <button  type='submit' class="btn form-control btn-primary p-2 mt-4">Save</button>

    </form>
   </div>
@stop