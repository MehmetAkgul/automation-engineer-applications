<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER'] != "admin" && $_SERVER['PHP_AUTH_PW'] != "techproed") {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    if ($_SERVER['PHP_AUTH_USER'] == "admin" && $_SERVER['PHP_AUTH_PW'] == "techproed") {
        ?>
        <div class="example">
            <h3>Secure File Downloader</h3>
            <a href="download/b10 all test cases, code.docx">b10 all test cases, code.docx</a>
            </br>
            <a href="download/some-file.txt">some-file.txt</a>
            </br>
            <a href="download/ach.jpeg">ach.jpeg</a>
            </br>
            <a href="download/junit-4.13-beta-3.jar">junit-4.13-beta-3.jar</a>
            </br>
            <a href="secure-file-download.php?logout">logout</a>
        </div>
        <script>
            document.title = "Secure File Downloader";
        </script>
    <?php } else {

        ?>
        unauthorized
        <a href="secure-file-download.php?logout"> try again</a>
    <?php }


} ?>