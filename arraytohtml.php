<?php
$list = array( array("title"=>"Tulip", "price"=>2.25 , "number"=>25),
               array("title"=>"Orchids", "price"=>1.50 , "number"=>35),
               array("title"=>"Snowdrop", "price"=>2.15 , "number"=>8)
             );
             echo "<h1>Demo Array to HTML Table</h1>";
        if (count($list) > 0) {
            echo "<table border=1 cellspacing=0 cellpadding=2>
                    <thead>
                        <tr>
                            <th>";
            echo implode('</th><th>', array_keys(current($list)));
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>";

            foreach ($list as $row) {
                array_map('htmlentities', $row);
                echo "<tr><td>";
                echo implode('</td><td>', $row);
                echo "</td></tr>";
            }
            echo "</tbody>
          </table>";
        }
?>

<?php if (count($list) > 0): ?>
    <table border='1' cellspacing='0' cellpadding='2'>
  <thead>
    <tr>
      <th><?php echo implode('</th><th>', array_keys(current($list))); ?></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($list as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>