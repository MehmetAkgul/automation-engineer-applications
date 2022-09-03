<style>
    #draggable {
        cursor: move;
        position: absolute;
        top: 260px;
        left: 50%;
        margin-left: -28px;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background-color: #03a9f4;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
    }

    .painted {
        background-color: #03a9f4;
        color: #fff;
    }

    #draggable.hollow {
        cursor: default;
        background: #ececec;
    }

    #droptarget {
        height: 200px;
        width: 200px;
        font-size: 14px;
        border-radius: 50%;
        text-align: center;
        line-height: 200px;
        margin: 0 auto;
        cursor: default;
        border: 1px solid #999;
    }

    .demo-section {
        height: 300px;
        position: relative;
    }
</style>
<div id="example">
    <div class="demo-section">
        <div id="droptarget" class="k-header">Drag the small circle here.</div>
        <div id="draggable"></div>
    </div>
</div>

<!-- col-md-8 finis-->

<script src="https://kendo.cdn.telerik.com/2022.2.621/js/kendo.all.min.js"></script>
<script>
    document.title = "Drag and Drop Circles";

    function draggableOnDragStart(e) {
        $("#draggable").addClass("hollow");
        $("#droptarget").text("Drop here.");
        $("#droptarget").removeClass("painted");
    }

    function droptargetOnDragEnter(e) {
        $("#droptarget").text("Now drop...");
        $("#droptarget").addClass("painted");
    }

    function droptargetOnDragLeave(e) {
        $("#droptarget").text("Drop here.");
        $("#droptarget").removeClass("painted");
    }

    function droptargetOnDrop(e) {
        $("#droptarget").text("You did great!");
        $("#draggable").removeClass("hollow");
    }

    function draggableOnDragEnd(e) {
        var draggable = $("#draggable");

        if (!draggable.data("kendoDraggable").dropped) {
            // drag ended outside of any droptarget
            $("#droptarget").text("Try again!");
        }

        draggable.removeClass("hollow");
    }

    $(document).ready(function () {
        $("#draggable").kendoDraggable({
            hint: function () {
                return $("#draggable").clone();
            },
            dragstart: draggableOnDragStart,
            dragend: draggableOnDragEnd
        });

        $("#droptarget").kendoDropTarget({
            dragenter: droptargetOnDragEnter,
            dragleave: droptargetOnDragLeave,
            drop: droptargetOnDrop
        });

        var draggable = $("#draggable").data("kendoDraggable");

        $("#cursorOffset").click(function (e) {
            if (this.checked) {
                draggable.options.cursorOffset = {top: 10, left: 10};
            } else {
                draggable.options.cursorOffset = null;
            }
        });

        $("#axis").change(function (e) {
            draggable.options.axis = $(this).val();
        });

        $("#axis").kendoDropDownList({});
    });
</script>

