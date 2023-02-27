<html>
<body>
<h1>Arrays</h1>
<?php
$a=array("Achu"=>"50","Shibhu"=>"49","Aju"=>"55");
echo "printing array elements using print_r function:";
print_r($a);
echo "<br>";
echo "<br>";
echo "printing array elements in ascending order:";
asort($a);
print_r($a);
echo "<br>";
echo "<br>";
echo "printing array elements in descending order:";
arsort($a);
print_r($a);
?>
</body>
</html>

