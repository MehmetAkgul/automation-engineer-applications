 <div class="example">
    <button class="btn btn-success" onclick="addElement()">Add Element</button>
    <hr/>
    <div id="elements">
    </div>
</div>
<script>
    document.title = "Add/Remove Elements";
    function addElement() {
        $("<button class='btn btn-danger mx-2' onclick='deleteElement()'>Delete</button>").appendTo('#elements');
    }
    function deleteElement() {
        $('#elements button:first-child').remove();
    }
</script>
