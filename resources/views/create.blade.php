{{ view('layouts/header')}}
    <div class="container">
    <main>
        {{ view('components/title')}}
        <div class="row g-5">
        <div class="col-md-12 col-lg-12">
            <h4 class="mb-3">Personal details</h4>
            <form class="needs-validation" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="John" value="" required>
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                </div>

                <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Doe" value="" required>
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                </div>

                <div class="col-12">
                <label for="title" class="form-label">Job title</label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="title" placeholder="Web Developer" required>
                <div class="invalid-feedback">
                    Your title is required.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="summary" class="form-label">Summary</label>
                  <textarea class="form-control" id="summary" rows="3" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id."></textarea>
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
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
                </div>

                <div class="col-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="number" class="form-control" id="phone" placeholder="0123456789">
                <div class="invalid-feedback">
                    Please enter a valid phone number.
                </div>
                </div>
                <div class="col-6">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" placeholder="www.placeholder.com">
                <div class="invalid-feedback">
                    Please enter a valid link.
                </div>
                </div>

                <div class="col-6">
              <label for="linkedin" class="form-label">LinkedIn</label>
              <div class="input-group has-validation">
                <span class="input-group-text"><i class="fa-brands fa-linkedin-in"></i></span>
                <input type="text" class="form-control" id="linkedin" placeholder="placeholder" required>
              <div class="invalid-feedback">
                  Your linkedin is required.
                </div>
              </div>
            </div>
            </div>
            
            <hr class="my-4">

            <div class="mb-3 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Education details</h4>
            <button class="btn btn-primary" type="button">Add education</button>
            </div>

            <div class="row g-3">
                <div class="col-sm-12">
                <label for="degree" class="form-label">Degree</label>
                <input type="text" class="form-control" id="degree" placeholder="Bachelor's in Memes" value="" required>
                <div class="invalid-feedback">
                    Valid degree is required.
                </div>
                </div>

                <div class="col-sm-12">
                <label for="institute" class="form-label">Institute</label>
                <input type="text" class="form-control" id="institute" placeholder="University of Memes" value="" required>
                <div class="invalid-feedback">
                    Valid institute is required.
                </div>
                </div>

                <div class="col-6">
                <label for="start" class="form-label">Start date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="start"" required>
                <div class="invalid-feedback">
                    Your start date is required.
                    </div>
                </div>
                </div>

                <div class="col-6">
                <label for="end" class="form-label">End date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="end"" required>
                <div class="invalid-feedback">
                    Your end date is required.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" rows="3" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id."></textarea>
                <div class="invalid-feedback">
                    Please enter your education description.
                </div>
                </div>
            </div>

            <hr class="my-4">

            <div class="mb-3 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Experience details</h4>
            <button class="btn btn-primary" type="button">Add experience</button>
            </div>

            <div class="row g-3">
                <div class="col-sm-12">
                <label for="job_title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="job_title" placeholder="Chief Meme Officer" value="" required>
                <div class="invalid-feedback">
                    Valid job title is required.
                </div>
                </div>

                <div class="col-sm-12">
                <label for="organization" class="form-label">Organization</label>
                <input type="text" class="form-control" id="organization" placeholder="Supreme Memes Corp" value="" required>
                <div class="invalid-feedback">
                    Valid organization is required.
                </div>
                </div>

                <div class="col-6">
                <label for="start" class="form-label">Start date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="start"" required>
                <div class="invalid-feedback">
                    Your start date is required.
                    </div>
                </div>
                </div>

                <div class="col-6">
                <label for="end" class="form-label">End date</label>
                <div class="input-group has-validation">
                    <input type="date" class="form-control" id="end"" required>
                <div class="invalid-feedback">
                    Your end date is required.
                    </div>
                </div>
                </div>

                <div class="col-12">
                <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" rows="3" placeholder="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit sit blanditiis similique aliquam qui maiores iste sunt necessitatibus! Totam, id."></textarea>
                <div class="invalid-feedback">
                    Please enter your education description.
                </div>
                </div>
            </div>

            <hr class="my-4">
            
            <button class="w-100 btn btn-primary btn-lg" type="submit">Save and view.</button>
            </form>
        </div>
        </div>
    </main>
{{ view('layouts/footer') }}