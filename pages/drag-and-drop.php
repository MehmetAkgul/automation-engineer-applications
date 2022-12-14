
    <style>


        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        .columns {
            width: 400px;
        }

        .column {
            height: 150px;
            width: 150px;
            float: left;
            border: 2px solid #666666;
            background-color: #ccc;
            margin-right: 5px;
            text-align: center;
            cursor: move;
        }

        .column.over {
            border: 2px dashed #000;
        }
    </style>


    <div class="example">
        <h3>Drag and Drop</h3>
        <div id="columns">
            <div class="column" id="column-a" draggable="true">
                <header>A</header>
            </div>
            <div class="column" id="column-b" draggable="true">
                <header>B</header>
            </div>
        </div>
    </div>


    <script>
    document.title = 'Drag and Drop';
    var dragSrcEl = null;

    function handleDragStart(e) {
        this.style.opacity = '0.4';

        dragSrcEl = this;

        e.dataTransfer.effectAllowed = 'move';
        e.dataTransfer.setData('text/html', this.innerHTML);
    }

    function handleDragOver(e) {
        if (e.preventDefault) {
            e.preventDefault();
        }

        e.dataTransfer.dropEffect = 'move';

        return false;
    }

    function handleDragEnter(e) {
        this.classList.add('over');
    }

    function handleDragLeave(e) {
        this.classList.remove('over');
    }

    function handleDrop(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        }

        if (dragSrcEl != this) {
            dragSrcEl.innerHTML = this.innerHTML;
            this.innerHTML = e.dataTransfer.getData('text/html');
        }

        return false;
    }

    function handleDragEnd(e) {
        [].forEach.call(cols, function (col) {
            col.classList.remove('over');
        });
        this.style.opacity = '1';
    }

    var cols = document.querySelectorAll('#columns .column');
    [].forEach.call(cols, function (col) {
        col.addEventListener('dragstart', handleDragStart, false);
        col.addEventListener('dragenter', handleDragEnter, false);
        col.addEventListener('dragover', handleDragOver, false);
        col.addEventListener('dragleave', handleDragLeave, false);
        col.addEventListener('drop', handleDrop, false);
        col.addEventListener('dragend', handleDragEnd, false);
    });
</script>
</body>
</html>
