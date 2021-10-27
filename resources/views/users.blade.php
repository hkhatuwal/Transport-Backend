@extends("layout.header")
@section("main-content")
<div class="col-12 ">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
                <div class="card">
                  <div class="card-header">
                    <h4>All Drivers</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Vehicle No</th>

                          <th>Status</th>
                          <th>Action</th>
                          <th>Other</th>
                        </tr>
                       <span></span>
                        
                      </table>
                    </div>
                  </div>
                  
                </div>
                <script>
    $(document).ready(function(){
$.get("http://himanshu.medyku.com/api/get_users",function(data,status){
    data.forEach(element => {
        var tr=` <tr>
                          <td>${element.id}</td>
                          <td>${element.vehicle_number}</td>
                         
                          
                          <td><a href="map/?id=${element.vehicle_number}" class="btn btn-primary">
                          <span <i class="fas fa-location-arrow m-r-5"></i></span>
                          Live Location</a>
                          </td>
                          <td><a href="readings/?id=${element.id}" class="btn btn-primary">
                          
                          Readings</a>
                          </td>
                          <td>
                          <form action="post" method="get">
                          <input type="hidden" name="id" h value="${element.id}"/>

                          <button type="submit" class="btn btn-primary">View</button>
                         
                          </form>
                          </td>

                          
                        </tr>`;
                        $('.table').append(tr);
    });

    

});
    });
    
</script>
              </div>
@stop
