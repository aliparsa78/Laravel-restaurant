
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
                    <h4 class="card-title">Customer table</h4>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> customer id </th>
                            <th> First name </th>
                            <th> Email </th>
                            <th> Profile </th>
                            <th> Register Date </th>
                            <th> Status </th>
                            <th> Block Customer </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                          <tr>
                            <td> {{$customer->id}} </td>
                            <td> {{$customer->name}} </td>
                            <td> {{$customer->email}} </td>
                            <td>
                                <img src="" alt=""> 
                            </td>
                            <td>{{$customer->created_at}}</td>
                            @if($customer->user_type == 0)
                            <td>Active</td>
                            @elseif($customer->user_type==2)
                            <td>Blocked</td>
                            @endif
                            <td> 
                                <form action="{{url('customer_block')}}" method="POST">
                                    @csrf 
                                    <input type="hidden" value="{{$customer->id}}">
                                    <input type="submit" value="block">
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