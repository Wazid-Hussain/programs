<?php
if(isset($_GET["Number"]))
{
 $a=$_GET["Number"];
 $rev=0; $p="0";   $temp=$a;
 for($i=0;$i<strlen($a);$i++)
   {
     $rev=$temp%10;
     if ($rev==0){
       $p[$i]=0;
      }

     $p .=$rev;

     $temp=$temp/10;
   }
 }
echo "Reversed Number is $p";
?>
<html>
<body>
  <form action = "<?php $_PHP_SELF ?>" method = "GET">
    Number:<input type="text" name="Number"/>
    <input type="submit" value="Enter"/>
  </form>
</body>
</html>