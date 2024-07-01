@extends('layouts.app')
@section('content')
<div> 
    <div class="" style="min-height: 95vh">

        <div class="container py-4" >
            <div class="btn btn-secondary">
                <a href="/blog/create" class="text-decoration-none  text-light">
                    Create Blog
                </a>
            </div>
        </div>
        <div class="container">
            @if(sizeof($blogs) == 0)
    <div class="alert alert-danger">No blogs</div>
@endif

            
         <div class="row">
            @foreach($blogs as $item)
            
                
                <div class="col-3">
                    <div class="card">
                        <img src="http://127.0.0.1:8000/uploads/{{$item->img}}" class="img-fluid p-4" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->title}}</h5>
                            <p class="card-text text-truncate">{{$item->description}}</p>
                        </div>
                    </div>
                </div>
                
            
            @endforeach
         </div>
        </div>
    </div>
    <div>
@stop