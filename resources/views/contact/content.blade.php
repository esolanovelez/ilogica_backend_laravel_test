<div class="page-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 my-3 wow fadeInUp">
                <div class="card-page">
                    <div class="row row-beam-md">
                    <div class="col-md-4 text-center py-3 py-md-2">
                        <i class="mai-location-outline h3"></i>
                        <p class="fg-primary fw-medium fs-vlarge">Location</p>
                        <p class="mb-0">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
                    </div>
                    <div class="col-md-4 text-center py-3 py-md-2">
                        <i class="mai-call-outline h3"></i>
                        <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                        <p class="mb-1">+213 908 92034</p>
                        <p class="mb-0">+415 123 89245</p>
                    </div>
                    <div class="col-md-4 text-center py-3 py-md-2">
                        <i class="mai-mail-open-outline h3"></i>
                        <p class="fg-primary fw-medium fs-vlarge">Email</p>
                        <p class="mb-1">support@mobster.com</p>
                        <p class="mb-0">support@macodeid.com</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
                <div class="card-page">
                    <h3 class="fw-normal">Get in touch</h3>
                    <form method="POST" action="{{ route('contact.store') }}" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="fw-medium fg-grey">{{  __('Fullname') }}</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="fw-medium fg-grey">{{  __('Email') }}</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="fw-medium fg-grey">{{  __('Phone(optional)') }}</label>
                            <input type="number" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="message" class="fw-medium fg-grey">{{  __('Message') }}</label>
                            <textarea rows="6" class="form-control" name="message" id="message"></textarea>
                        </div>
                        <p>*Your information will never be shared with any third party.</p>
                
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">{{  __('Send Message') }}</button>
                        </div>
                    </form>
                    
                    @include('messages.errors')
                    @include('messages.success')
                    
                </div>
            </div>
            <div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
                <div class="card-page">
                    <div class="maps-container">
                        <div id="myMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
