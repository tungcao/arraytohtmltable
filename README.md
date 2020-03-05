# Array to HTML table
# Array or JSON array to HTML Table
# Convert array to HTML table
# PHP Array to HTML Table

Today I show you how to do an Array or JSON array to HTML Table, with the column name automatically generated. Normally we need to check the column name of the table, then we code the html with the table header and fetch the body of the table with the column name.
We have array like this:
$list = array( array("title"=>"Tulip", "price"=>2.25 , "number"=>25),
array("title"=>"Orchids", "price"=>1.50 , "number"=>35),
array("title"=>"Snowdrop", "price"=>2.15 , "number"=>8)
);
If you use JSON Array, we need to decode to Array first:
json_decode($dataJSON);


We have 2 way to do:
1. Generate table inside php code like after get from mySQL and show result.
``` php
if (count($list) > 0) {
echo "<table border=1 cellspacing=0 cellpadding=2>
    <thead>
      <tr>
        <th>";
          echo implode('</th><th>', array_keys(current($list)));
          echo "
        </th>
      </tr>
    </thead>
    <tbody>";
      foreach ($list as $row) {
        array_map('htmlentities', $row);
      echo "
        <tr>
          <td>";
            echo implode('</td><td>', $row);
            echo "
          </td>
        </tr>";
      }
      echo "
    </tbody>
</table>";
}
```


2. Generate table inside html code.
``` php
<?php if (count($list) > 0): ?>
  <table border='1' cellspacing='0' cellpadding='2'>
    <thead>
      <tr>
        <th><?php echo implode('</th><th>', array_keys(current($list))); ?></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($list as $row): array_map('htmlentities', $row); ?>
      <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>
```

Well done! run and happy.
