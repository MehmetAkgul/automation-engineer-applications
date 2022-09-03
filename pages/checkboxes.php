<h3>Checkboxes</h3>
<form id='checkboxes'>
    <input type="checkbox" name="checkbox1" id="box1">
    <span class="checktext">Checkbox 1</span>
    </br>
    <input type="checkbox" name="checkbox2" id="box2" checked>
    <span class="checktext">Checkbox 2</span>
</form>
<script>
    document.title = "Checkboxes";
    var form = document.getElementById('checkboxes');
    var checkboxes = form.getElementsByTagName('input');
    for (var i = 0, len = checkboxes.length; i < len; i++) {
        checkboxes[i].onclick = function () {
            this.checked ? this.setAttribute("checked", "") : this.removeAttribute("checked");
        }
    }
</script>
