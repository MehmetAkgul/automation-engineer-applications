<script>
    document.title = "Tables";
</script>
<script src="assets/jquery.tablesorter.min.js"></script>
<script>
    $(function () {
        $("#table1").tablesorter();
        $("#table2").tablesorter();
    });
    $(document).ready(function () {
        $('.cell').click(DeleteRow);
    });

    function DeleteRow() {
        $(this).parents('tr').first().remove();
    }
</script>
<style>
    span {
        padding-right: 20px;
        background-repeat: no-repeat;
        background-position: 100% 100%;
    }

    .tablesorter-headerAsc span {
        background-image: url('img/down-arrow.png');
    }

    .tablesorter-headerDesc span {
        background-image: url('img/up-arrow.png');
    }
</style>
<div class="example">
    <h3>Data Tables</h3>
    <p>Often times when you see a table it contains data which is sortable -- sometimes with actions that can be taken
        within each row (e.g. edit, delete). And it can be challenging to automate interaction with sets of data in a table
        depending on how it is constructed.</p>

    <h4>Example 1</h4>
    <p>No Class or ID attributes to signify groupings of rows and columns</p>
    <table id="table1" class="tablesorter">
        <thead>
        <tr>
            <th><span>Last Name</span></th>
            <th><span>First Name</span></th>
            <th><span>Email</span></th>
            <th><span>Due</span></th>
            <th><span>Web Site</span></th>
            <th><span>Action</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Smith</td>
            <td>John</td>
            <td>jsmith@gmail.com</td>
            <td>$50.00</td>
            <td>http://www.jsmith.com</td>
            <td>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        <tr>
            <td>Bach</td>
            <td>Frank</td>
            <td>fbach@yahoo.com</td>
            <td>$51.00</td>
            <td>http://www.frank.com</td>
            <td>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        <tr>
            <td>Doe</td>
            <td>Jason</td>
            <td>jdoe@hotmail.com</td>
            <td>$100.00</td>
            <td>http://www.jdoe.com</td>
            <td>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        <tr>
            <td>Conway</td>
            <td>Tim</td>
            <td>tconway@earthlink.net</td>
            <td>$50.00</td>
            <td>http://www.timconway.com</td>
            <td>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        </tbody>
    </table>

    <h4>Example 2</h4>
    <p>Class and ID attributes to signify groupings of rows and columns</p>
    <table id="table2" class="tablesorter">
        <thead>
        <tr>
            <th><span class='last-name'>Last Name</span></th>
            <th><span class='first-name'>First Name</span></th>
            <th><span class='email'>Email</span></th>
            <th><span class='dues'>Due</span></th>
            <th><span class='web-site'>Web Site</span></th>
            <th><span class='action'>Action</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class='last-name'>Smith</td>
            <td class='first-name'>John</td>
            <td class='email'>jsmith@gmail.com</td>
            <td class='dues'>$50.00</td>
            <td class='web-site'>http://www.jsmith.com</td>
            <td class='action'>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        <tr>
            <td class='last-name'>Bach</td>
            <td class='first-name'>Frank</td>
            <td class='email'>fbach@yahoo.com</td>
            <td class='dues'>$51.00</td>
            <td class='web-site'>http://www.frank.com</td>
            <td class='action'>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        <tr>
            <td class='last-name'>Doe</td>
            <td class='first-name'>Jason</td>
            <td class='email'>jdoe@hotmail.com</td>
            <td class='dues'>$100.00</td>
            <td class='web-site'>http://www.jdoe.com</td>
            <td class='action'>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        <tr>
            <td class='last-name'>Conway</td>
            <td class='first-name'>Tim</td>
            <td class='email'>tconway@earthlink.net</td>
            <td class='dues'>$50.00</td>
            <td class='web-site'>http://www.timconway.com</td>
            <td class='action'>
                <a href='#edit'>edit</a>
                <a class="cell" href='#delete'>delete</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>