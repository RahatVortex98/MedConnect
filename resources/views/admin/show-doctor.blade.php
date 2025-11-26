<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Doctor Details</title>
 
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/css/style.css') }}">
 
    <link rel="shortcut icon" href="{{ asset('admin_end/assets/images/favicon.png') }}" />
  </head>
  <body>
    
    <div class="container-scroller">
        
      @include('admin.admin-navbar')

      <div class="container-fluid page-body-wrapper"> 
          
        <div class="main-panel"> 
            
        

          <div class="content-wrapper">
              
              <div class="row mt-4">
                  <div class="col-lg-12 grid-margin stretch-card"> 
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title text-white mb-4">Doctor Details: {{ $doctor->name }}</h4>
                              
                              <div class="row">
                                  <div class="col-md-4 text-center mb-4">
                                      <div class="profile-pic-wrapper">
                                          @if($doctor->pic)
                                              <img src="{{ asset('doctor_images/' . $doctor->pic) }}" alt="{{ $doctor->name }}" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                          @else
                                              <img src="{{ asset('images/default_doctor.png') }}" alt="No Photo" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover; background: #2b2b3c;"> 
                                          @endif
                                      </div>
                                      <h5 class="mt-3">{{ $doctor->name }}</h5>
                                      <p class="text-secondary">{{ $doctor->speciality }}</p>
                                  </div>

                                  <div class="col-md-8">
                                      <div class="table-responsive">
                                          <table class="table table-dark table-striped">
                                              <tbody>
                                                  <tr><td>Name</td><td>{{ $doctor->name }}</td></tr>
                                                  <tr><td>Speciality</td><td>{{ $doctor->speciality }}</td></tr>
                                                  <tr><td>Phone Number</td><td>{{ $doctor->phone_number }}</td></tr>
                                                  <tr><td>Room Number</td><td>{{ $doctor->room }}</td></tr>
                                                  <tr><td>Available Day</td><td>{{ $doctor->day_of_week }}</td></tr>
                                                  <tr><td>Start Time</td><td>{{ $doctor->start_time }}</td></tr>
                                                  <tr><td>End Time</td><td>{{ $doctor->end_time }}</td></tr>
                                                  <tr><td>Added On</td><td>{{ $doctor->created_at->format('M d, Y') }}</td></tr>
                                              </tbody>
                                          </table>
                                      </div>
                                      <div class="mt-4">
                                          <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                                              <i class="mdi mdi-arrow-left"></i> Back to Dashboard
                                          </a>
                                          <a href="{{ route('admin.edit.doctor',$doctor) }}" class="btn btn-secondary">
                                              <i class="mdi mdi-arrow-right"></i> Edit
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    <script src="{{ asset('admin_end/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin_end/assets/js/todolist.js') }}"></script>

    </body>
</html>