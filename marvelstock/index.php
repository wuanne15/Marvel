<?php
  include("common.php");
  printTop();
?>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript" src="index.js"></script>
      <h1>Welcome to Stock Marvel</h1>
      <p>Current Rankings</p>
      <div class="row">
        <div class="col-sm-6">
          <table id="ranking" class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Character</th>
                <th class="text-right">Credits</th>
                <th class="text-right">Change</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Iron Man</td>
                <td class="text-right">3000</td>
                <td class="text-right">+0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Spiderman</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="info">
                <td>3</td>
                <td>Thor</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="success">
                <td>4</td>
                <td>Wolverine</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="danger">
                <td>5</td>
                <td>Captain America</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="warning">
                <td>6</td>
                <td>Loki</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
              <tr class="active">
                <td>7</td>
                <td>Hulk</td>
                <td class="text-right">Column content</td>
                <td class="text-right">Column content</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-4">
          <h2>Popular Cards</h2>
          <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
          <p><small>This line of text is meant to be treated as fine print.</small></p>
          <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
          <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
          <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
        </div>
      </div>
    <?php
    printBot();
?>
