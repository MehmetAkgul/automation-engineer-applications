
            <style>

                #drag-drop-upload {
                    border-style: dashed;
                    border-width: 5px;
                    border-color: red;
                    height: 400px;
                    width: 400px;
                }
            </style>

                <div class="example">
                    <h3>File Uploader</h3>
                    <p>Choose a file on your system and then click upload. Or, drag and drop a file into the area below.</p>
                    <form method='POST' enctype='multipart/form-data'>
                        <input id='file-upload' type='file' name='file'>
                        </br>
                        <input class="btn btn-success my-2" id='file-submit' type='submit' value='Upload'>
                    </form>
                </div>

                <div   id='drag-drop-upload'>  </div>
                <div id="preview-template" style="display: none;">
                    <div class="dz-preview dz-file-preview">
                        <div class="dz-details">
                            <div class="dz-filename"><span data-dz-name></span></div>
                        </div>
                        <div class="dz-success-mark"><span>✔</span></div>
                    </div>
                </div>

<script src='../assets/dropzone.js'></script>
<script>
    document.title = "Upload";
    $('.dz-success-mark').remove();
    $('div#drag-drop-upload').dropzone({
        url: 'file-upload.php',
        previewTemplate: $('#preview-template').php()
    });
</script>

