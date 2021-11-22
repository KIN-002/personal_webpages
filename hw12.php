<!DOCTYPE html>
<html>
<title>Draw reward</title>
<body>
<?php
for($i=0;$i<49;$i++) $ary[$i] = "true";

while($a != 8)
{
if($a == 6)
{
echo "<img src='plus.jpg'>";
$a++;
}
$rd = (int)rand(1,48);
if($ary[$rd] == "true")
{
echo "<img src='".$rd.".jpg'>";
$ary[$rd] = "false";
$a ++;
}
}
?>
</body>
</html>