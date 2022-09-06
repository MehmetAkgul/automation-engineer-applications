<script>
    document.title = "Multiple Buttons";

    function button1() {
        log('Clicked on button one!');
    }

    function button2() {
        log('Clicked on button two!');
    }

    function button3() {
        log('Clicked on button three!');

    }

    function button4() {
        log('Clicked on button four!');
    }

    function button5() {
        log('Clicked on button five!');
    }

    function button6() {
        document.getElementsByName('button6')[0].remove();
        log('Now it\'s gone!');
    }

    function log(msg) {
        var result = document.getElementById('result');
        result.innerHTML = msg;

    }

    window.onload = function genereateId() {
        var btn1 = document.getElementById('button3');
        var btn2 = document.getElementById('button4');
        var btn3 = document.getElementById('button5');
        var btn4 = document.getElementById('disappearing_button');
        var ids = ["btn_silver", "button", "b1", "unity", "buttoncheck", "btn_quick", "btn324", "button", "btnbtn", "cool_button"];
        var ids2 = ["quick", "three", "b1", "three", "check", "old", "btn324", "golden", "btnbtn", "cool"];
        var choice1 = Math.floor(Math.random() * 10);
        var choice2 = Math.floor(Math.random() * 10);
        var choice3 = Math.floor(Math.random() * 10);
        var choice4 = Math.floor(Math.random() * 10);
        btn1.id = "button_" + ids2[choice1];
        btn2.id = ids2[choice2] + "_button";
        btn3.id = ids[choice3];
        // btn4.id = "disappearing_"+ids[choice4];
     }
</script>
<div class="container">
    <h3 class="h3">Multiple buttons</h3>
    <p>Here are some examples of different buttons with different attributes:</p>
    <button class="btn btn-primary" onclick="button1()">Button 1</button>
    <button class="btn btn-primary" onclick="button2()" name="button2">Button 2</button>
    <button class="btn btn-primary" onclick="button3()" id="button3">Button 3</button>
    <button class="btn btn-primary" onclick="button4()" id="button4">Button 4</button>
    <button class="btn btn-primary" onclick="button5()" id="button5">Button 5</button>
    <button class="btn btn-primary" onclick="button6()" name="button6" id="disappearing_button">Don't click!</button>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-4 col-md-4">
            <h4 class="h4">Result:</h4>
            <p id='result' style='color:green'></p>
        </div>
    </div>
</div>
