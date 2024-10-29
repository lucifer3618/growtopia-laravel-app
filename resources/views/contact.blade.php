@extends('layout.master')

@section('title', 'Contact Us')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/ContactUs.css') }}">
@endsection

@section('script')
    <script src="{{ asset('js/ContactUs.js') }}"></script>
@endsection


@section('content')
<section class="contact-section">
    <div class="contact-bg">
      <h3>Need Assistance? Contact Our Team</h3>
      <h2>Contact Us</h2>
      <div class="line">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <p class="text">Have a question, comment, or suggestion? Please don't hesitate to contact us. Our friendly and
        knowledgeable team is here to assist you. You can reach out to us by email, phone, or through our contact form.
        We value your feedback and strive to provide excellent customer service.
      </p>
    </div>

    <div class="contact-body">
      <div class="contact-info">
        <div>
          <span><i class="fas fa-mobile-alt"></i></span>
          <span>Phone No:</span>
          <span class="text">+12-345-678-901</span>
        </div>
        <div>
          <span><i class="fas fa-envelope-open"></i></span>
          <span>Email:</span>
          <span class="text">support@growtopia.com</span>
        </div>
        <div>
          <span><i class="fas fa-map-marker-alt"></i></span>
          <span>Address:</span>
          <span class="text">204/03, Kadugannawa, Kandy</span>
        </div>
        <div>
          <span><i class="fas fa-clock"></i></span>
          <span>Opening Hours:</span>
          <span class="text">Monday to Saturday (09.00 A.M - 04.00 P.M)</span>
        </div>
      </div>

      <div class="h-line"></div>

      @include('includes.contact-form')

      <div>
        <img src="{{ asset('images/contact-us/contact-us-bg.jpg') }}" alt="-contact-background" srcset="">
      </div>
    </div>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.485545818972!2d80.50620312629897!3d7.2554754200638385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36b8bc9b57ae5%3A0xe80fc27a87c937f4!2sKadugannawa!5e0!3m2!1sen!2slk!4v1725749097683!5m2!1sen!2slk"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </section>
@endsection


