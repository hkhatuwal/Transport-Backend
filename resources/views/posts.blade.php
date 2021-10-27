@extends("layout.header")
@section("main-content")
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
  </ol>
</nav>
<div class="row">

    <input type="hidden" value="{{$id}}" id="id">

    <script>
        $(document).ready(function() {
            var mainDiv = document.getElementsByClassName("row");
            var value=document.getElementById("id").value;
            console.log(value);
            $.get("http://himanshu.medyku.com/api/get_post_data_by_id?id="+value, function(data, status) {
                data.forEach(element => {
                    var date = new Date(element.created_at);

                    var d = moment(date).format('DD-MM-YYYY hh:mm:ss:a');


                    var card = `   <div class="col-4">
        <div class="card ">

            <div class="card-body p-2">
           
                <div class="chocolat-parent">
                    <a href="${element.image_url}" class="chocolat-image" title="Just an example">
                        <div class="center d-flex justify-content-center">

                            <img alt="image" style="max-height:auto;" src="${element.image_url}" class="img-fluid">
                        </div>
                    </a>
                </div>
            </div>
            <div class="card-header">
                
                <div class="card-header-action" style="width:100%;">
                    <a style="width:100%;" target="_blank" href="https://maps.google.com/?q=${element.latitude},${element.longitude}" class="btn btn-primary">Open Map</a>
                </div>
            </div>
        </div>
</div>
`;
                    $('.row').append(card);
                });
            });
        })
    </script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
    <script>
        // Import the functions you need from the SDKs you need

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional


    </script>

</div>

@stop