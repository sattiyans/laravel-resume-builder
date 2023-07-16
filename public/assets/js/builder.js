$(document).ready(function () {
    $("#add_education").click(function (e) {
        e.preventDefault();

        var html = `<div class="mt-3 section row g-3">
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
            </div>`;

        $(".education_section").append(html);
    });

    $("#add_experience").click(function (e) {
        e.preventDefault();

        var html = ` <div class="section row g-3">
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
            </div>`;

        $(".experience_section").append(html);
    });
});

function remove_section(element) {
    $(element).closest(".section").remove();
}
