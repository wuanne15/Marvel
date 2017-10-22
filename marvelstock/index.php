<?php
  include("common.php");
  printTop()
?>
      <h1>Welcome to Stock Marvel</h1>
      <p>This is some text.</p>
      <div class="row">
        <div class="col-sm-6">
          <ul class="pagination">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
          <table class="table table-striped table-hover ">
            <thead>
              <tr>
                <th>#</th>
                <th>Character</th>
                <th class="text-right">Credits</th>
                <th class="text-right">Change</th>
              </tr>
            </thead>
            <tbody>
            <?
            $db = connect();
            $rows = $db->query("
								SELECT 
								FROM
								WHERE
								LIMIT 6");
            for ($i = 1; $i <= 6; $i++) { 
            	$row= $rows->fetch(); ?>
            	<tr>
                	<td><?=$i?></td>
                	<td><?=$row[""]?></td>
                	<td class="text-right">3000</td>
                	<td class="text-right">+0</td>
              </tr>
            <?}
            /*
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
              </tr> */?>
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
