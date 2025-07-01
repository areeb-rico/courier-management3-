
    @extends('riderdash.layout')
    @section('content2')
    <div class="body-wrapper">
        <div class="body-wrapper-inner">
            <div class="container-fluid">
        <h3>Update Your Location</h3>
    <form class="d-flex my-2 my-lg-0" method="post" action="/addlocation">
        @csrf
        <input id="latitude" name="latitude" type="hidden" placeholder="Latitude">
        <input id="longitude" name="longitude" type="hidden" placeholder="Longitude">
        <input type="hidden" name="riderid" value="{{ session('riderid') }}">
        <button type="submit" class="btn btn-info">Share My Location</button>   
    </form>
    </div>
    </div>
    </div>
    <script>
    const lat = document.getElementById('latitude');
    const lon = document.getElementById('longitude');
    const btn = document.getElementById('submitBtn');

   if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(
    function (position) {
      document.getElementById('latitude').value = position.coords.latitude;
      document.getElementById('longitude').value = position.coords.longitude;
    },
    function (error) {
      alert("Location access denied or unavailable. Please allow location access.");
      console.error("Error getting location:", error.message);
    }
  );
} else {
  alert("Geolocation is not supported by this browser.");
}
</script>
<script>
window.onload = function () {
    const canvas = document.getElementById("yourCanvasId");
    if (canvas) {
        const ctx = canvas.getContext("2d");
        // your chart or drawing logic here
    } else {
        console.error("Canvas element not found.");
    }
};
</script>
    @endsection