
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Slide</title>
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
                    <h4 class="card-title">Adding Slides </h4>
                    <form method="Post" action="{{route('slider.store')}}"  class="forms" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name" >
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Information</label>
                        <textarea class="form-control color-white" name="information" placeholder="Enter the information about slide" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Upload Image</label> <br>
                        <input type="file" name="image" class="" style="border: 1px solid gray; width: 100%;">
                      </div>
                     
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">status</label>
                        <select class="form-control text-white" name="status"  >
                          <option value="1">Active</option>
                          <option value="0">DeActive</option>
                        </select>
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