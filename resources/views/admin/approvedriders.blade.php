@extends('admin.layout')
@section('content')
<div class="container">
    <h3 class="mt-5">Approved Riders</h3>
    @if(session('Message'))
    <div class="alert alert-success">
        {{session('Message')}}
    </div>
    @endif
    @if(session('Error'))
    <div class="alert alert-danger">
        {{session('Error')}}
    </div>
    @endif  
    <hr>
    <table class="table table-striped">
        <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        @foreach($riders as $rider)
        <tr>
            <td>{{$rider->id}}</td>
            <td>{{$rider->name}}</td>
            <td>{{$rider->rider_phone}}</td>
            <td>{{$rider->rider_address}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection