
@extends('layout')
@section('content3')
<style>
    input{
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        margin-bottom: 10px;
    }
    .btnbecome
    {
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        margin-top: 10px;
        margin-bottom: 80px;
    }
</style>
<div class="container">
   @if(Auth::user()->rider_request == 'no')
    <h3 class="my-3">Become a Rider</h3>

        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
    <form action="/updateriderrequest/{{Auth::user()->id}}" method="post">
        @csrf
        <input type="text" class="p-1 w-100" readonly value="{{Auth::user()->name}}" name="name" placeholder="Name" required>
         <input type="text" class="p-1 w-100" readonly value="{{Auth::user()->email}}" name="email" placeholder="Email" required>
         <input type="text" class="p-1 w-100" name="rider_phone" placeholder="Phone Number" required>
         <input type="text" class="p-1 w-100" name="rider_address" placeholder="Address" required>
         <button type="submit" class=" btn btn-primary w-100 btnbecome">Request to Become a Rider</button>
    </form>
    @else
    <h3 class="text-center my-5 ">Application already submitted</h3><p class="text-center mt-5">Kindly wait for a while , we are currently processing your application</p>
    <center>
        <a class="text-center text-dark" href="/" >Go to Home</a>

    </center>
    @endif
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection