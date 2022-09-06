<div class="col-md-9 col-md-offset-1">
    <div class="page-header">
        <h2>Registration form</h2>
    </div>
    <hr>
    <form  method="post" class="form-horizontal needs-validation " novalidate>
        <div class="mb-3 row">
            <label for="firstname" class="col-sm-3 col-form-label">First name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="first name" required/>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="lastname" class="col-sm-3 col-form-label">Last name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last name" required/>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="username" placeholder="username" required/>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Email address</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="email" placeholder="email@email.com" required/>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" required/>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Phone number</label>
            <div class="col-sm-8">
                <input type="tel" class="form-control" name="phone" placeholder="571-000-0000" required/>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Gender</label>
            <div class="col-sm-8">
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="male" /> Male
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="female"/> Female
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="gender" value="other"/> Other
                    </label>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Date of birth</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="birthday" placeholder="MM/DD/YYYY" required/>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Department / Office</label>
            <div class="col-sm-8">
                <select name="department" class="form-control selectpicker" required>
                    <option value="">Select your Department/Office</option>
                    <option value="DE">Department of Engineering</option>
                    <option value="DA">Department of Agriculture</option>
                    <option value="AO">Accounting Office</option>
                    <option value="TRO">Tresurer's Office</option>
                    <option value="MPDC">MPDC</option>
                    <option value="MCTC">MCTC</option>
                    <option value="MCR">MCR</option>
                    <option value="MO">Mayor's Office</option>
                    <option value="TO">Tourism Office</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Job title</label>
            <div class="col-sm-8">
                <select name="job_title" class="form-control selectpicker" required >
                    <option > Select job type</option>
                    <option>Designer</option>
                    <option>Manager</option>
                    <option>Developer</option>
                    <option>SDET</option>
                    <option>QA</option>
                    <option>Scrum Master</option>
                    <option>Product Owner</option>
                    <option>Project Manager</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-3 col-form-label">Select programming languages</label>
            <div class="col-sm-8">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="cplusplus">
                    <label class="form-check-label" for="inlineCheckbox1">C++</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="java">
                    <label class="form-check-label" for="inlineCheckbox2">Java</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="javascript">
                    <label class="form-check-label" for="inlineCheckbox3">JavaScript</label>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-9 col-sm-offset-3">
                <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    document.title = "Registration Form";

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>