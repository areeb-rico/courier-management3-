
@extends('layout')
@section('content3')

<div class="container">
<div class="d-flex justify-content-center">
    
<div class="m-4">
    <h3>Rider Registration Form</h3>   
<hr>
    <form action="/addrider" method="post" class="w-100">
        @csrf
    <input type="text"name="RiderName" class="w-100 p-2 mt-2" placeholder="Rider Name">
    <input type="text" name="RiderEmail" class="w-100 p-2 mt-2" placeholder="Rider Email">
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
