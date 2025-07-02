@extends('riderdash.layout')
@section('content2')

 <div class="body-wrapper ">
      <div class="body-wrapper-inner">
        <div class="container-fluid">
<div class="container">
    <h3 class="mt-5">Upload Parcel</h3>
    <hr>
    @if(@session('success'))
    <div
        class="alert alert-success alert-dismissible fade show"
        role="alert"
    >
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
        <strong>Alert</strong> Parcel has been uploaded
    </div>
    
    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>
    
    @endif
   
    <form action="/uploadparcelform" method="post" enctype="multipart/form-data">
        @csrf
        
       <input type="text" name="ParcelName" class="w-100 p-2 mt-2" placeholder="Parcel Name" required>
        <input type="text" name="ParcelSender" class="w-100 p-2 mt-2" placeholder="Parcel Sender Name" required>
        <input type="text" name="ParcelSenderLocation" class="w-100 p-2 mt-2" placeholder="Parcel Sender Location" required>
        <input type="text" name="ParcelReceiver" class="w-100 p-2 mt-2" placeholder="Parcel Receiver" required>
        <input type="text" name="ParcelReceiverLocation" class="w-100 p-2 mt-2" placeholder="Parcel Receiver Location" required>
        <input type="text" name="ParcelReceiverPhoneNumber" class="w-100 p-2 mt-2" placeholder="Parcel Receiver PhoneNumber" required>
        <div class="row">
            <div class="col-6">
                <input type="text" name="ParcelWeight" class="w-100 p-2 mt-2" placeholder="Parcel Weight" required>
            </div>
            <div class="col-6 mt-2">
                <select name="ParcelUnit" class="p-2 w-100" id="">
                    <option value="KG">KGs</option>
                    <option value="MG">MGs</option>
                </select>
            </div>
        </div>
        <select name="RiderId" id="" class="w-100 p-1 mt-2 mb-2" required>
            <option value="" selected disabled>Select Rider</option>
            @foreach($rider as $r)
            <option value="{{$r->id}}">{{$r->name}}</option>
            @endforeach
        </select>
        <input type="file" class="w-100 p-1 form-control" name="ParcelImage">
        <button type="submit" class="btn btn-primary mt-2">Upload Parcel Info</button>
        
    </form>
</div>
</div>
</div>
</div>
@endsection