<style>
    #modal {
        font-family: 'Open Sans', sans-serif;
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    #modal .underlay {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
        cursor: pointer;
        -webkit-animation: fadein 0.5s;
        animation: fadein 0.5s;
    }

    #modal .modal {
        width: 600px;
        height: 400px;
        background-color: #f0f1f2;
        z-index: 1;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: 4px;
        -webkit-animation: popin 0.3s;
        animation: popin 0.3s;
    }

    #modal .modal-title {
        font-size: 18px;
        background-color: #252525;
        color: #fff;
        padding: 10px;
        margin: 0;
        border-radius: 4px 4px 0 0;
        text-align: center;
    }

    #modal h3 {
        color: #fff;
        font-size: 1em;
        margin: 0.2em;
        text-transform: uppercase;
        font-weight: 500;
    }

    #modal .modal-body {
        padding: 20px 35px;
        font-size: 0.9em;
    }

    #modal p {
        color: #344a5f;
    }

    #modal form {
        text-align: center;
        margin-top: 35px;
    }

    #modal form input[type=text] {
        padding: 12px;
        font-size: 1.2em;
        width: 300px;
        border-radius: 4px;
        border: 1px solid #ccc;
        -webkit-font-smoothing: antialiased;
    }

    #modal form input[type=submit] {
        text-transform: uppercase;
        font-weight: bold;
        padding: 12px;
        font-size: 1.1em;
        border-radius: 4px;
        color: #fff;
        background-color: #4ab471;
        border: none;
        cursor: pointer;
        -webkit-font-smoothing: antialiased;
    }

    #modal form p {
        text-align: left;
        margin-left: 35px;
        opacity: 0.8;
        margin-top: 1px;
        padding-top: 1px;
        font-size: 0.9em;
    }

    #modal .modal-footer {
        position: absolute;
        bottom: 20px;
        text-align: center;
        width: 100%;
    }

    #modal .modal-footer p {
        text-transform: capitalize;
        cursor: pointer;
        display: inline;
        border-bottom: 1px solid #344a5f;
    }

    @-webkit-keyframes fadein {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-ms-keyframes fadein {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes fadein {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes popin {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 0;
        }

        85% {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @-ms-keyframes popin {
        0% {
            -ms-transform: scale(0);
            transform: scale(0);
            opacity: 0;
        }

        85% {
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes popin {
        0% {
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            opacity: 0;
        }

        85% {
            -webkit-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    }
</style>
<div class="example">
    <h3>Entry Ad</h3>
    <p>Displays an ad on page load.</p>
    <p>If closed, it will not appear on subsequent page loads.</p>
    <p>To re-enable it, <a href="" id="restart-ad">click here</a>.</p>
</div>
<div id="modal" style='display:none;'>
    <div class="underlay"></div>
    <div class="modal">
        <div class="modal-title">
            <h3>This is a modal window</h3>
        </div>

        <div class="modal-body">
            <p>It's commonly used to encourage a user to take an action (e.g., give their e-mail address to sign up for
                something or disable their ad blocker).</p>
        </div>

        <div class="modal-footer">
            <p>Close</p>
        </div>
    </div>
</div>
<script>
    document.title = "Entry Ad";
    showAd();
    $('body').on('click', function () {
        dismissedAd();
    });
    $('#modal .modal-footer').on('click', function () {
        dismissedAd();
    });
    $('#modal .modal').on('click', function (e) {
        e.stopPropagation();
    });
    $('#restart-ad').on('click', () => {
        $.post('entry-ad.php');
        setTimeout(() => {
            location.reload();
        }, 0);
    });

    function showAd() {
        $('#page-footer').hide();
        $('#modal').show();
    }

    function dismissedAd() {
        $('#modal').hide();
        $('#page-footer').show();
        $.post('entry-ad.php');
    }
</script>