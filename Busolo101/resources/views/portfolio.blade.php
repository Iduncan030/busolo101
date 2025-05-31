@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<section class="container py-5">
    <h2 class="section-title text-center mb-5">Portfolio</h2>
    <p class="section-intro text-center mb-5">
        Explore a curated selection of my most recent and impactful projects. Each project highlights my expertise in web development, UI/UX, and digital solutions, presented with a vibrant, modern aesthetic inspired by <a href="https://blog.bithive.top" target="_blank">blog.bithive.top</a>.
    </p>
    <div class="row g-4">
        <!-- iLeaf Design Main Site -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="https://ileafdesign.com/assets/images/logo.png" alt="iLeaf Design Logo" class="card-img-top" style="object-fit:contain;max-height:140px;background:#f5f7fb;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://ileafdesign.com/" target="_blank" class="text-decoration-none">iLeaf Design</a></h5>
                    <p class="card-text">My creative portfolio and main company website. Showcases my design philosophy, project highlights, and contact info for new collaborations.</p>
                </div>
            </div>
        </div>
        <!-- iLeaf Design 2020 Archive -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="https://ileafdesign.com/assets/images/logo.png" alt="iLeaf 2020" class="card-img-top" style="object-fit:contain;max-height:140px;background:#f5f7fb;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://ileafdesign.com/archives/2020/" target="_blank" class="text-decoration-none">iLeaf Design Archives 2020</a></h5>
                    <p class="card-text">An archive of iLeaf Design's 2020 website, featuring a snapshot of my work, branding, and UI trends from that period.</p>
                </div>
            </div>
        </div>
        <!-- iLeaf Design 2016 Archive -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="https://ileafdesign.com/assets/images/logo.png" alt="iLeaf 2016" class="card-img-top" style="object-fit:contain;max-height:140px;background:#f5f7fb;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://ileafdesign.com/archives/2016/" target="_blank" class="text-decoration-none">iLeaf Design Archives 2016</a></h5>
                    <p class="card-text">A look back at my original iLeaf Design website and UI/UX work from 2016, highlighting early experimentation and brand evolution.</p>
                </div>
            </div>
        </div>
        <!-- myBanki Project -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image2" alt="myBanki banking UI" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://my-banki.vercel.app/" target="_blank" class="text-decoration-none">myBanki</a></h5>
                    <p class="card-text">myBanki is a fun project simulating an online banking platform. It features a static webpage with banking info, features, pricing, and a user-friendly dashboard for viewing balances and performing various actions.<br>
                    <strong>Tech:</strong> Modern HTML/CSS, interactive UI, dashboard design.</p>
                </div>
            </div>
        </div>
        <!-- Natours Project -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image3" alt="Natours nature tours UI" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://natou-rs.vercel.app/" target="_blank" class="text-decoration-none">Natours Landing Page</a></h5>
                    <p class="card-text">The Natours landing page is a beautiful, interactive website that promotes nature and adventure tours for nature and adventure lovers.<br>
                    <strong>Features:</strong> Modern, immersive layout and vibrant imagery.</p>
                </div>
            </div>
        </div>
        <!-- Nexter Project -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image4" alt="Nexter luxury homes UI" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://next-er.vercel.app/" target="_blank" class="text-decoration-none">Nexter Landing Page</a></h5>
                    <p class="card-text">Nexter is a simple landing page for selling luxury homes. It features elegant property listings, testimonials, and a modern, easy-to-navigate UI.</p>
                </div>
            </div>
        </div>
        <!-- Trillo Project -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image7" alt="Trillo hotel booking UI" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title"><a href="https://trillo-sable.vercel.app/" target="_blank" class="text-decoration-none">Trillo Landing Page</a></h5>
                    <p class="card-text">Trillo is a simple one-page hotel booking landing page with a clean, modern design and user-focused layout.</p>
                </div>
            </div>
        </div>
        <!-- Hubspot Marketing (Image 5) -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image5" alt="Hubspot Marketing Project" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title">Hubspot Marketing – Monstery</h5>
                    <p class="card-text">
                        A marketing automation and CRM platform integration for Monstery, focusing on lead management, analytics, and seamless client onboarding. Highlights digital transformation and business process optimization for service providers.
                    </p>
                </div>
            </div>
        </div>
        <!-- Monstery Digital Strategy (Image 5) -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image5" alt="Monstery Digital Strategy" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title">Monstery Digital Strategy</h5>
                    <p class="card-text">
                        A business-focused digital strategy platform for Monstery, empowering companies to streamline their marketing efforts and focus on core activities. Features include client portals, analytics dashboards, and integrations for performance measurement.
                    </p>
                </div>
            </div>
        </div>
        <!-- MySkillCamp (Image 6) -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image6" alt="MySkillCamp Training UI" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title">MySkillCamp E-Learning Platform</h5>
                    <p class="card-text">
                        An interactive e-learning and course management platform. Allows users to enroll in courses, track progress, and complete exercises. Features a sleek dashboard, content creation tools, and performance tracking modules.
                    </p>
                </div>
            </div>
        </div>
        <!-- Freelance Designer Hero (Image 1) -->
        <div class="col-md-6 col-lg-4">
            <div class="card project-card shadow-sm h-100">
                <img src="image1" alt="Freelance Designer Hero" class="card-img-top" style="object-fit:cover;max-height:220px;">
                <div class="card-body">
                    <h5 class="card-title">Freelance Designer Hero Section</h5>
                    <p class="card-text">
                        The bold hero section for my freelance brand, featuring a clean, modern design and a strong visual identity. Sets the stage for my portfolio and approach.<br>
                        <strong>Email:</strong> imckenzie025@gmail.com
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection