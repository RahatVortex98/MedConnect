<div class="page-section">

   <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
  
    <form class="main-form" action="{{ route('appointments') }}" method="POST">
        @csrf
        <div class="row mt-5">

            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <input type="text" name="full_name" class="form-control" placeholder="Full name" required>
            </div>

            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <input type="email" name="email_address" class="form-control" placeholder="Email address" required>
            </div>

            <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                <input type="date" name="date" class="form-control" required>
            </div>

            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                <select name="speciality" id="speciality" class="custom-select" required>
                    <option value="">Select Speciality</option>
                    @foreach ($doctors as $doctor )
                        <option value="{{ $doctor->speciality }}">{{ $doctor->speciality }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <input type="text" name="number" class="form-control" placeholder="Number" required>
            </div>

            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <textarea name="message" class="form-control" rows="6" placeholder="Enter message"></textarea>
            </div>

            <input type="hidden" name="status" value="in progress">

        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">
            Submit Request
        </button>
    </form>
    </div>
</div>
</div>
