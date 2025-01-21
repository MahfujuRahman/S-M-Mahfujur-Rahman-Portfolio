@extends('frontend.layouts.master')

@section('title', 'Full Stack Laravel Developer - S. M. Mahfujur Rahman')
@section('description', 'Explore the portfolio of S. M. Mahfujur Rahman, a full stack Laravel developer with expertise in PHP, JavaScript, and project management.')
@section('keywords', 'S. M. Mahfujur Rahman, Developer, Laravel, PHP, Full Stack, Backend, Frontend, Freelancer, JavaScript')

@section('content')

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                    icon: "success",
                    title: "{{ session('success') }}"
                });
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                    icon: "error",
                    title: "{{ session('error') }}"
                });
            });
        </script>
    @endif
    @if (session('warning'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                    icon: "warning",
                    title: "{{ session('warning') }}"
                });
            });
        </script>
    @endif


    <div class="cv_main_wrapper">
        <!-- Loader Start -->
        <div class="loader">
            <div class="spinner">
                <img src="assets/images/loader2.gif" alt="loader" class="img-fluid">
            </div>
        </div>
        <!-- Loader End -->
        <!-- Bottom To Top Start -->
        <div class="cv_top_icon">
            <a id="button">
                <img src="assets/images/gototop.svg" class="img-fluid">
            </a>
        </div>
        <!-- Bottom To Top End -->

        <!-- Header Section Start -->
        <div class="cv_banner_wrapper" id="home">
            <div class="cv_container container-fluid  ">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="cv_banner_img" data-aos="zoom-in-down">
                            <img src="assets/images/banner.png" class="img-fluid bnr-boy">
                            <img src="assets/images/bnr-line.png" class="bnr-line">
                            <img src="assets/images/bnr-star.png" class="bnr-star">
                            <img src="assets/images/bnr-sqr.png" class="bnr-sqr">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cv_banner_text" data-aos="fade-right">
                            <h5>Jr. Software Engineer</h5>
                            <h1>Hello! <span><img src="assets/images/hand.svg" class="img-fluid"></span> I Am</h1>
                            <h1 class="cv_profile_name"></h1>

                            <div class="social_icon">
                                <a href="#contactMe" class="cv_btn">Hire Me</a>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/nearestboy.akash" target="_blank">
                                            <img src="assets/images/fb.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/s-m-mahfujur-rahman/" target="_blank">
                                            <img src="assets/images/in.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/MahfujuRahman" target="_blank">
                                            <img src="assets/images/git.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/8801954335310" target="_blank">
                                            <img src="assets/images/whatsapp.svg">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/ajmain_akash/" target="_blank">
                                            <img src="assets/images/instagram.svg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="cv_banner_box text-justify" data-aos="fade-left">
                            <h4>Freelance Full-Stack Web Developer | Laravel</h4>

                            <p>As a dedicated full-stack software engineer, I specialize in crafting user-friendly web
                                applications with Laravel for backend and HTML, CSS, JavaScript, Bootstrap, and AJAX for
                                frontend, aiming to enhance user experiences with intuitive solutions. My mission is to
                                develop exceptional software that simplifies life, and striving to become the best engineer
                                I can be. </p>

                            <p>I bring technical expertise and creativity together to innovate and ensure each project
                                excels in quality, functionality, and security, whether it's developing new features or
                                optimizing performance.</p>

                            <p>Let's build something amazing together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Section End -->

        <!-- About Section Start -->
        <div class="cv_about_wrapper" id="about">
            <div class="cv_container container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="cv_about_content">
                            <div class="cv_about_img">
                                <img src="assets/images/about3.png" class="img-fluid rounded img-thumbnail"
                                    data-aos="zoom-in-down">
                                <div class="cv_about_experience">
                                    <div class="cv_about_exp" data-aos="fade-up-right">
                                        <h2>1+</h2>
                                        <span>
                                            <p>YEARS</p>
                                            <p>OF EXPERIENCE</p>
                                        </span>
                                    </div>
                                    <div class="cv_about_rating" data-aos="fade-up-left">
                                        <span>
                                            <img src="assets/images/rating.svg">
                                            <h6>5</h6>
                                        </span>
                                        <p>20+ Clients Reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cv_about_info" data-aos="zoom-out-down">
                                <h2>About Me</h2>
                                <div class="cv_about_box text-justify">
                                    <h3>Who I’m</h3>
                                    <p>I am a freelance full-stack web developer, driven by a blend of technical expertise
                                        and creativity. My journey began with a solid educational foundation in Computer
                                        Science at Daffodil International University, where I honed my skills in
                                        problem-solving and software development. Currently, Currently, I work full-time as
                                        a junior software engineer at Creative Soft Ltd, and I am also open to part-time
                                        freelance opportunities.</p>

                                    <p>Specializing in Laravel for backend development and proficient in frontend
                                        technologies such as HTML, CSS, JavaScript, Bootstrap, and AJAX, I am dedicated to
                                        crafting user-friendly web applications. My ambition is to develop exceptional
                                        software that simplifies life, striving relentlessly to enhance user experiences
                                        through intuitive and powerful solutions.</p>

                                    <p>With a commitment to continuous learning, I am expanding my skills in Vue and React
                                        to stay ahead in frontend development, aiming to incorporate these powerful
                                        frameworks into my future projects.. My mission is to become an outstanding
                                        engineer, continually pushing the boundaries of what's possible in web development,
                                        and delivering excellence in every project I undertake.</p>
                                    <p></p>

                                </div>
                                <div class="cv_about_btn" data-aos="fade-down-left">
                                    <a href="{{ asset('assets/images/S. M. Mahfujur Rahman v1.pdf') }}" class="cv_btn"
                                        target="_blank" download>Download Resume</a>
                                    <a href="#contactMe" class="cv_btn">Hire Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Experience Section Start -->
        <section class="cv_experience_wrapper" id="exprience">
            <div class="cv_container container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <div class="cv_exp_box" data-aos="fade-right">
                            <h2>01</h2>
                            <div class="cv_exp_com">
                                <span>
                                    <h3>Junior Software Engineer</h3>
                                    <h4>- Creative Soft ltd</h4>
                                </span>
                                <h5>(May 2024 - Present)</h5>
                            </div>
                        </div>
                        <div class="cv_exp_box" data-aos="fade-left">
                            <h2>02</h2>
                            <div class="cv_exp_com">
                                <span>
                                    <h3>Laravel Developer Intern</h3>
                                    <h4>- HSBLCO</h4>
                                </span>
                                <h5>(Sep 2023 - Feb 2024)</h5>
                            </div>
                        </div>
                        <div class="cv_exp_box" data-aos="fade-right">
                            <h2>03</h2>
                            <div class="cv_exp_com">
                                <span>
                                    <h3>Laravel Developer Trainee</h3>
                                    <h4>- WizTecBD</h4>
                                </span>
                                <h5>(May 2023 - Aug 2023)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="cv_exp_info">
                            <div class="cv_exp_heading" data-aos="fade-down-left">
                                <h2>My Experience</h2>
                                <p class="text-justify">As a junior Laravel developer at Creative Soft Ltd, I have honed my
                                    skills in building robust backend solutions using the Laravel framework. My
                                    responsibilities include developing, testing, and maintaining web applications, ensuring
                                    they are efficient and user-friendly. </p>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/php.svg" class="img-skills">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/laravel.svg" class="img-skills">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/js.svg" class="img-skills">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/jquery.svg" class="img-skills">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/html.svg" class="img-skills">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/css.svg" class="img-skills">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/bootstrap.svg" class="img-skills">
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience Section End -->

        <!-- Skill Section Start -->
        <section class="cv_skill_wrapper">
            <div class="cv_container container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="cv_exp_info" data-aos="zoom-in">
                            <div class="cv_exp_heading">
                                <h2>My Skills</h2>
                                <p class="text-justify">I am an expert in Laravel and JavaScript with extensive experience
                                    in developing robust, scalable web applications. My proficiency in Laravel allows me to
                                    build efficient backend systems, while my expertise in JavaScript enables me to create
                                    dynamic, user-friendly frontends. I am passionate about leveraging these technologies to
                                    deliver high-quality solutions that meet and exceed client expectations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-right">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/php.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>Php</h4>
                                            <p>95%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-left">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/laravel.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>Laravel</h4>
                                            <p>90%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-right">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/html.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>HTML</h4>
                                            <p>95%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-left">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/css.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>CSS</h4>
                                            <p>85%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 85%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-right">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/js.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>JavaScript</h4>
                                            <p>80%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-left">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/bootstrap.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>Bootstrap</h4>
                                            <p>95%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cv_skill_box" data-aos="zoom-in-right">
                                    <div class="cv_skill_icon">
                                        <img src="assets/images/jquery.svg" class="img-skills">
                                    </div>
                                    <div class="cv_skill_progress">
                                        <div class="cv_skill_text">
                                            <h4>jQuery</h4>
                                            <p>70%</p>
                                        </div>
                                        <div class="cv_skill_bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Skill Section End -->

        <!-- Project Section Start -->
        <section class="cv_project_wrapper" id="portfolio">
            <div class="cv_container container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="cv_sec_heading" data-aos="zoom-out">
                            <h2>Latest Projects</h2>
                            <p class="text-justify">Here are some of the innovative projects I have built or collaborated
                                on. Feel free to visit and explore the details :</p>
                        </div>
                    </div>

                    <div class="col-12 slide_container container-fluid overflow-hidden m-auto">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($projects as $item)
                                <div class="cv_project_box swiper-slide p-2" data-aos="zoom-out-down" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-title="{{ $item->title }}"
                                    data-image="{{ asset('uploads/project/resized/' . $item->thumbnail) }}"
                                    data-description="{{ htmlspecialchars($item->description, ENT_QUOTES, 'UTF-8') }}"
                                    data-time="{{ $item->created_at->diffForHumans() }}">
                                    <div class="cv_project_img">
                                        <img src="{{ asset('uploads/project/resized/' . $item->thumbnail) }}" class="img-fluid project_img">
                                    </div>
                                    <div class="cv_project_text">
                                        <div class="cv_project_heading">
                                            <p>{{ $item->category->name }}</p>
                                            <span>
                                                <img src="assets/images/time.svg">
                                                {{ $item->created_at->diffForHumans() }}
                                            </span>
                                        </div>
                                        <div class="cv_project_title">
                                            <p>{{ $item->title }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination if needed -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Navigation -->
                            {{-- <div class="swiper-button-next text-end"></div>
                            <div class="swiper-button-prev"></div> --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cv_bottom_btn" data-aos="zoom-in-down">
                            <a href="{{ route('project') }}" class="cv_btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Section End -->

        <!-- Portfolio Section Start -->
        {{-- <div class="cv_portfolio_wrapper" id="portfolio">
            <div class="cv_container container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul class="cv_port_tab" data-aos="flip-down">
                            <li>
                                <a class="active" data-rel="tab-1" href="javascript:void(0)">All</a>
                            </li>
                            <li>
                                <a class="" data-rel="tab-2" href="javascript:void(0)">Website</a>
                            </li>
                            <li>
                                <a class="" data-rel="tab-3" href="javascript:void(0)">Mobile App</a>
                            </li>
                            <li>
                                <a class="" data-rel="tab-4" href="javascript:void(0)">Dashboard</a>
                            </li>
                            <li>
                                <a class="" data-rel="tab-5" href="javascript:void(0)">Creative</a>
                            </li>
                        </ul>
                        <!-- All Tab -->
                        <div class="cv_tab_pane " id="tab-1" style="display:block;">
                            <div class="cv_gallery_wrapper"  data-aos="fade-left">
                                <div class="cv_gallery_item item-1">
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-1">
                                            <img src="assets/images/port-1.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-2">
                                            <img src="assets/images/port-2.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cv_gallery_img img-3">
                                        <img src="assets/images/port-5.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cv_gallery_item item-2">
                                    <div class="cv_gallery_img img-4">
                                        <img src="assets/images/port-3.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-5">
                                            <img src="assets/images/port-4.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-6">
                                            <img src="assets/images/port-6.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Website Tab -->
                        <div class="cv_tab_pane" id="tab-2">
                            <div class="cv_gallery_wrapper">
                                <div class="cv_gallery_item item-1">
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-1">
                                            <img src="assets/images/port-1.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-2">
                                            <img src="assets/images/port-2.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cv_gallery_img img-3">
                                        <img src="assets/images/port-5.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cv_gallery_item item-2">
                                    <div class="cv_gallery_img img-4">
                                        <img src="assets/images/port-3.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-5">
                                            <img src="assets/images/port-4.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-6">
                                            <img src="assets/images/port-6.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Tab -->
                        <div class="cv_tab_pane" id="tab-3">
                            <div class="cv_gallery_wrapper">
                                <div class="cv_gallery_item item-1">
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-1">
                                            <img src="assets/images/port-1.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-2">
                                            <img src="assets/images/port-2.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cv_gallery_img img-3">
                                        <img src="assets/images/port-5.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cv_gallery_item item-2">
                                    <div class="cv_gallery_img img-4">
                                        <img src="assets/images/port-3.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-5">
                                            <img src="assets/images/port-4.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-6">
                                            <img src="assets/images/port-6.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Tab -->
                        <div class="cv_tab_pane" id="tab-4">
                            <div class="cv_gallery_wrapper">
                                <div class="cv_gallery_item item-1">
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-1">
                                            <img src="assets/images/port-1.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-2">
                                            <img src="assets/images/port-2.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cv_gallery_img img-3">
                                        <img src="assets/images/port-5.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cv_gallery_item item-2">
                                    <div class="cv_gallery_img img-4">
                                        <img src="assets/images/port-3.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-5">
                                            <img src="assets/images/port-4.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-6">
                                            <img src="assets/images/port-6.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Creative Tab -->
                        <div class="cv_tab_pane" id="tab-5">
                            <div class="cv_gallery_wrapper">
                                <div class="cv_gallery_item item-1">
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-1">
                                            <img src="assets/images/port-1.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-2">
                                            <img src="assets/images/port-2.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="cv_gallery_img img-3">
                                        <img src="assets/images/port-5.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                </div>
                                <div class="cv_gallery_item item-2">
                                    <div class="cv_gallery_img img-4">
                                        <img src="assets/images/port-3.webp" class="img-fluid">
                                        <span class="cv_gallery_hover">
                                            <p>Website</p>
                                            <h4>Creative Website</h4>
                                        </span>
                                    </div>
                                    <div class="cv_gallery_small">
                                        <div class="cv_gallery_img img-5">
                                            <img src="assets/images/port-4.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                        <div class="cv_gallery_img img-6">
                                            <img src="assets/images/port-6.webp" class="img-fluid">
                                            <span class="cv_gallery_hover">
                                                <p>Website</p>
                                                <h4>Creative Website</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cv_bottom_btn">
                            <a href="javascript:void(0)" class="cv_btn"  data-aos="fade-right">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Portfolio Section End -->

        <!-- Do Section Start -->
        <div class="cv_do_wrapper" id="strength">
            <div class="cv_container container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="cv_do_heading" data-aos="fade-right">
                            <h2>What I Do</h2>
                            <p class="text-justify">I specialize in developing efficient web applications using Laravel,
                                focusing on seamless integration between backend and frontend technologies to enhance user
                                experience.</p>
                        </div>
                        <div class="cv_do_img" data-aos="fade-left">
                            <img src="assets/images/whatido4.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-sm-6" data-aos="fade-down-right">
                                <div class="cv_do_box">
                                    <div class="cv_do_icon">
                                        <img src="assets/images/do-icon1.svg">
                                    </div>
                                    <div class="cv_do_text">
                                        <h4>Website Design</h4>
                                        {{-- <p>Embarrassing hidden in the middle of text. All the Ipsum generate on the are
                                            Internettend.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" data-aos="fade-down-left">
                                <div class="cv_do_box">
                                    <div class="cv_do_icon">
                                        <img src="assets/images/do-icon4.svg">
                                    </div>
                                    <div class="cv_do_text">
                                        <h4>Web Development</h4>
                                        {{-- <p>Embarrassing hidden in the middle of text. All the Ipsum generate on the are
                                            Internettend.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up-right">
                                <div class="cv_do_box">
                                    <div class="cv_do_icon">
                                        <img src="assets/images/do-icon2.svg">
                                    </div>
                                    <div class="cv_do_text">
                                        <h4>Website Maintenance</h4>
                                        {{-- <p>Embarrassing hidden in the middle of text. All the Ipsum generate on the are
                                            Internettend.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" data-aos="fade-up-left">
                                <div class="cv_do_box">
                                    <div class="cv_do_icon">
                                        <img src="assets/images/do-icon3.svg">
                                    </div>
                                    <div class="cv_do_text">
                                        <h4>Website Optimization</h4>
                                        {{-- <p>Embarrassing hidden in the middle of text. All the Ipsum generate on the are
                                            Internettend.</p> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Do Section End -->

        <!-- Education Section Start -->
        <section class="cv_education_wrapper" id="education">
            <div class="cv_container container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="cv_edu_heading" data-aos="zoom-in">
                            <h2>Education</h2>
                            <p>"Education is the most powerful weapon which you can use to change the world." — Nelson
                                Mandela</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="cv_edu_info" style="overflow: hidden">
                            <div class="cv_edu_box box-4" data-aos="fade-down-left">
                                <div class="cv_edu_title">
                                    <h4>Laravel Dev Trainee</h4>
                                    <h4>2023</h4>
                                    {{-- <h1>2023</h1> --}}
                                </div>
                                <div class="cv_edu_detail text-justify">
                                    <span>- Dhaka, Bangladesh</span>
                                    <p>As a Laravel Developer Trainee, I am gaining hands-on experience in building web
                                        applications using the Laravel framework. I am learning to develop, test, and
                                        maintain backend and frontend solutions, collaborating with senior developers to
                                        enhance my skills and contribute to real-world projects.</p>
                                </div>
                            </div>

                            <div class="cv_edu_box box-1" data-aos="fade-down-right">
                                <div class="cv_edu_title">
                                    <h4>CSE</h4>
                                    <h4>2023</h4>
                                    {{-- <h1>2023</h1> --}}
                                </div>
                                <div class="cv_edu_detail text-justify">
                                    <span>- Dhaka, Bangladesh</span>
                                    <p>Computer Science and Engineering (CSE) is a dynamic field that combines principles of
                                        computer science with engineering to design, develop, and optimize computer systems
                                        and software. It encompasses a broad range of topics including algorithms,
                                        programming, data structures, artificial intelligence, and hardware design.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </section>

        <!-- Education Section End -->

        <!-- Award Section Start -->
        <section class="cv_award_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="cv_award_box" data-aos="flip-left">
                            <div class="cv_award_icon">
                                <img src="assets/images/award-1.svg">
                            </div>
                            <div class="cv_award_text">
                                <h1><span class="timer" data-from="0" data-to="20" data-speed="2000"></span>+</h1>
                                <h4>Happy Clients</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cv_award_box" data-aos="flip-right">
                            <div class="cv_award_icon">
                                <img src="assets/images/award-3.svg">
                            </div>
                            <div class="cv_award_text">
                                <h1 class="timer" data-from="0" data-to="20" data-speed="2000"></h1>
                                <h4>Project Done</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cv_award_box" data-aos="flip-up">
                            <div class="cv_award_icon">
                                <img src="assets/images/award-2.svg">
                            </div>
                            <div class="cv_award_text">
                                <h1 class="timer" data-from="0" data-to="1" data-speed="2000"></h1>
                                <h4>Project Pending</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Award Section End -->

        <!-- Client Section Start -->
        {{-- <section class="cv_client_wrapper">
            <div class="cv_container container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="cv_exp_info">
                            <div class="cv_client_heading">
                                <h2>Our Clients</h2>
                                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                                    consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="cv_client_info">
                            <div class="cv_client_box">
                                <div class="cv_client_img">
                                    <img src="assets/images/client-1.png">
                                </div>
                                <div class="cv_client_img">
                                    <img src="assets/images/client-2.png">
                                </div>
                                <div class="cv_client_img">
                                    <img src="assets/images/client-3.png">
                                </div>
                            </div>
                            <div class="cv_client_box">
                                <div class="cv_client_img">
                                    <img src="assets/images/client-4.png">
                                </div>
                                <div class="cv_client_img">
                                    <img src="assets/images/client-5.png">
                                </div>
                                <div class="cv_client_img">
                                    <img src="assets/images/client-6.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Client Section End -->

        <!-- Map Section Start -->
        <div class="cv_map_wrapper" id="contact">
            <div class="cv_container container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-8" data-aos="fade-down">
                        <div class="cv_map_content">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.15505501128533!2d90.35322218213821!3d23.801493315006713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c173c2c878b1%3A0x7aa4cff6bef7d2!2sCafe%20Light%20%26%20Juice%20Mart!5e0!3m2!1sbn!2sbd!4v1720179329874!5m2!1sbn!2sbd"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="cv_map_info" data-aos="fade-up">
                            <div class="cv_map_heading">
                                <h2>Get In Touch</h2>
                                <p>"Let's build something amazing together and create extraordinary results."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Section End -->

        <!-- Address Section Start -->
        <section class="cv_address_wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="cv_address_box" data-aos="fade-right">
                            <div class="cv_address_icon">
                                <img src="assets/images/add-1.svg">
                            </div>
                            <div class="cv_address_text">
                                <h5>Phone</h5>
                                <a href="tel:+8801954335310">(+880) 1954-335310</a>
                                {{-- <a href="javascript:void(0);">(+880) 1954-335310</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-out">
                        <div class="cv_address_box">
                            <div class="cv_address_icon">
                                <img src="assets/images/add-2.svg">
                            </div>
                            <div class="cv_address_text">
                                <h5>Email</h5>
                                <a id="emailLink" href="javascript:void(0);">mahfujurahman2020@gmail.com</a>
                                {{-- <a href="javascript:void(0);">yourname@gmail.com</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-left">
                        <div class="cv_address_box">
                            <div class="cv_address_icon">
                                <img src="assets/images/add-3.svg">
                            </div>
                            <div class="cv_address_text">
                                <h5>Address</h5>
                                <a href="https://www.google.com/maps/@23.8012307,90.3526738,18z?entry=ttu" target="_blank">Mirpur 1, 1216, Dhaka, Bangladesh</a>
                                {{-- <a href="javascript:void(0);">Mirpur 1, 1216, Dhaka, Bangladesh</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Address Section End -->
        <!-- Form Section Start -->
        <section class="cv_form_wrapper" id="contactMe">
            <form class="cv_contact_form" action="{{ route('contact.store') }}" id="contactForm" method="POST">
                @csrf
                <div class="cv_container container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-4" data-aos="zoom-in">
                            <div class="cv_client_heading">
                                <h2>Contact Us</h2>
                                <p>"Reach out to me by filling out this form with your details, and I'll get in touch with
                                    you shortly."</p>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row" data-aos="zoom-in-up">
                                <div class="col-md-6">
                                    <input type="text" class="@error('subject') is-invalid @enderror" name="subject" placeholder="Subject" autocomplete="on" autofocus required>
                                    <div class="invalid-feedback" id="subject-error"></div>

                                    <input type="text" class="@error('name') is-invalid @enderror" name="name" placeholder="Your Name" autocomplete="on" autofocus required>
                                    <div class="invalid-feedback" id="name-error"></div>

                                    <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Your Email" autocomplete="on" autofocus required>
                                    <div class="invalid-feedback" id="email-error"></div>

                                    <input type="tel" class="@error('phone') is-invalid @enderror" name="phone" placeholder="Your Phone Number" autocomplete="on" autofocus required>
                                    <div class="invalid-feedback" id="phone-error"></div>
                                </div>
                                <div class="col-md-6">
                                    <textarea class="@error('message') is-invalid @enderror" name="message" placeholder="Message" autofocus required></textarea>
                                    <div class="invalid-feedback" id="message-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cv_contact_btn" data-aos="zoom-in-left">
                                <button type="button" id="submitForm" class="cv_btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <!-- Form Section End -->

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content cv_main_wrapper">
                <div class="modal-body m-2">
                    <div class="text-end">
                        <img data-bs-dismiss="modal" aria-label="Close" src="{{ asset('assets/images/close3.svg') }}"
                            alt="exit" width="50" style="opacity: 70%">

                    </div>
                        <img id="modal-image" class="d-flex m-auto mt-2" src="" alt="Project Image">
                        <div class="modal-title-time">
                            <h1 id="modal-title" class="my-3 text-justify"></h1>
                            <h3 id="modal-time" class="my-3 text-justify"></h3>
                        </div>
                        <p id="modal-description" class="my-3 text-justify"></p>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>

    @push('script')



<script src="{{ asset('assets/js/jquery.min.js') }}"></script>


<script>
    $(document).ready(function() {
        $('#submitForm').on('click', function(e) {
            e.preventDefault();
                console.log('Button clicked'); // Debugging log

            var formData = $('#contactForm').serialize();
            console.log('Form data:', formData); // Debugging log

            $.ajax({
                url: '{{ route('contact.stores') }}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                success: function(response) {
                    console.log('Success:', response); // Debugging log

                    $('#contactForm')[0].reset();
                    clearErrorMessages();

                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer);
                            toast.addEventListener('mouseleave', Swal.resumeTimer);
                        }
                    });

                    Toast.fire({
                        icon: "success",
                        title: response.success
                    });
                },
                error: function(xhr, status, error) {
                    // console.error('Error:', xhr.responseText);

                    const errors = xhr.responseJSON.errors;
                    if (errors) {
                        clearErrorMessages();
                        displayErrorMessages(errors);
                    } else {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer);
                                toast.addEventListener('mouseleave', Swal.resumeTimer);
                            }
                        });

                        Toast.fire({
                            icon: "error",
                            title: 'An error occurred while submitting the form. Please try again.'
                        });
                    }
                }
            });
        });

        function clearErrorMessages() {
            $('.invalid-feedback').text('');
            $('input, textarea').removeClass('is-invalid mb-3');
        }

        function displayErrorMessages(errors) {
            for (const [field, messages] of Object.entries(errors)) {
                $(`[name="${field}"]`).addClass('is-invalid mb-3');
                $(`#${field}-error`).text(messages.join(' ')).addClass('mb-3 font-weight');
            }
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 0,
            }
        }
    });
});



</script>

    @endpush

@endsection
