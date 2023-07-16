$(document).ready(function () {
    $("#add_education").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Degree</label>
                <input type="text" id="degree_title" name="degree_title[]"
                    class="form-control" placeholder="Degree" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Institute</label>
                    <input type="text" id="institute" name="institute[]"
                    class="form-control" placeholder="Institute" />
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-12">
                <div class="form-outline">
                <label class="form-label fw-bold text-secondary">Start Date</label>
                        <input type="date" id="edu_start_date"
                            name="edu_start_date[]" class="form-control" />
                    </div>
                    </div>
                    <div class="col-sm-6 col-12">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">End Date</label>
                        <input type="date" id="edu_end_date"
                        name="edu_end_date[]" class="form-control" />
                    </div>
                    </div>
            </div>
            <div class="form-outline mb-4">
            <label class="form-label fw-bold text-secondary">Degree Description</label>
                    <textarea class="form-control" placeholder="Descripton" id="education_description" name="education_description[]"
                    rows="4"></textarea>
            </div>
        </div>
        </div>`;

        $(".education_section").append(html);
    });

    $("#add_experience").click(function (e) {
        e.preventDefault();

        var html = `<div class="card mb-4">
        <div class="card-body">
            <span onclick="remove_section(this)" class="position-absolute" style="top: 10px; right: 15px; cursor: pointer;"><i class="fa fa-close"></i></span>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Job Title</label>
                <input type="text" id="job_title" name="job_title[]"
                    class="form-control" placeholder="Job Title" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Organization</label>
                <input type="text" id="organization"
                    name="organization[]" class="form-control"
                    placeholder="Organization" />
            </div>
            <div class="row mb-4">
                <div class="col-sm-6 col-12">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">Start Date</label>
                        <input type="date" id="job_start_date"
                            name="job_start_date[]"
                            class="form-control" />
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="form-outline">
                        <label class="form-label fw-bold text-secondary">End Date</label>
                        <input type="date" id="job_end_date"
                            name="job_end_date[]" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label fw-bold text-secondary">Job Description</label>
                <textarea class="form-control" placeholder="Job Descripton" id="job_description" name="job_description[]"
                    rows="4"></textarea>
            </div>
        </div>
        </div>`;

        $(".experience_section").append(html);
    });
});

function remove_section(element) {
    $(element).closest(".section").remove();
}
