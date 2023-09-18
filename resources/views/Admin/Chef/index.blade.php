
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

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
                    <div id="title">
                        <h4 class="card-title">Chef table</h4>
                        <a href="{{route('chef.create')}}" class="btn btn-info"><i class="fa fa-plus"></i> Add Chef</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Chef id </th>
                            <th> First name </th>
                            <th> last name </th>
                            <th> Email </th>
                            <th> Profile </th>
                            <th> Address </th>
                            <th> Phone </th>
                            <th> Salary </th>
                            <th> Role </th>
                            <th> Start Protocol</th>
                            <th> End Protocol</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($chefs as $chef)
                            <tr>
                                <td>{{$chef->id}}</td>
                                <td>{{$chef->name}}</td>
                                <td>{{$chef->lastname}}</td>
                                <td>{{$chef->email}}</td>
                                <td>
                                  <img src="{{asset('Admin/images/Chef/'.$chef->profile)}}" alt="">
                                </td>
                                <td>{{$chef->address}}</td>
                                <td>{{$chef->phone}}</td>
                                <td>{{$chef->salary}}</td>
                                <td>{{$chef->role}}</td>
                                <td>{{$chef->start_protocol}}</td>
                                <td>{{$chef->end_protocol}}</td>
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