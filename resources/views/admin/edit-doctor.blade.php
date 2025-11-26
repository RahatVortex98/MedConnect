<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor: {{ $doctor->name }}</title>

    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_end/assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('admin_end/assets/images/favicon.png') }}" />
</head>

<body class="bg-dark">

<div class="container-scroller">
    
    <div class="content-wrapper" style="padding-top:40px;">
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                
                
                <div class="card" style="background: #1f1f1f; border-radius: 10px;">
                    <div class="card-body">

                        <h3 class="text-white mb-4">Edit Doctor: {{ $doctor->name }}</h3>

                        {{-- 🛠️ FIX 1: Correctly pass the doctor ID to the update route --}}
                        <form action="{{ route('admin.update.doctor', $doctor) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Doctor Name</label>
                                        {{-- 🛠️ FIX 2: Pre-fill field with existing data, falling back to old input --}}
                                        <input type="text" name="name" class="form-control" 
                                               value="{{ old('name', $doctor->name) }}" required >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Speciality</label>
                                        <input type="text" name="speciality" class="form-control" 
                                               value="{{ old('speciality', $doctor->speciality) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Available Day</label>
                                        <select name="day_of_week" class="form-control text-white bg-dark border-secondary" required>
                                            <option value="">Select Day</option>
                                            {{-- 🛠️ FIX 3: Loop through days and set 'selected' based on current data --}}
                                            @php
                                                $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
                                            @endphp
                                            @foreach ($days as $day)
                                                <option value="{{ $day }}" 
                                                    {{ old('day_of_week', $doctor->day_of_week) == $day ? 'selected' : '' }}>
                                                    {{ ucfirst($day) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Start Time</label>
                                        <input type="time" name="start_time" class="form-control" 
                                               value="{{ old('start_time', $doctor->start_time) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">End Time</label>
                                        <input type="time" name="end_time" class="form-control" 
                                               value="{{ old('end_time', $doctor->end_time) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Room Number</label>
                                        <input type="number" name="room" class="form-control" placeholder="Enter room no." 
                                               value="{{ old('room', $doctor->room) }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Phone</label>
                                        <input type="text" name="phone_number" class="form-control" placeholder="Enter phone no." 
                                               value="{{ old('phone_number', $doctor->phone_number) }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white d-block">Current Photo</label>
                                        @if($doctor->pic)
                                            <img src="{{ asset('doctor_images/' . $doctor->pic) }}" alt="Current Photo" 
                                                 style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;" class="mb-2">
                                        @else
                                            <p class="text-warning">No photo currently set.</p>
                                        @endif

                                        <label class="text-white mt-2">Change Photo (Optional)</label>
                                        <input type="file" name="pic" class="form-control" accept=".jpg, .jpeg, .png">
                                        <small class="text-muted">Leave blank to keep the current photo.</small>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update Doctor Details</button>
                                </div>

                            </div>
                        </form>

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

</body>
</html>