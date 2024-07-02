@extends('layouts.app')
@section('content')
<div> 
    <div class="" style="min-height: 95vh">

        <div class="container py-4" >
            <div class="btn btn-secondary">
                <a href="/blogs/create" class="text-decoration-none  text-light">
                    Create Blog
                </a>
            </div>
        </div>
        <div class="container">
            @if(sizeof($blogs) == 0)
    <div class="alert alert-danger">No blogs</div>
@endif

            
         <div class="row gap-4">
            @foreach($blogs as $item)
            
                
                <div class="col-3">
                    <div class="card">
                        <img src="http://127.0.0.1:8000/uploads/{{$item->img}}" class="img-fluid p-4" alt="">
                        <div class="card-body">
                             
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text text-truncate">{{$item->description}}</p>
                            <div class="text-center d-flex gap-2 justify-content-center">
                                <button class="btn btn-warning me-2 text-light p-2">
                                    <a class="text-light text-decoration-none" href="/blogs/edit/{{$item->id}}">Edit</a></button>
                                    <form action="{{ route('blog.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger p-2">Delete</button>
                                    </form>
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
                
            
            @endforeach
         </div>
        </div>
    </div>
    <div>
@stop