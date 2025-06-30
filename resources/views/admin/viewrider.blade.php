@extends('admin.layout')
@section('content')
<div class="container">
    <h3 class="mt-5">View All Riders Requests</h3>
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
            <th>
                Operations
            </th>
        </tr>
        @foreach($r as $rec)
        <tr>
            <td>{{$rec->id}}</td>
            <td>{{$rec->name}}</td>
            <td>{{$rec->rider_phone}}</td>
            <td>{{$rec->rider_address}}</td>
            <td>
                <form action="acceptrider/{{$rec->id}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm m-1" type="submit">Accept</button>
                </form>
                <button type="submit" class="btn btn-danger btn-sm m-1">Reject</button>
            </td>
             <td>
                <form action="rejectrider/{{$rec->id}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-sm m-1" type="submit">Accept</button>
                </form>
                <button type="submit" class="btn btn-danger btn-sm m-1">Reject</button>
            </td>
        </tr>
 
        @endforeach
    </table>
</div>
@endsection