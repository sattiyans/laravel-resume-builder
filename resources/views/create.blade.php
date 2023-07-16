{{ view('layouts/header')}}
<div class="container">
    <main>
        {{ view('components/title')}}
        <p class="text-center">For demo purposes, all inputs are pre-filled with values.</p>
        <div class="row g-5">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">Personal details</h4>
            <form action="{{ route('store') }}" id="createform" class="needs-validation" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="user_id" name="user_id" class="form-control" />

                <div class="row g-3">
                    <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="John" value="Sattiyan" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    </div>

                    <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Doe" value="Selvarajah" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="profile_title" class="form-label">Profile title<span class="text-danger">*</span></label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control" id="profile_title" name="profile_title" placeholder="Web Developer" value="Web Developer" required>
                    <div class="invalid-feedback">
                        Your profile_title is required.
                        </div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="about_me" class="form-label">Summary<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="about_me" name="about_me" rows="5" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id.">I am a skilled PHP backend web developer experienced in Bootstrap, Tailwind CSS, Astro JS, Shopify, WordPress, and Drupal. I excel at creating efficient and visually appealing web applications, utilizing tools like Zapier, Freshdesk, and Trello to streamline workflows. Continuously staying up-to-date with the latest web development trends, I am eager to take on new challenges and expand my skillset. Contact me for reliable and talented web development services.</textarea>
                    <div class="invalid-feedback">
                        Please enter your resume summary.
                    </div>
                    </div>
                    
                    
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Contact details</h4>
                <div class="row g-3">
                    <div class="col-6">
                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="satt.works@gmail.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                    </div>

                    <div class="col-6">
                    <label for="phone_number" class="form-label">Phone<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="0123456789" value="0143072966">
                    <div class="invalid-feedback">
                        Please enter a valid phone number.
                    </div>
                    </div>
                    <div class="col-6">
                    <label for="website" class="form-label">Website<span class="text-danger">*</span></label>
                    <input type="url" class="form-control" id="website" placeholder="https://www.placeholder.com" value="https://www.sattiyans.com">
                    <div class="invalid-feedback">
                        Please enter a valid link.
                    </div>
                    </div>

                    <div class="col-6">
                        <label for="linkedin_link" class="form-label">LinkedIn<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="https://www.linkedin.com/in/test" required value="https://www.linkedin.com/in/sattiyans">
                        <div class="invalid-feedback">
                            Your linkedin is required.
                            </div>
                        </div>
                    </div>
                </div>
            
                <hr class="my-4">

                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Education details</h4>
                    <button id="add_education" class="btn btn-primary">Add education</button>
                </div>
                <div class="education_section">
                    <div class="section row g-3 mb-3">
                        <div class="col-sm-12">
                        <label for="degree_title" class="form-label">Degree<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="degree_title" name="degree_title[]" placeholder="Bachelor of Memes" value="Bachelor of Information Technology (Games Technology)" required >
                        <div class="invalid-feedback">
                            Valid degree is required.
                        </div>
                        </div>

                        <div class="col-sm-12">
                        <label for="institute" class="form-label">Institute<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="institute" name="institute[]" placeholder="University of Memes" required value="Universiti Teknikal Malaysia Melaka">
                        <div class="invalid-feedback">
                            Valid institute is required.
                        </div>
                        </div>

                        <div class="col-6">
                        <label for="edu_start_date" class="form-label">Start date<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="edu_start_date" name="edu_start_date[]" required value="2016-06-01">
                        <div class="invalid-feedback">
                            Your start date is required.
                            </div>
                        </div>
                        </div>

                        <div class="col-6">
                        <label for="edu_end_date" class="form-label">End date<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="edu_end_date" name="edu_end_date[]" required value="2020-02-28">
                        <div class="invalid-feedback">
                            Your end date is required.
                            </div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="education_description" class="form-label">Description<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="education_description" name="education_description[]" rows="6" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id.">I specialize in game development, gaining hands-on experience in programming languages, game engines, and 3D modeling tools. I have worked on various game development projects, including multiplayer games, virtual reality experiences, and mobile apps, honing my skills in game design, mechanics, and user experience. Collaborating with diverse teams of developers, designers, and artists, I have learned to work effectively in a collaborative environment to deliver high-quality products. Additionally, I have completed relevant coursework in game development, covering programming fundamentals, game physics, artificial intelligence, and game project management.</textarea>
                        <div class="invalid-feedback">
                            Please enter your education description.
                        </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">

                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Experience details</h4>
                    <button id="add_experience" class="btn btn-primary">Add experience</button>
                </div>
                <div class="experience_section">
                    <div class="section row g-3 mb-3">
                        <div class="col-sm-12">
                        <label for="job_title" class="form-label">Job Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="job_title" name="job_title[]" placeholder="Chief Meme Officer" value="Web Developer" required>
                        <div class="invalid-feedback">
                            Valid job title is required.
                        </div>
                        </div>

                        <div class="col-sm-12">
                        <label for="organization" class="form-label">Organization<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="organization" name="organization[]" placeholder="Supreme Memes Corp" value="Crave Asia" required>
                        <div class="invalid-feedback">
                            Valid organization is required.
                        </div>
                        </div>

                        <div class="col-6">
                        <label for="job_start_date" class="form-label">Start date<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="job_start_date" name="job_start_date[]" required value="2020-03-01">
                        <div class="invalid-feedback">
                            Your start date is required.
                            </div>
                        </div>
                        </div>

                        <div class="col-6">
                        <label for="job_end_date" class="form-label">End date<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="job_end_date" name="job_end_date[]" required>
                        <div class="invalid-feedback">
                            Your end date is required.
                            </div>
                        </div>
                        </div>

                        <div class="col-12">
                        <label for="job_description" class="form-label">Description<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="job_description" name="job_description[]" rows="5" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id.">I have expertise in planning, designing, and developing web applications for internal and external clients, ensuring optimal functionality and usability. I integrate various APIs, including WhatsApp Cloud API, Twilio SMS API, and SendGrid API, to enhance the functionality and user experience of web applications. Additionally, I create high-converting landing pages using Bootstrap, Tailwind CSS, and Astro JS. I also manage and update content for e-commerce sites, such as Clinique MY, MAC Cosmetics MY, Estee Lauder MY, and Jo Malone MY, ensuring a seamless user experience and brand adherence.</textarea>
                        <div class="invalid-feedback">
                            Please enter your education description.
                        </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
            
                <a href="javascript::void(0)" onclick="confirm_form_submit(this)"
                    class="w-100 btn btn-primary btn-lg mb-3">
                    Save <i class="fas fa-floppy-disk"></i>
                </a>
            </form>
        </div>
        </div>
    </main>
</div>
{{ view('layouts/footer') }}