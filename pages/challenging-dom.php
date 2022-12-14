<div class='example'>
    <h3>Challenging DOM</h3>
    <p>The hardest part in automated web testing is finding the best locators (e.g., ones that well named, unique, and
        unlikely to change). It's more often than not that the application you're testing was not built with this concept in
        mind. This example demonstrates that with unique IDs, a table with no helpful locators, and a canvas element.</p>
    <hr>

    <div class='row'>
        <div class='large-12 columns large-centered'>
            <div class='large-2 columns'>
                <a id='c17bd9c0-0cf7-013b-4966-06f20ba472fe' href='' class='button'>qux</a></br>
                <a id='c17c1070-0cf7-013b-4967-06f20ba472fe' href='' class='button alert'>foo</a></br>
                <a id='c17c13d0-0cf7-013b-4968-06f20ba472fe' href='' class='button success'>baz</a></br>
            </div>
            <div class='large-10 columns'>
                <table>
                    <thead>
                    <tr>
                        <th>Lorem</th>
                        <th>Ipsum</th>
                        <th>Dolor</th>
                        <th>Sit</th>
                        <th>Amet</th>
                        <th>Diceret</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Iuvaret0</td>
                        <td>Apeirian0</td>
                        <td>Adipisci0</td>
                        <td>Definiebas0</td>
                        <td>Consequuntur0</td>
                        <td>Phaedrum0</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret1</td>
                        <td>Apeirian1</td>
                        <td>Adipisci1</td>
                        <td>Definiebas1</td>
                        <td>Consequuntur1</td>
                        <td>Phaedrum1</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret2</td>
                        <td>Apeirian2</td>
                        <td>Adipisci2</td>
                        <td>Definiebas2</td>
                        <td>Consequuntur2</td>
                        <td>Phaedrum2</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret3</td>
                        <td>Apeirian3</td>
                        <td>Adipisci3</td>
                        <td>Definiebas3</td>
                        <td>Consequuntur3</td>
                        <td>Phaedrum3</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret4</td>
                        <td>Apeirian4</td>
                        <td>Adipisci4</td>
                        <td>Definiebas4</td>
                        <td>Consequuntur4</td>
                        <td>Phaedrum4</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret5</td>
                        <td>Apeirian5</td>
                        <td>Adipisci5</td>
                        <td>Definiebas5</td>
                        <td>Consequuntur5</td>
                        <td>Phaedrum5</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret6</td>
                        <td>Apeirian6</td>
                        <td>Adipisci6</td>
                        <td>Definiebas6</td>
                        <td>Consequuntur6</td>
                        <td>Phaedrum6</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret7</td>
                        <td>Apeirian7</td>
                        <td>Adipisci7</td>
                        <td>Definiebas7</td>
                        <td>Consequuntur7</td>
                        <td>Phaedrum7</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret8</td>
                        <td>Apeirian8</td>
                        <td>Adipisci8</td>
                        <td>Definiebas8</td>
                        <td>Consequuntur8</td>
                        <td>Phaedrum8</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Iuvaret9</td>
                        <td>Apeirian9</td>
                        <td>Adipisci9</td>
                        <td>Definiebas9</td>
                        <td>Consequuntur9</td>
                        <td>Phaedrum9</td>
                        <td>
                            <a href='#edit'>edit</a>
                            <a href='#delete'>delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class='row'>
                    <div class='large-10 columns'>
                        <canvas id='canvas' width='599' height='200' style='border:1px dotted;'></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<script>
    $(document).foundation();

    document.title = 'Challenging DOM';
    var canvas_el = document.getElementById('canvas');
    var canvas = canvas_el.getContext('2d');
    canvas.font = '60px Arial';
    canvas.strokeText('Answer: 2117', 90, 112);
</script>
