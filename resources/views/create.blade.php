{{ view('layouts/header')}}
    <div class="container">
    <main>
        {{ view('components/title')}}
        <div class="row g-5">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">Personal details</h4>
            <form action="{{ route('store') }}" id="createform" class="needs-validation" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="user_id" name="user_id" class="form-control" />

            <div class="row g-3">
                <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="John" value="Sattiyan" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                </div>

                <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Doe" value="Selvarajah" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                </div>

                <div class="col-12">
                <label for="profile_title" class="form-label">Profile title</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="profile_title" name="profile_title" placeholder="Web Developer" value="Web Dev" required>
                <div class="invalid-feedback">
                    Your profile_title is required.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="about_me" class="form-label">Summary</label>
                  <textarea class="form-control" id="about_me" name="about_me" rows="3" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id."></textarea>
                <div class="invalid-feedback">
                    Please enter your resume summary.
                </div>
                </div>
                
                
            </div>

            <hr class="my-4">

            <h4 class="mb-3">Contact details</h4>
            <div class="row g-3">
                <div class="col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="test@test.com">
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
                </div>

                <div class="col-6">
                <label for="phone_number" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="0123456789" value="0123432">
                <div class="invalid-feedback">
                    Please enter a valid phone number.
                </div>
                </div>
                <div class="col-6">
                <label for="website" class="form-label">Website</label>
                <input type="url" class="form-control" id="website" placeholder="https://www.placeholder.com" value="https://google.com">
                <div class="invalid-feedback">
                    Please enter a valid link.
                </div>
                </div>

                <div class="col-6">
              <label for="linkedin_link" class="form-label">LinkedIn</label>
              <div class="input-group has-validation">
                <input type="url" class="form-control" id="linkedin_link" name="linkedin_link" placeholder="https://www.linkedin.com/in/test" required value="https://www.linkedin.com/in/test">
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

            <div class="section row g-3">
                <div class="col-sm-12">
                <label for="degree_title" class="form-label">Degree</label>
                <input type="text" class="form-control" id="degree_title" name="degree_title[]" placeholder="Bachelor's in Memes" value="fdsfds" required >
                <div class="invalid-feedback">
                    Valid degree is required.
                </div>
                </div>

                <div class="col-sm-12">
                <label for="institute" class="form-label">Institute</label>
                <input type="text" class="form-control" id="institute" name="institute[]" placeholder="University of Memes" required value="fsd">
                <div class="invalid-feedback">
                    Valid institute is required.
                </div>
                </div>

                <div class="col-6">
                <label for="edu_start_date" class="form-label">Start date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="edu_start_date" name="edu_start_date[]" required>
                <div class="invalid-feedback">
                    Your start date is required.
                    </div>
                </div>
                </div>

                <div class="col-6">
                <label for="edu_end_date" class="form-label">End date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="edu_end_date" name="edu_end_date[]" required>
                <div class="invalid-feedback">
                    Your end date is required.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="education_description" class="form-label">Description</label>
                  <textarea class="form-control" id="education_description" name="education_description[]" rows="3" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id."></textarea>
                <div class="invalid-feedback">
                    Please enter your education description.
                </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="mb-3 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Experience details</h4>
            <button id="add_experience" class="btn btn-primary">Add experience</button>
            </div>

            <div class="section row g-3">
                <div class="col-sm-12">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job_title" name="job_title[]" placeholder="Chief Meme Officer" value="fdsfds" required>
                <div class="invalid-feedback">
                    Valid job title is required.
                </div>
                </div>

                <div class="col-sm-12">
                <label for="organization" class="form-label">Organization</label>
                <input type="text" class="form-control" id="organization" name="organization[]" placeholder="Supreme Memes Corp" value="fsdfds" required>
                <div class="invalid-feedback">
                    Valid organization is required.
                </div>
                </div>

                <div class="col-6">
                <label for="job_start_date" class="form-label">Start date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="job_start_date" name="job_start_date[]" required>
                <div class="invalid-feedback">
                    Your start date is required.
                    </div>
                </div>
                </div>

                <div class="col-6">
                <label for="job_end_date" class="form-label">End date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="job_end_date" name="job_end_date[]" required>
                <div class="invalid-feedback">
                    Your end date is required.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="job_description" class="form-label">Description</label>
                  <textarea class="form-control" id="job_description" name="job_description[]" rows="3" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id."></textarea>
                <div class="invalid-feedback">
                    Please enter your education description.
                </div>
                </div>
            </div>

            <hr class="my-4">
            
            <button  id="submitbtn" class="w-100 btn btn-primary btn-lg" type="submit">Save.</button>
            </form>
        </div>
        </div>
    </main>
{{ view('layouts/footer') }}