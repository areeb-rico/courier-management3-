
@extends('layout')
@section('content3')

<div class="container">
<div class="d-flex justify-content-center">
    
<div class="m-4">
    <h3>Rider Registration Form</h3>

    @if(session('Message'))
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
        <strong>Alert</strong> Rider has been added
    </div>
    
    <script>
        var alertList = document.querySelectorAll(".alert");
        alertList.forEach(function (alert) {
            new bootstrap.Alert(alert);
        });
    </script>
    
    @endif
<hr>
    <form action="/addrider" method="post" class="w-100">
        @csrf
    <input type="text" readonly value="{{Auth::user()->name}}" name="RiderName" class="w-100 p-2 mt-2" placeholder="Rider Name">
    <input type="text" readonly value="{{Auth::user()->email}}" name="RiderEmail" class="w-100 p-2 mt-2" placeholder="Rider Email">
    <input type="text" name="RiderPhone" class="w-100 p-2 mt-2" placeholder="Rider Phone Number">
    <input type="text" name="RiderPassword" class="w-100 p-2 mt-2" placeholder="Rider Password">
    <input type="text" name="RiderCnic" class="w-100 p-2 mt-2" placeholder="Rider Cnic">
    <input type="text" name="RiderAddress" class="w-100 p-2 mt-2" placeholder="Rider Address">
    
    
    <button type="submit" class="w-100 btn btn-warning mt-4">Register as Rider</button>
</form>
<a href="/riderlogin" class="text-dark">Login to your account ?</a>
</div>
</div>
</div>
@endsection
