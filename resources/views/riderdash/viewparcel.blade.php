@extends('riderdash.layout')
@section('content2')
<div class="body-wrapper ">
      <div class="body-wrapper-inner">
        <div class="container-fluid">
<div class="container">
    <h3 class="mt-5">View All Parcel</h3>
   <table class="table table-striped">
    <tr>
        <th>S.No</th>
        <th>Parcel Name</th>
        <th>Parcel Tracking Code</th>
        <th>sender</th>
         <th>receiverlocation</th>
          <th>Receiver</th>
          <th>operation</th>
    </tr>
    @foreach($parcels as $r)
    <tr>
        <td>{{$r->id}}</td>
        <td>{{$r->ParcelName}}</td>
        <td>{{$r->ParcelCode}}</td>
        <td>{{$r->SentByName}}</td>
        <td>{{$r->SentToLocation}}</td>
        <td>{{$r->SentToName}}</td>
        <td>
            <button class="btn btn-success">View More Details</button>
            <!-- <form action="/checkout" method="get">
                @csrf
                <input type="hidden" value="{{$r->id}}" name="parcelid">
                 <button class="btn btn-info">Checkout</button>
            </form> -->
        </td>
    </tr>
    @endforeach
   </table>
</div>
</div>
</div>
</div>
@endsection