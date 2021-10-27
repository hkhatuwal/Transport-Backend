@extends('layout.header')
@section('main-content')

<input type="hidden" name="" id="id" value="{{$id}}">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Map</li>
  </ol>
</nav>
<div id="googleMap" style="width:100%;height: 500px;"></div>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tween.js/18.6.4/tween.umd.js" integrity="sha512-lIKG1kC5TMb1Zx32vdz1n31YJMZRknVY20U9MJ28hD3y2c0OKN0Ce5NhJji78v8zX5UOSsm+MTBOcJt7yMBnSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function myMap() {
        const firebaseConfig = {
            apiKey: "AI222222222222222222222222222222fIoPMXA",
            authDomain: "tra2222222222222222p.com",
            projectId: "tra22222222296",
            storageBucket: "trans222222222pot.com",
            messagingSenderId: "5160222222768",
            appId: "1:512222222222222222222226360332d",
            measurementId: "G-2222222222222222Z4"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        var mapProp = {

            center: new google.maps.LatLng(51.508742, -0.120850),

            zoom: 16,
            heading: 270,
            mapId: "90f87356969d889c",


        };
        const image = {
            url: "http://localhost/transport-backend/resources/img/car.png",
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32),
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var db = firebase.firestore();
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(51.508742, -0.120850),
            title: "Hello World!",
            icon: image
        });
        var vehicleNum=document.getElementById("id").value;

        db.collection("Driver").doc(vehicleNum).onSnapshot((doc) => {
            var data = doc.data();

            console.log(data);
            marker.setMap(null);
            // console.log("Heading",data.heading)
            // map.panBy(29,29);


            marker = new google.maps.Marker({
                position: new google.maps.LatLng(data.latitude, data.longitude),
                map,
                title: "Hello World!",
                icon: "http://localhost/transport-backend/resources/img/car2.png"
            });
            map.panTo(new google.maps.LatLng(data.latitude, data.longitude));
            map.setHeading(map.getHeading() + 90);
        console.log("Heading of map", map.getHeading());
        });
       




    }
</script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=your_map_key&callback=myMap&v=beta"
      async
    ></script>
@stop
