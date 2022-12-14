
<link rel="stylesheet" href="/assets/menu.css"/>

<script>
    document.title = "jQuery UI Menu";
    $(function () {
        $("#menu").menu();
    });
</script>
<style>
    .ui-menu {
        width: 150px;
    }
</style>

<h3>JQueryUI - Menu</h3>
<div class="description">
    <p><a href="http://api.jqueryui.com/menu/">JQuery UI Menus</a> are a nice UI element from a user
        perspective, but poses an interesting automation challenge since it requires
        mouse operations and synchronization between them.</p>
    <p>Another 'fun' aspect is that the visibility of elements is actually not in the
        html itself, but done magically by JQuery so you cannot trust exactly what the
        html is telling you. A user cannot fire click events at certain UI elements, but
        you might -- if you have a big enough hammer to hit it with.</p>
    <ul id="menu">
        <li class="ui-state-disabled">
            <a href="#">Disabled</a>
            <ul>
                <li><a href="#">Should not see this</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Enabled</a>
            <ul>
                <li>
                    <a href="#">Downloads</a>
                    <ul>
                        <li><a href="/download/jqueryui/menu/menu.pdf">PDF</a></li>
                        <li><a href="/download/jqueryui/menu/menu.csv">CSV</a></li>
                        <li><a href="/download/jqueryui/menu/menu.xls">Excel</a></li>
                    </ul>
                </li>
                <li><a href="/jqueryui">Back to JQuery UI</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--</body>-->
<!--</html>-->