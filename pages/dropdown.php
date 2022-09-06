
            <p class="example">
            <h3>Dropdown List</h3>
            <p>
            <h6>Simple dropdown</h6>
            <select id='dropdown'>
                <option value="" disabled="disabled" selected="selected">Please select an option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
            </select>
            </p>
            <br>
            <p>
            <h6>Select your date of birth</h6>
            <select id="year"></select>
            <select id="month"></select>
            <select id="day"></select>
            </p>

            <p>
                <br>
            <h6>State selection</h6>
            <select id="state">
                <option value="" selected="selected">Select a State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
            <br>
            <br>
            <p><h6>Which programming languages do you know?</h6>
            <select name="Languages" multiple>
                <option value="java">Java</option>
                <option value="js">JavaScript</option>
                <option value="c#">C#</option>
                <option value="python">Python</option>
                <option value="ruby">Ruby</option>
                <option value="c">C</option>
            </select>
            </p>
            <br>
            <h6>Select a website</h6>
            <div class="btn-group">
                <button class="btn btn-secondary  dropdown-toggle" id="dropdownMenuButton1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Large button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                   <li> <a class="dropdown-item" href="https://www.google.com/">Google</a></li>
                   <li> <a class="dropdown-item" href="https://www.amazon.com/">Amazon</a></li>
                   <li> <a class="dropdown-item" href="https://www.yahoo.com/">Yahoo</a></li>
                   <li> <a class="dropdown-item" href="https://www.facebook.com/">Facebook</a></li>
                   <li> <a class="dropdown-item" href="https://www.etsy.com/">Etsy</a></li>
                </ul>
            </div>

<script>
    document.title = "Dropdowns";

    $(document).ready(function () {
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
        var qntYears = 100;
        var selectYear = $("#year");
        var selectMonth = $("#month");
        var selectDay = $("#day");
        var currentYear = new Date().getFullYear();

        for (var y = 0; y < qntYears; y++) {
            let date = new Date(currentYear);
            var yearElem = document.createElement("option");
            yearElem.value = currentYear
            yearElem.textContent = currentYear;
            selectYear.append(yearElem);
            currentYear--;
        }

        for (var m = 0; m < 12; m++) {
            let monthNum = new Date(2018, m).getMonth()
            let month = monthNames[monthNum];
            var monthElem = document.createElement("option");
            monthElem.value = monthNum;
            monthElem.textContent = month;
            selectMonth.append(monthElem);
        }

        var d = new Date();
        var month = d.getMonth();
        var year = d.getFullYear();
        var day = d.getDate();

        selectYear.val(year);
        selectYear.on("change", AdjustDays);
        selectMonth.val(month);
        selectMonth.on("change", AdjustDays);

        AdjustDays();
        selectDay.val(day)

        function AdjustDays() {
            var year = selectYear.val();
            var month = parseInt(selectMonth.val()) + 1;
            selectDay.empty();

            //get the last day, so the number of days in that month
            var days = new Date(year, month, 0).getDate();

            //lets create the days of that month
            for (var d = 1; d <= days; d++) {
                var dayElem = document.createElement("option");
                dayElem.value = d;
                dayElem.textContent = d;
                selectDay.append(dayElem);
            }
        }
    });
</script>