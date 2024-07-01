@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center " style='min-height:95vh;' >
    <form action="{{route('blog.store')}}" method='post' enctype="multipart/form-data" class="w-50 mx-auto p-5 bg-light border rounded">
           <h4 class="text-center py-4">Create Your Blog Here</h4>
        @csrf
        <div class="">
            <label for="" class="form-label">Image</label>
            <input type="file" name='image' class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Title</label>
            <input type="text" name='title' class="form-control">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label ">Description</label>
            <textarea type="text" rows="7" name='description' class="form-control">
            </textarea>
        </div>
        <div class="form-group mt-3 d-flex justify-content-end">
            <button class="btn btn-primary ">Save</button>
        </div>
       </form>
</div>
@stop