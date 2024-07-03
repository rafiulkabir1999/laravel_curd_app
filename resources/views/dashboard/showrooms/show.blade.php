@extends('layouts.dashboard')
@section('content')
<div>
    <table class="table">
        <tbody>
            @foreach($showroom as $item)
            <tr>
                {{$item}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection