<div class="example">
    <h4>Dynamic Controls</h4>
    <p>This example demonstrates when elements (e.g., checkbox, input field, etc.) are changed asynchronously.</p>

    <h4 class=subheader>Remove/add</h4>
    </br>
    <form id="checkbox-example">
        <div id="checkbox"><input type="checkbox" label="blah"> A checkbox</div>
        <button autocomplete="off" type="button" class="btn btn-success" onclick="swapCheckbox()">Remove</button>
    </form>

    <hr>

    </br>
    <h4 class=subheader>Enable/disable</h4>
    </br>
    <form id="input-example">
        <input type="text" disabled style="width: 30%;">
        <button autocomplete="off" type="button" class="btn btn-warning" onclick="swapInput()">Enable</button>
    </form>
</div>


<script>
    document.title = "Dynamic Controls";

    function swapInput() {
        disableButton("#input-example button");
        clearMessage();
        showDelay("#input-example button");
        pauseThenToggleControls("input");
    }

    function swapCheckbox() {
        disableButton("#checkbox-example button");
        clearMessage();
        showDelay("#checkbox-example button");
        pauseThenToggleControls("checkbox");
    };

    function disableButton(locator) {
        $(locator).attr("disabled", true);
    };

    function clearMessage() {
        if ($("#message").length) {
            $("#message").first().remove();
        }
    };

    function showDelay(locator) {
        $(locator).after("<div id='loading'>Wait for it... <img src='/assets/ajax-loader.gif'></div></br>");
    };

    function pauseThenToggleControls(target) {
        setTimeout(function () {
            if (target === "checkbox") {
                toggleCheckboxControls();
            } else if (target === "input") {
                toggleInputControls();
            }
        }, 3000);
    };

    function toggleCheckboxControls() {
        var btn = $("#checkbox-example button").first();
        var check = $("#checkbox").first();
        var load = $("#loading");
        if (btn.text() == "Remove") {
            check.remove();
            btn.text("Add");
            btn.after("<p id='message'>It's gone!</p>");
            btn.attr("disabled", false);
            load.hide();
        } else {
            btn.text("Remove");
            btn.after("<div><input type='checkbox' id='checkbox'> A checkbox</div>");
            btn.after("<p id='message'>It's back!</p>");
            btn.attr("disabled", false);
            load.hide();
        }
    };

    function toggleInputControls() {
        var btn = $("#input-example button").first();
        var input = $("#input-example input").first();
        var load = $("#loading");
        if (btn.text() == "Enable") {
            input.prop("disabled", false)
            btn.after("<p id='message'>It's enabled!</p>");
            btn.text("Disable");
            btn.attr("disabled", false);
            load.hide();
        } else {
            btn.text("Enable");
            input.prop("disabled", true)
            btn.after("<p id='message'>It's disabled!</p>");
            btn.attr("disabled", false);
            load.hide();
        }
    };
</script>
</body>
</html>
