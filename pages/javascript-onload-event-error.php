<script>
    function loadError() {
        var xx = document.propertyThatDoesNotExist.xyz;
    }
    document.title="Page with JavaScript errors on load"
</script>

<div onload="loadError()">
<p>
    This page has a JavaScript error in the onload event.
    This is often a problem to using normal Javascript injection
    techniques.
</p>
</div>