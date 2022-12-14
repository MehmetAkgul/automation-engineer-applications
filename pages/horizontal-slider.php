<div class="example">
    <h3>Horizontal Slider</h3>
    <h5 class="subheader">Set the focus on the slider (by clicking on it) and use the arrow keys to move it right and
        left. Or click and drag the slider with your mouse. It will indicate the value of the slider to the right.</h5>
    <div class="sliderContainer">
        <input type="range" min="0.0" max="5.0" step="0.5" value="0" onchange="showValue(this.value)">
        &nbsp;
        <span id="range">0</span>
    </div>
</div>
<script type="text/javascript">
    document.title = "Horizontal Slider";

    function showValue(newValue) {
        $("#range").html(newValue);
    }
</script>