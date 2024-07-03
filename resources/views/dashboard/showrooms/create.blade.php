@extends('layouts.dashboard')
@section('content')
 <div class="">
    <div class="bg-dark p-2  text-white">Provide Showrooms Information</div>
    <form class=" p-5 border shadow rounded-b-3" action="{{route('showrooms.store')}}" method='POST'>
        @csrf
        <div class="pt-3">
            <label for="" class="form-label">ShowroomName</label>
            <input type="text" class="form-control" name='showroomname'>
            @error('showroomname')
                <span class='text-danger text-xs'>Showroom name is required</span>
            @enderror
        </div>
        <div class="pt-3">
            <label for="" class="form-label">ShowroomAddress</label>
            <input type="text" class="form-control" name='showroomaddress'>
        </div>
        <div class="pt-3">
            <label for="" class="form-label">PhoneNumber</label>
            <input type="number" class="form-control" name='phonenumber'>
        </div>
        <div class="pt-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name='email'>
        </div>
        <div class="pt-3">
            <label for="" class="form-label">Remarks</label>
            <input type="text" class="form-control" name='remarks'>
        </div>
        <div class="pt-3">
            <label for="" class="form-label">MapAddress</label>
            <input type="text" class="form-control" name='mapaddress'>
        </div>
        <div class="pt-3">
            <label for="" class="form-label">Area</label>
            <input type="text" class="form-control" name='area'>
        </div>
        
        <div class="pt-4 d-flex justify-content-end">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
 </div>
@endsection