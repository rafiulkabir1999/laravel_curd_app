@extends('layouts.app')
@section('content')
<div class="my-4" style="min-height: 100vh">
    <a href='student/create' class="mb-4 btn btn-warning" >Create Student</a>
       
    
        <table class="table mt-4">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>ID</th>
                <th>Action</th>
            </tr>
      
       @foreach($data as $item)
       <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->id}}</td>
        <td>
            <div style="display: flex;gap:5px">
                {{-- <span style="background: red;color:white; padding:10px">DELETE</span> --}}
                <form action="{{route('student.delete',$item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                
               

                    <a href='student/edit/{{$item->id}}' class="btn btn-secondary text-decoration-none" style="height:38px">Edit</a>
               
            </div>
        </td>
    </tr>
        @endforeach
        </table>

</div>
@stop