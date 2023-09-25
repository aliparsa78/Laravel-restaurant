
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reservation</title>
    @include('Admin.link')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('Admin/navbar')
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                    @if(Session()->has('success'))
                          <div class="alert alert-success">
                              <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> -->
                              <h5 class="text-center" style="font-weight: bold">{{Session::get('success')}}</h5>
                          </div>
                      @endif
                      @if(Session()->has('faild'))
                          <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                              <h5 class="text-center" style="font-weight: bold">{{Session::get('faild')}}</h5>
                          </div>
                      @endif
                    <div id="title" >
                        <h4 class="card-title">Reservation table</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Guest Number </th>
                            <th> Date </th>
                            <th> Time </th>
                            <th> Status </th>
                            <th> Checkout </th>
                            <th> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($reserves as $reserve)
                            <tr>
                                <td>{{$reserve->id}}</td>
                                <td>{{$reserve->name}}</td>
                                <td>{{$reserve->email}}</td>
                                <td>{{$reserve->phone}}</td>
                                <td>{{$reserve->gust_number}} Guest</td>
                                <td>{{$reserve->date}}</td>
                                <td>{{$reserve->time}}</td>
                                @if($reserve->status == 1)
                                <td>
                                  <h5 class="text-success">Reserved</h5>
                                </td>
                                @else
                                <td>
                                  <h5 class="text-warning">Checkouted</h5>
                                </td>
                                @endif
                                <td>
                                    <a href="{{route('reserve.edit',$reserve->id)}}" class="btn btn-info">Checkout</a>
                                </td>
                                <td>
                                    <form action="{{route('reserve.destroy',$reserve->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" onclick="return(confirm('Do you wan to delete Reservation ?'))" class="btn btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>            
          </div>
          <!-- content-wrapper ends -->
          @include('Admin/footer')
        </div>

        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    @include('Admin.scriptLink')
  </body>
</html>