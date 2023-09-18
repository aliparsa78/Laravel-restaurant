
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chefs</title>
    <base href="{{asset('public')}}">
    @include('../Admin.link')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('../Admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('../Admin/navbar')
        <div class="main-panel">
          <div class="content-wrapper">
          
          <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Adding Chefs </h4>
                    <form method="Post" action="{{route('chef.store')}}"  class="forms" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputName1">Chef Name</label>
                              <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" >
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputName1">Last Name</label>
                              <input type="text" name="lastname" class="form-control" id="exampleInputName1" placeholder="Last Name" >
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputCity1">Email</label>
                              <input type="email" name="email" class="form-control" id="exampleInputCity1" placeholder="Email">
                            </div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputCity1">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputCity1" placeholder="Address">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputCity1">Phone</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputCity1" placeholder="Phone">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputCity1">Role</label>
                            <input type="text" name="role" class="form-control" id="exampleInputCity1" placeholder="Role as">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputCity1">Salary</label>
                            <input type="text" name="salary" class="form-control" id="exampleInputCity1" placeholder="Salary">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputCity1">Start Protocol</label>
                            <input type="date" name="start_protocol" class="form-control" placeholder="Start Protocol" >
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputCity1">End Protocol</label>
                              <input type="date" name="end_protocol" class="form-control" placeholder="End Protocol" >
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputCity1">Profile</label>
                          <input type="file" name="profile" class="form-control" >
                        </div>
                      
                      
                      <input type="submit" class="btn btn-primary me-2" value="Submit">
                    </form>
                  </div>
                </div>
              </div>


          


          <!-- content-wrapper ends -->
          @include('../Admin/footer')
        </div>
        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    @include('../Admin.scriptLink')
  </body>
</html>