<style>
    .example a {
        color: #DA4B4B;
        text-decoration: none;
    }

    .example a:hover {
        color: #000;
    }

    .example ul {
        list-style-type: none;
        line-height: 50px;
    }

    .example li {
        display: inline;
        float: left;
    }

    .example li a {
        display: block;
        background: #ececec;
        padding: 0 20px;
        font-size: 18px;
        border: 1px solid #ccc;
    }

    .example li a:hover {
        background: #f2f2f2;
        font-size: 20px;
    }
</style>

<div class='example'>
    <h3>Disappearing Elements</h3>
    <p>This example demonstrates when elements on a page change by disappearing/reappearing on each page
        load.</p>

    <hr>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about/">About</a></li>
        <li><a href="/contact-us/">Contact Us</a></li>
        <li><a href="/portfolio/">Portfolio</a></li>
    </ul>
</div>

<script>
    document.title = 'Disappearing Elements';
</script>