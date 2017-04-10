<!DOCTYPE html>
<html>
<body>
<?php
echo "febonancci series is :";
$count = 0 ;
$f1 = 0;
$f2 = 1;
echo $f1." , ";
echo $f2." , ";
while ($count < 8 )
{
$f3 = $f2 + $f1 ;
echo $f3." , ";
$f1 = $f2 ;
$f2 = $f3 ;
$count = $count + 1;
}
?>
</body>
</html>