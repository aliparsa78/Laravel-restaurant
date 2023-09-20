
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Chefs Edit</title>
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
                    <h4 class="card-title">Update Chefs Information </h4>
                    <form method="Post" action="{{route('chef.update',$chef->id)}}"  class="forms" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputName1">Chef Name</label>
                              <input type="text" name="name" class="form-control" value="{{$chef->name}}" >
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputName1">Last Name</label>
                              <input type="text" name="lastname" class="form-control" value="{{$chef->lastname}}">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputCity1">Email</label>
                              <input type="email" name="email" class="form-control"value="{{$chef->email}}">
                            </div>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputCity1">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$chef->address}}">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputCity1">Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$chef->phone}}">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="exampleInputCity1">Role</label>
                            <input type="text" name="role" class="form-control" value="{{$chef->role}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputCity1">Salary</label>
                            <input type="text" name="salary" class="form-control" value="{{$chef->salary}}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="exampleInputCity1">Start Protocol</label>
                            <input type="date" name="start_protocol" class="form-control" value="{{$chef->start_protocol}}" >
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputCity1">End Protocol</label>
                              <input type="date" name="end_protocol" class="form-control" value="{{$chef->end_protocol}}">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                            <img src="{{asset('Admin/Images/Chef/'.$chef->profile)}}" width="150px" height="150px" alt="Chef image">
                            <br>
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