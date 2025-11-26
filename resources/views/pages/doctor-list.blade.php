<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors</title>

    <link rel="stylesheet" href="{{ asset('front_end/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/maicons.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/vendor/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front_end/assets/css/theme.css') }}">
</head>
<body>
@include('partials.navbar')
<div class="container mt-5">
    <h1 class="text-center mb-5">Our Doctors</h1>

    @if(isset($doctors) && count($doctors) > 0)
        <div class="owl-carousel" id="doctorListCarousel">
            @foreach($doctors as $doctor)
                <div class="item text-center p-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            @if($doctor->pic)
                                <img src="{{ asset('doctor_images/' . $doctor->pic) }}" 
                                     alt="{{ $doctor->name }}" 
                                     class="img-fluid rounded-circle mb-3"
                                     style="width:150px; height:150px; object-fit:cover;">
                            @else
                                <img src="{{ asset('images/default_doctor.png') }}" 
                                     alt="No Photo" 
                                     class="img-fluid rounded-circle mb-3"
                                     style="width:150px; height:150px; object-fit:cover;">
                            @endif

                            <h4>{{ $doctor->name }}</h4>
                            <p class="text-muted">{{ $doctor->speciality }}</p>
                            <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-primary btn-sm mt-2">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-warning text-center">No doctors have been added yet.</p>
    @endif
</div>

<script src="{{ asset('front_end/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('front_end/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front_end/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#doctorListCarousel").owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            dots: false,
            responsive:{
                0:{ items:1 },
                600:{ items:2 },
                1000:{ items:3 }
            }
        });
    });
</script>

</body>
</html>
