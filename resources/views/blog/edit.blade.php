@extends('layouts.app')
@section('content')
 <div class="d-flex justify-content-center align-items-center " style="min-height: 95vh">
    <div class="d-flex justify-content-center align-items-center w-50 p-5 rounded-3"  >
        <form class="w-50 border p-4 rounded-3" action="{{ route('blog.update' , ['id'=>$blogs->id] )}}" method='POST' >
            @csrf
            @method('PUT')
            <div class="">
                 <label for="" class="form-label">Title</label>
                 <input type="title" class="form-control" name='title' value={{old('title',$blogs->title)}}>
            </div>
            
                 {{-- <input type="text" class="form-control" value={{old('title',$blogs->title)}}> --}}
                 <div class="form-group mt-3">
                    <label for="" class="form-label ">Description</label>
                    <textarea type="text" rows="7" name='description' class="form-control">
                    {{-- {{old('description',$blogs->description)}} --}}
                    {{$blogs->description}}
                </textarea>
                </div>
                
            <button type="submit" class="btn btn-primary p-2 mt-4 d-flex justify-content-end">Save</button>
            
        </form>
    </div>
 </div>
@stop