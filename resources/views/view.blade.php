{{ view('layouts/resume-header')}}
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
        </ul>
    </div>
</nav>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                {{ isset($information['personal_info']['first_name']) ? $information['personal_info']['first_name'] : 'Empty' }}
                <span class="text-primary">{{ isset($information['personal_info']['last_name']) ? $information['personal_info']['last_name'] : '' }}</span>
            </h1>
            <h3 class="">{{ isset($information['personal_info']['profile_title']) ? $information['personal_info']['profile_title'] : '' }}</h3>
            <div class="subheading mb-5">
                {{ isset($information['contact_info']['phone_number']) ? $information['contact_info']['phone_number'] : '' }} ·
                <a href="{{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : '' }}">{{ isset($information['contact_info']['email']) ? $information['contact_info']['email'] : '' }}</a> . 
                <a class="social-icon" href="{{ isset($information['contact_info']['linkedin_link']) ? $information['contact_info']['linkedin_link'] : '' }} "><i class="fab fa-linkedin-in"></i></a>
                
            </div>
            <p class="lead mb-5">{{ isset($information['personal_info']['about_me']) ? $information['personal_info']['about_me'] : '' }}</p>
        </div>
    </section>
    <hr class="m-0" />
    <!-- Experience-->
    <section class="resume-section" id="experience">
        <div class="resume-section-content">
            <h2 class="mb-5">Experience</h2>
            @foreach ($information['experience_info'] as $experience_info)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{{ isset($experience_info['job_title']) ? $experience_info['job_title'] : '' }}</h3>
                    <div class="subheading mb-3">{{ isset($experience_info['organization']) ? $experience_info['organization'] : '' }}</div>
                    <p>{{ isset($experience_info['job_description']) ? $experience_info['job_description'] : '' }}</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">{{ isset($experience_info['job_start_date']) ? $experience_info['job_start_date'] : '' }} - {{ isset($experience_info['job_end_date']) ? $experience_info['job_end_date'] : '' }}</span></div>
            </div>
            @endforeach
        </div>
    </section>
    <hr class="m-0" />
    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            @foreach ($information['education_info'] as $education_info)
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{{ isset($education_info['degree_title']) ? $education_info['degree_title'] : '' }}</h3>
                    <div class="subheading mb-3">{{ isset($education_info['institute']) ? $education_info['institute'] : '' }}</div>
                    <p>{{ isset($education_info['education_description']) ? $education_info['education_description'] : '' }}</p>
                </div>
                <div class="flex-shrink-0"><span class="text-primary">{{ isset($education_info['edu_start_date']) ? $education_info['edu_start_date'] : '' }} - {{ isset($education_info['edu_end_date']) ? $education_info['edu_end_date'] : '' }}</span></div>
            </div>
            @endforeach
        </div>
    </section>
</div>
{{ view('layouts/resume-footer')}}
 