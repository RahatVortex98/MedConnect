@extends('admin.admin-dashboard-main') 

@section('content') 

    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">$12.34</h3>
                                <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Potential growth</h6>
                </div>
            </div>
        </div>
        </div>
    
    <div class="row mt-4">
    {{-- Use a large column (col-lg-12) to contain the list --}}
    <div class="col-lg-12 grid-margin stretch-card"> 
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-white mb-3">Available Doctors</h4>
                
                {{-- Check if the doctors array has records --}}
                @if(count($doctors) > 0)
                    
                    {{-- 
                        Wrap the carousel in a structure that allows its CSS to work.
                        The 'owl-carousel' class is what makes the structure break, 
                        so we need to ensure its parents are stable.
                    --}}
                    
                    <div class="row"> 
                        <div class="col-12">
                            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                                @foreach($doctors as $doctor)
                                <div class="item">
                                    <div class="card-doctor">
                                        <div class="header">
                                            @if($doctor->pic)
                                                <img src="{{ asset('doctor_images/' . $doctor->pic) }}" alt="{{ $doctor->name }}">
                                            @else
                                                {{-- Using the static placeholder you provided --}}
                                                <img src="{{ asset('images/default_doctor.png') }}" alt="No Photo"> 
                                            @endif
                                           
                                        </div>
                                        <div class="body">
                                            <p class="text-xl mb-0">{{ $doctor->name }}</p>
                                            <span class="text-sm text-secondary">{{ $doctor->speciality }}</span>
                                     
                                            <a href="{{ route('admin.show.doctor',$doctor) }}" class="btn btn-primary btn-sm mt-3">
                                                Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                @else
                    <p class="text-warning">No doctors have been added yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>

@stop 

{{-- Script to initialize Owl Carousel AFTER the HTML content has loaded --}}
@push('scripts')
<script>
    (function($) {
        'use strict';
        
        // Check if the element exists and initialize the carousel
        if ($('#doctorSlideshow').length) {
            $('#doctorSlideshow').owlCarousel({ 
                loop: false, // Set to false since you might not have enough items for a true loop
                margin: 10,
                nav: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 4 }
                }
            });
        }

    })(jQuery);
</script>
@endpush