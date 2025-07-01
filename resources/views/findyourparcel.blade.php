@extends('layout')
@section('content3')
<div class="container">
    <h3>Find Your Parcel</h3>
    <hr>
    <div class="d-flex align-items-center justify-content-center">
        <div class="text-center">
            <p>Enter the <b>7 Digit Code</b> in the field below</p>
            <p class="">Powered by Pakistan’s most trusted delivery network
Enter your parcel code to get instant, accurate tracking</p>
            <div class="d-flex justify-content-center">
                <input type="text" id="parcelcode" class="form-control w-25 mx-2" placeholder="Parcel Code">
                <button class="btn btn-warning" onclick="finduserparcel()">Find</button>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="card w-75 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Parcel Details</h5>
        <table class="table table-bordered">
            <tr>
                <th>Parcel Code</th>
                <td id="parcelcode_output">N/A</td>
            </tr>
            <tr>
                <th>Parcel Name</th>
                <td id="parcelname_output">N/A</td>
            </tr>
            <tr>
                <th>Sent By</th>
                <td id="parcelsentby_output">N/A</td>
            </tr>
            <tr>
                <th>Sent To (Name)</th>
                <td id="parcelsenttoname_output">N/A</td>
            </tr>
            <tr>
                <th>Sent To (Location)</th>
                <td id="parcelsenttolocation_output">N/A</td>
            </tr>
            <tr>
                <th>Parcel Location</th>
                <td id="parcelsentbylocation_output">N/A</td>
            </tr>
            <tr>
                <th>Parcel Weight</th>
                <td id="parcelweight_output">N/A</td>
            </tr>
            <tr>
                <th>Parcel Status</th>
                <td id="parcelstatus_output">N/A</td>
            </tr>
            <tr>
                <th>Rider Name</th>
                <td id="ridername_output">N/A</td>
            </tr>
            <tr>
                <th>Rider PhoneNumber</th>
                <td>
                    <a href="" id="riderphone_output">Phone Rider</a>
                </td>
            </tr>
            <tr>
                <th>Parcel Image</th>
                <td>
                    <a href="" style="color: blue;" id="parcelimage_output">View File</a>
                </td>
            </tr>
            <tr>
                <th>Rider Last Updated Location</th>
                <td>
                    <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                    id="mymapframe" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </td>
            </tr>
        </table>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    function finduserparcel() {
        var mapurl;
        var parcelcode = $('#parcelcode').val();

        var pimg = document.getElementById('parcelimage_output')
        var rphone = document.getElementById('riderphone_output')
        var map = document.getElementById('mymapframe')
        $.ajax({
            url: "/finduserparcel",
            type: "POST",
            data: {
                "PCode": parcelcode,
                "_token": "{{ csrf_token() }}"
            },
            success: function(response) {
                console.log(response)
                $('#parcelcode_output').text(response[0]?.ParcelCode ?? 'Not Found')
                $('#parcelname_output').text(response[0]?.ParcelName ?? 'Not Found')
                $('#parcelsentby_output').text(response[0]?.SentByName ?? 'Not Found')
                $('#parcelsenttoname_output').text(response[0]?.SentToName ?? 'Not Found')
                $('#parcelsenttolocation_output').text(response[0]?.SentToLocation ?? 'Not Found')
                $('#parcelsentbylocation_output').text(response[0]?.SentByLocation ?? 'Not Found')
                $('#parcelweight_output').text(response[0]?.ParcelWeight + " " + response[0].ParcelUnit ?? 'Not Found')
                $('#parcelstatus_output').text(response[0]?.ParcelStatus ?? 'Not Found')
                $('#ridername_output').text(response[0]?.RiderName ?? 'Not Found')

                pimg.href = "ParcelImages/" + response[0]?.ParcelImage ?? 'Not Found'
                rphone.href = "tel:" + response[0]?.RiderPhone ?? 'Not Found'
                let lat = response[0].Latitude;
                let lng = response[0].Longitude;
                mapurl = `https://www.google.com/maps?q=${lat},${lng}&hl=es;z=14&output=embed`;
                map.src = mapurl
            }
        })
    }
</script>
@endsection