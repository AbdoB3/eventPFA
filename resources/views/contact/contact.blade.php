@extends('layouts.app')
@section('content')

<div class="contact-form-section section-padding">
   <div class="container">
       <!-- Contact Wrap Start -->
       <div class="contact-wrap">
           <div class="row justify-content-center">
               <div class="col-lg-10">
                   <div class="form-title text-center">
                       <h2 class="title">Sent Us A Message</h2>
                   </div>
                   <!-- Contact Form Wrap Start -->
                   <div class="contact-form-wrap">
                       <form action="{{ route('contact') }}" method="POST" >
                        @csrf
                           <div class="row">
                               <div class="col-md-6">
                                   <!-- Single Form Start -->
                                   <div class="single-form">
                                       <input class="form-control" type="text" placeholder="Your Name" @error('name') is-invalid @enderror id="name" name="name">
                                       @error('name')
                                       <strong class="text-danger">{{ $message }}</strong>
                                   @enderror
                                    </div>
                                   <!-- Single Form End -->
                               </div>
                               <div class="col-md-6">
                                   <!-- Single Form Start -->
                                   <div class="single-form">
                                       <input class="form-control" type="email" placeholder="Your Email" name="email" >
                                       @error('email')
                                       <strong class="text-danger">{{ $message }}</strong>
                                   @enderror
                                   </div>
                                   <!-- Single Form End -->
                               </div>
                               <div class="col-md-6">
                                   <!-- Single Form Start -->
                                   <div class="single-form">
                                       <input class="form-control" type="text" placeholder="Your Number" @error('phone') is-invalid @enderror id="phone" name="phone" value="{{ old('phone') }}">
                                       @error('phone')
                                           <strong class="text-danger">{{ $message }}</strong>
                                       @enderror
                                   </div>
                                   <!-- Single Form End -->
                               </div>
                               <div class="col-md-6">
                                   <!-- Single Form Start -->
                                   <div class="single-form">
                                       <input class="form-control" type="text" placeholder="Subject">
                                   </div>
                                   <!-- Single Form End -->
                               </div>
                               <div class="col-md-12">
                                   <!-- Single Form Start -->
                                   <div class="single-form">
                                       <textarea class="form-control" placeholder="Write A Message"@error('content') is-invalid @enderror id="content" name="content">{{ old('content') }}</textarea>
                                       @error('content')
                                           <strong class="text-danger">{{ $message }}</strong>
                                       @enderror
                                   </div>
                                   <!-- Single Form End -->
                               </div>
                               <div class="col-md-12">
                                   <!--  Single Form Start -->
                                   <div class="form-btn text-center">
                                       <button class="btn btn-primary" type="submit">Submit Now</button>
                                   </div>
                                   <!--  Single Form End -->
                               </div>
                           </div>
                       </form>
                   </div>
                   <!-- Contact Form Wrap End -->
               </div>
           </div>
       </div>
       <!-- Contact Wrap End -->
   </div>
</div>
<!-- Contact Form End -->

<!-- Contact Info Start -->
<div class="section contact-info-section">
   <div class="container">
       <!-- Contact Info Wrap Start -->
       <div class="contact-info-wrap">
           <div class="row">
               <div class="col-lg-4 col-sm-6">
                   <!--Single Contact Info Start -->
                   <div class="single-contact-info text-center">
                       <div class="info-icon color-2">
                           <i class="flaticon-phone-call"></i>
                       </div>
                       <div class="info-content">
                           <h5 class="title">Telephone</h5>
                           <p>+458 123 657 2324</p>
                       </div>
                   </div>
                   <!--Single Contact Info End -->
               </div>
               <div class="col-lg-4 col-sm-6">
                   <!--Single Contact Info Start -->
                   <div class="single-contact-info text-center">
                       <div class="info-icon color-1">
                           <i class="flaticon-email"></i>
                       </div>
                       <div class="info-content">
                           <h5 class="title">Drop Your Mail</h5>
                           <p>info@techmax.nl</p>
                       </div>
                   </div>
                   <!--Single Contact Info End -->
               </div>
               <div class="col-lg-4 col-sm-6">
                   <!--Single Contact Info Start -->
                   <div class="single-contact-info text-center">
                       <div class="info-icon color-3">
                           <i class="flaticon-pin"></i>
                       </div>
                       <div class="info-content">
                           <h5 class="title">Location</h5>
                           <p>1800 Abbot Kinney Blvd</p>
                       </div>
                   </div>
                   <!--Single Contact Info End -->
               </div>
           </div>
       </div>
       <!-- Contact Info Wrap End -->
   </div>
</div>
<!-- Contact Info End -->

<!-- Contact Map Start -->
<div class="section contact-map-section">
   <div class="contact-map-wrap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13293.397589414666!2d-7.6126768!3d33.5962378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e46c1e1fc83142d!2s3W%20Academy%20Maroc!5e0!3m2!1sar!2sma!4v1660082119307!5m2!1sar!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
</div>
<!-- Contact Map End -->
@endsection


