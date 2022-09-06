<script>
    document.title = "Alerts";

    function jsAlert() {
        alert('I am a JS Alert');
        log('You successfully clicked an alert');
    }

    function jsConfirm() {
        var c = confirm('I am a JS Confirm');
        var result = c === true ? 'Ok' : 'Cancel';
        log('You clicked: ' + result);
    }

    function jsPrompt() {
        var p = prompt('I am a JS prompt');
        log('You entered: ' + p);
    }

    function log(msg) {
        var result = document.getElementById('result');
        result.innerHTML = msg;
    }
</script>
<div class="container">
    <h3>JavaScript Alerts</h3>
    <p>Here are some examples of different JavaScript alerts which can be troublesome for automation</p>
    <button class="btn btn-primary" onclick="jsAlert()">Click for JS Alert</button>
    <button class="btn btn-primary" onclick="jsConfirm()">Click for JS Confirm</button>
    <button class="btn btn-primary" onclick="jsPrompt()">Click for JS Prompt</button>
    <br>
    <br>
    <h4>Result:</h4>
    <p id='result' style='color:green'></p>
</div>