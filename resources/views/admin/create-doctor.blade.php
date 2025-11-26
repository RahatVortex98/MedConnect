<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Doctor</title>

    <!-- Corona Admin CSS -->
    <link rel="stylesheet" href="/admin_end/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin_end/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin_end/assets/css/style.css">
</head>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body class="bg-dark">

<div class="container-scroller">

    <div class="content-wrapper" style="padding-top:40px;">

        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="card" style="background: #1f1f1f; border-radius: 10px;">
                    <div class="card-body">

                        <h3 class="text-white mb-4">Add Doctor</h3>

                        <form action="{{ route('admin.store.doctor') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <!-- Doctor Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Doctor Photo</label>
                                        <input type="file" name="pic" class="form-control" accept=".jpg, .jpeg, .png" >
                                    </div>
                                </div>

                                <!-- Doctor Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Doctor Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                    </div>
                                </div>

                                <!-- Speciality -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Speciality</label>
                                        <input type="text" name="speciality" class="form-control" placeholder="Cardiology, Neurology" required>
                                    </div>
                                </div>

                                <!-- Day of Week -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Available Day</label>
                                        <select name="day_of_week" class="form-control" required>
                                            <option value="">Select Day</option>
                                            <option value="monday">Monday</option>
                                            <option value="tuesday">Tuesday</option>
                                            <option value="wednesday">Wednesday</option>
                                            <option value="thursday">Thursday</option>
                                            <option value="friday">Friday</option>
                                            <option value="saturday">Saturday</option>
                                            <option value="sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Start Time -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Start Time</label>
                                        <input type="time" name="start_time" class="form-control" required>
                                    </div>
                                </div>

                                <!-- End Time -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">End Time</label>
                                        <input type="time" name="end_time" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Room -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Room Number</label>
                                        <input type="number" name="room" class="form-control" placeholder="Enter room no." required>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-white">Phone</label>
                                        <input type="text" name="phone_number" class="form-control" placeholder="Enter phone no.">
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-block">Create Doctor</button>
                                 
                                </div>

                                

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<!-- Corona Admin JS -->
<script src="/admin_end/assets/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin_end/assets/js/off-canvas.js"></script>
<script src="/admin_end/assets/js/hoverable-collapse.js"></script>
<script src="/admin_end/assets/js/misc.js"></script>

</body>
</html>
