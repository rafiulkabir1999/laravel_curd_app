@extends('layouts.dashboard')
@section('content')
 <div class="">
    <div class="">
        <button class=" btn p-2 mb-2" style="background:#00652e">
            <a href="/showrooms/create" class="text-white text-decoration-none">
                Create Showroom</a>
        </button>
    </div>
    <table class="table my-2 table-striped">
        <thead>
            <tr class="bg-dark text-white">
               
                 <th>
                    Showroom Name
                </th>
                 
                <th>
                    Showroom Address

                </th>
                
                <th>
                    Phone Number

                </th>
               
               
                <th>
                Map

                </th>
                
                <th>
                Action

                </th>
            
            </tr>
        </thead>
        <tbody>
            @foreach($showrooms as $item)
                <tr>
                    {{-- <td>SHAW000{{$item->id}}</td> --}}
                    <td>{{$item->ShowroomName}}</td>
                    <td>{{$item->ShowroomAddress}}</td>
                    <td>{{$item->PhoneNumber}}</td>
                    {{-- <td>{{$item->Email}}</td> --}}
                    {{-- <td>{{$item->Remark}}</td> --}}
                    <td>
                        <a href="#">Map Link</a>
                        {{-- {{$item->MapAddress}} --}}
                    </td>
                    {{-- <td>{{$item->Area}}</td> --}}
                    <td>
                        <div class="d-flex gap-1">
                            <button class="btn-sm btn-primary">
                                <a href="/showrooms/show/{{$item->id}}" class="text-white text-decoration-none">
                                    Show
                                </a>
                            </button>
                            <button class="btn-sm btn-warning">
                                <a href="showrooms/edit/{{$item->id}}">edit</a>
                            </button>
                            <form action="{{ route('showrooms.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger " type='submit'>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 </div>
@endsection