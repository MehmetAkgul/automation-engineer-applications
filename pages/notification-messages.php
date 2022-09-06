<?php
if ($_POST) {
    if ($_POST["number"] % 3 == 0) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Alert</strong> successful.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    } elseif ($_POST["number"] % 4 == 0) {
        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Action!</strong> unsuccessful, please try again.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }

}
?>
<form action="notification-messages.php" method="post">
    <input type="hidden" name="number" value="<?php echo isset($_POST["number"]) ? ++$_POST["number"] : 0?>">
    <div class="example">
        <h3> Notification Message </h3>
        <p>
            The message displayed above the heading is a notification message . It is often used to convey information about an action previously taken by the user .
            </br ></br >
            Some rudimentary examples include 'Action successful', 'Action unsuccessful, please try again', etc .
            </br ></br >
            <button class="btn btn-dark" type="submit"> Click here</button>
            to load a new message .
        </p>
    </div>
</form>

<script>
    document.title = "Notification Message";
</script>