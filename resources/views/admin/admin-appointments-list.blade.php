<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Appointment Requests</title>
 
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/css/style.css') }}">
 
    <link rel="shortcut icon" href="{{ asset('admin_end/assets/images/favicon.png') }}" />

    <style>
    /* 1. Ensure the card container row is always full width of the main-panel */
    .full-width-card .card {
        width: 100% !important;
        max-width: 100% !important;
    }

    /* 2. Fix table cell wrapping, keeping the table width intact */
    .table td, .table th {
        white-space: nowrap; /* Prevent content from wrapping unless explicitly allowed */
    }
    
    /* 3. Allow message to wrap in its designated column */
    .message-column {
        max-width: 200px;
        white-space: normal !important; /* Forces wrapping inside this cell */
    }
</style>

  </head>
  <body>
    
    <div class="container-scroller">
        
        @include('admin.admin-navbar')

      <div class="container-fluid page-body-wrapper"> 
            {{-- FIX: INCLUDE THE SIDEBAR HERE TO PREVENT MAIN CONTENT FROM EXPANDING TO FULL WIDTH --}}
           
           
            
        <div class="main-panel"> 
            
          <div class="content-wrapper">
              
              {{-- Using col-lg-12 and grid-margin stretch-card to ensure it takes full main-panel width --}}
              <div class="row full-width-card mt-4">
                  <div class="col-lg-12 grid-margin stretch-card"> 
                      <div class="card">
                          <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title text-white mb-0">Appointment Requests</h4>
                                    {{-- ADDED: Back to Dashboard Button --}}
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-info">Back to Dashboard</a>
                                </div>
                                
                                <p class="card-description">List of all appointments submitted by users.</p>

                                {{-- Success Message --}}
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                @endif

                                {{-- 🎯 FIX: Table Responsive Wrapper for horizontal scrolling --}}
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Requested Date</th>
                                                <th>Speciality</th>
                                                <th>Status</th>
                                                <th>Message</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($appointments as $appointment)
                                                <tr>
                                                    <td>{{ $appointment->full_name }}</td>
                                                    <td>{{ $appointment->email_address }}</td>
                                                    <td>{{ $appointment->number }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($appointment->date)->format('M d, Y') }}</td>
                                                    <td>{{ $appointment->speciality }}</td>
                                                    <td>
                                                        <span class="badge 
                                                            @if($appointment->status === 'in progress') badge-warning
                                                            @elseif($appointment->status === 'approved') badge-success
                                                            @elseif($appointment->status === 'canceled') badge-danger
                                                            @endif
                                                        ">
                                                            {{ ucfirst($appointment->status) }}
                                                        </span>
                                                    </td>
    
                                                    <td class="message-column">{{ Str::limit($appointment->message, 30) }}</td>
    
                                                    <td>
                                                        @if($appointment->status === 'in progress')
                                                            <a href="{{ route('admin.appointment.approve', $appointment->id) }}" class="btn btn-success btn-sm mb-1">Approve</a>
                                                            <a href="{{ route('admin.appointment.cancel', $appointment->id) }}" class="btn btn-danger btn-sm mb-1">Cancel</a>
                                                        @else
                                                            <button class="btn btn-secondary btn-sm" disabled>Processed</button>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center">No appointment requests found.</td>
                                                </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>

                          </div>
                      </div>
                  </div>
              </div>
              
            {{-- OPTIONAL: Add footer back if you want it at the bottom of the page --}}
            {{-- @include('admin.admin-footer') --}}
            
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