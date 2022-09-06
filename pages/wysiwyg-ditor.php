<script src="https://cdn.tiny.cloud/1/gk093bla65r9o2xd5swa0yrzk6suqk33qx6hmyun1ue8lh9i/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '.tinymce',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            ' bold italic backcolor | alignleft aligncenter ' +
            ' alignright alignjustify | bullist numlist outdent indent | ' +
            ' removeformat | help'
    });
</script>

<div class="example">
    <h3>An iFrame containing the TinyMCE WYSIWYG Editor</h3>
    <textarea class="tinymce">Your content goes here.</textarea>
</div>
