@extends('layouts.app')

@section('title', 'Contact & Booking')

@section('content')
<section class="container py-5">
    <h2>Contact & Booking</h2>
    <p>
        Interested in working together or have a project in mind? Get in touch with <strong>Ian Duncan</strong> or book a consultation using the options below.
    </p>
    <div class="row">
        <div class="col-md-6">
            <h4>Email</h4>
            <p>
                <a href="mailto:imckenzie025@gmail.com">imckenzie025@gmail.com</a>
            </p>
            <h4>Phone</h4>
            <p>
                <a href="tel:+254797122664">+254 797122664</a>
            </p>
            <h4>Social Links</h4>
            <ul class="list-unstyled">
                <li>
                    <a href="https://www.instagram.com/one_ian.io" target="_blank">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=61575510606925" target="_blank">
                        <i class="fab fa-facebook"></i> Facebook
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/ian-duncan-27dev" target="_blank">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                </li>
                <li>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2Fianmack74456923" target="_blank">
                        <i class="fab fa-x-twitter"></i> X (Twitter)
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Booking & Consultation</h4>
            <p>
                To book a consultation or service, email <strong>Ian Duncan</strong> at <a href="mailto:imckenzie025@gmail.com">imckenzie025@gmail.com</a>, call <a href="tel:+254797122664">+254 797122664</a>, or connect on any of the platforms above.<br>
                For a fast response, please include your project details and preferred consultation package.
            </p>
            <div class="mt-3">
                <a href="mailto:imckenzie025@gmail.com?subject=Consultation%20Booking" class="btn btn-success">
                    Book Now via Email
                </a>
                <a href="tel:+254797122664" class="btn btn-primary ms-2">
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection