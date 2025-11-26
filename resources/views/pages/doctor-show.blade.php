<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Details - {{ $doctor->name }}</title>

    <link rel="stylesheet" href="{{ asset('front_end/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/theme.css') }}">
</head>
<body>

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1>Doctor Details</h1>
        <p class="text-muted">{{ $doctor->speciality }}</p>
    </div>

    <div class="row justify-content-center">

        <!-- Doctor Photo -->
        <div class="col-md-4 text-center mb-4">
            @if($doctor->pic)
                <img src="{{ asset('doctor_images/' . $doctor->pic) }}" 
                     class="img-fluid rounded-circle mb-3"
                     style="width:170px; height:170px; object-fit:cover;">
            @else
                <img src="{{ asset('images/default_doctor.png') }}" 
                     class="img-fluid rounded-circle mb-3"
                     style="width:170px; height:170px; object-fit:cover;">
            @endif
            <h3>{{ $doctor->name }}</h3>
        </div>

        <!-- Doctor Info -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4">
                <table class="table table-borderless mb-0">
                    <tbody>
                        <tr><td><strong>Name:</strong></td><td>{{ $doctor->name }}</td></tr>
                        <tr><td><strong>Speciality:</strong></td><td>{{ $doctor->speciality }}</td></tr>
                        <tr><td><strong>Phone:</strong></td><td>{{ $doctor->phone_number }}</td></tr>
                        <tr><td><strong>Room No:</strong></td><td>{{ $doctor->room }}</td></tr>
                        <tr><td><strong>Available Day:</strong></td><td>{{ $doctor->day_of_week }}</td></tr>
                        <tr><td><strong>Time:</strong></td><td>{{ $doctor->start_time }} - {{ $doctor->end_time }}</td></tr>
                        {{-- <tr><td><strong>Added On:</strong></td><td>{{ $doctor->created_at->format('M d, Y') }}</td></tr> --}}
                    </tbody>
                </table>

                <a href="{{ route('home') }}" class="btn btn-primary mt-4">← Back</a>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('front_end/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('front_end/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front_end/assets/vendor/wow/wow.min.js') }}"></script>

</body>
</html>
