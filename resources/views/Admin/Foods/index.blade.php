
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foods</title>
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
                        <h4 class="card-title">Foods table</h4>
                        <a href="{{route('food.create')}}" class="btn btn-info">Add Food</a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> Id </th>
                            <th> Food Name </th>
                            <th> Description </th>
                            <th> Price </th>
                            <th> Image </th>
                            <th> Status </th>
                            <th> Edit </th>
                            <th> Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($foods as $food)
                            <tr>
                                <td>{{$food->id}}</td>
                                <td>{{$food->name}}</td>
                                <td>{{$food->description}}</td>
                                <td>$ {{$food->price}}</td>
                                <td>
                                    <img src="{{asset('Admin/images/Foods/'.$food->image)}}"  alt="">
                                </td>
                                @if($food->status == 1)
                                <td>
                                    Active
                                </td>
                                @else
                                <td>
                                    Deactive
                                </td>
                                @endif
                                <td>
                                    <a href="{{route('food.edit',$food->id)}}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('food.destroy',$food->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Delete">
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