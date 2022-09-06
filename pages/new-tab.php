
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p><strong id="msg">New tab will be opened in 3 seconds!</strong></p>
    <hr>
    <div id="spinner" class="spinner-border text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
    </div></div>
<script>
    document.title = "New tab will be opened in 3 seconds!";
    window.onload = setTimeout(function openNewTab() {
        var win = window.open("new_tab2.php", '_blank');
        win.focus();
        document.getElementById("spinner").remove();
        document.getElementById("msg").innerText = "Check the new tab!"
    }, 3000);
</script>