 
 <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
      
      <div class="row">
          <div class="col-12">

              @if(count($doctors) > 0)
                  {{-- 🛠️ FIX 1: The owl-carousel wrapper should be here, not inside the loop --}}
                  <div class="owl-carousel wow fadeInUp" id="doctorSlideshow"> 
                      
                      @foreach($doctors as $doctor)
                      {{-- 🛠️ FIX 2: The item wrapper goes around each doctor card --}}
                      <div class="item"> 
                          <div class="card-doctor">
                              <div class="header">
                                  @if($doctor->pic)
                                      <img src="{{ asset('doctor_images/' . $doctor->pic) }}" alt="{{ $doctor->name }}">
                                  @else
                                      <img src="{{ asset('images/default_doctor.png') }}" alt="No Photo"> 
                                  @endif
                              </div>
                              <div class="body">
                                  <p class="text-xl mb-0">{{ $doctor->name }}</p>
                                  <span class="text-sm text-secondary">{{ $doctor->speciality }}</span>
                                  
                                  {{-- Assuming this button points to the frontend details page --}}
                                  <a href="{{ route('doctors.show',$doctor) }}" class="btn btn-primary btn-sm mt-3">
                                      Details
                                  </a>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      
                  </div> {{-- Close #doctorSlideshow --}}

              @else
                  <p class="text-warning">No doctors have been added yet.</p>
              @endif
              
          </div>
      </div>
    </div>
</div>


{{-- 🛠️ FIX 3: Push the initialization script to the master layout --}}
@push('scripts')
<script>
    (function($) {
        'use strict';
        
        if ($('#doctorSlideshow').length) {
            $('#doctorSlideshow').owlCarousel({ 
                loop: false, 
                margin: 30, // Increased margin for better spacing
                nav: true,
                dots: false, // Optional: You can enable dots if you like
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 } // Shows 3 doctors on larger screens
                }
            });
        }
    })(jQuery);
</script>
