@extends('admin.layout')
@section('content')
<div class="container">
    <h3 class="mt-5">View All riders</h3>
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
            <td>{{$rec->RiderName}}</td>
            <td>{{$rec->RiderPhone}}</td>
            <td>{{$rec->RiderAddress}}</td>
            <td>
                <button class="btn btn-primary btn-sm m-1" type="submit">Accept</button>
                <button type="submit" class="btn btn-danger btn-sm m-1">Reject</button>
            </td>
        </tr>
 
        @endforeach
    </table>
</div>
@endsection