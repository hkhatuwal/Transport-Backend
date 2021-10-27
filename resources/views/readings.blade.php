@extends("layout.header")
@section("main-content")
<div class="col-12 ">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Readings</li>
  </ol>
</nav>
    <input type="hidden"  id="id" value="{{$id}}">
                <div class="card">
                  <div class="card-header">
                    <h4>All Readings</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>#</th>
                          <th>Type</th>

                          <th>Time</th>
                          <th>Reading</th>
                        </tr>
                       <span></span>
                        
                      </table>
                    </div>
                  </div>
                  
                </div>
                <script>
    $(document).ready(function(){
$.get("http://himanshu.medyku.com/api/get_readings_by_id?id="+$("#id").val(),function(data,status){
    data.forEach(element => {
        var date=new Date(element.created_at);
        var d = moment(date).format('DD-MM-YYYY hh:mm:ss:a');
        var tr=` <tr>
                          <td>${element.id}</td>
                          <td>${element.type}</td>
                         
                          
                          <td>${d}
                          </td>
                          
                          <td>${element.value}</td>

                          </td>

                          
                        </tr>`;
                        $('.table').append(tr);
    });

    

});
    });
    
</script>
              </div>
@stop
