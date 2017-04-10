<!DOCTYPE html>
<html>
<body>
<?php
$emp = array
  (
  array(2,"hardware",5),
  array(5,"software",7),
  array(7,"networking",2),
  array(6,"database",8)
  );
sort($emp);
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row where 1 for experience 2 for job title and 3 for id</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$emp[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
</body>
</html>