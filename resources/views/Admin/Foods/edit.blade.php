
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Foods</title>
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
                    <h4 class="card-title">Adding Foods </h4>
                    <form method="Post" action="{{route('food.update',$food->id)}}"  class="forms" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Food Name</label>
                        <input type="text" name="name" class="form-control" value="{{$food->name}}" >
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <textarea class="form-control color-white" name="description" value="{{$food->description}}" rows="4">{{$food->description}}</textarea>
                      </div>
                      <div class="form-group">
                          <img src="{{asset('Admin/Images/Foods/'.$food->image)}}"  style="width: 100px; margin-bottom: 1rem"> <br>
                        <label>Upload Image</label> <br>

                        <input type="file" name="image" class="" style="border: 1px solid gray; width: 100%;">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Price</label>
                        <input type="text" name="price" class="form-control" value="{{$food->price}}">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">status</label>
                        <select class="form-control text-white" name="status" id="exampleSelectGender" >
                          <option value="1" <?php if($food->status==1){echo 'selected';} ?>>Active</option>
                          <option value="0" <?php if($food->status==0){echo 'selected';} ?> >DeActive</option>
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