<style>
    .figure {
        float: left;
        padding-right: 20px;
    }

    .figcaption {
        display: none;
    }

    .figure:hover .figcaption {
        display: block;
    }
</style>

<div class="example">
    <h3>Hovers</h3>
    <p>Hover over the image for additional information</p>
    <div class="figure">
        <img src="/assets/img/avatar-blank.jpeg" alt="User Avatar">
        <div class="figcaption">
            <h5>name: user1</h5>
            <a href="/users/1">View profile</a>
        </div>
    </div>
    <div class="figure">
        <img src="/assets/img/avatar-blank.jpeg" alt="User Avatar">
        <div class="figcaption">
            <h5>name: user2</h5>
            <a href="/users/2">View profile</a>
        </div>
    </div>
    <div class="figure">
        <img src="/assets/img/avatar-blank.jpeg" alt="User Avatar">
        <div class="figcaption">
            <h5>name: user3</h5>
            <a href="/users/3">View profile</a>
        </div>
    </div>
</div>

<script>
    document.title = "Hovers";
</script>