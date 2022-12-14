
<h2>Locate the User's Position</h2>
<p>The HTML Geolocation API is used to get the geographical position of a user.</p>
<p id="demo">Since this can compromise privacy, the position is not available unless the user approves it.</p>

<p><button class="btn btn-success" onclick="getLocation()">Try It</button></p>
<div id="mapholder"></div>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU"></script>
<script>
    var x=document.getElementById("demo");
    function getLocation()
    {
        if (navigator.geolocation)
        {
            navigator.geolocation.getCurrentPosition(showPosition,showError);
        }
        else{x.innerHTML="Geolocation is not supported by this browser.";}
    }

    function showPosition(position)
    {
        var lat=position.coords.latitude;
        var lon=position.coords.longitude;
        var latlon=new google.maps.LatLng(lat, lon)
        var mapholder=document.getElementById('mapholder')
        mapholder.style.height='250px';
        mapholder.style.width='100%';

        var myOptions={
            center:latlon,zoom:14,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            mapTypeControl:false,
            navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
        };
        var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
        var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
    }

    function showError(error)
    {
        switch(error.code)
        {
            case error.PERMISSION_DENIED:
                x.innerHTML="User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML="Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML="The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML="An unknown error occurred."
                break;
        }
    }
</script>
<div class="w3-panel w3-note">
    <p><strong>Note:</strong><b> </b>Geolocation is most accurate for devices with GPS, like smartphones.</p>
</div>
<hr>