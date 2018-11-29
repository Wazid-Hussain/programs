 <?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// if(isset($_GET["Number"]))
// {
//  $n=$_GET["Number"];
//  $examp= exampl($n);
//  echo "Factorial of $n is $examp";
// }


//   function exampl($n)    
// {        
//     // if ($n <= 0){   
//     //     return 1;  
//     // }else{

//     // 	return ($n * exampl ($n -1));    
//     // }
// 	echo $n;

// 	if ($n == 0) {
// 		return;
// 	}
// 	--$n;
// }   
    



?>
<!-- 
<html>
<body>
<form action="<?php $_PHP_SELF?>" method="GET">
  Number: <input type="text" name="Number" >
  <input type="submit" value="Submit">

</form>
</body>
</html> 
 -->
<?php
//  print_num(10);
// function print_num($num){
// echo $num;
// if($num==5)
//   return;
// print_num(--$num);
// }
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET["stringname"])) {
 $save=$_GET["stringname"];

 $new="";

 $k=strlen($save);
 for($i=$k-1;$i>=0;$i--)
 {

   $new .= $save[$i];

 }
 if($save==$new)
 {
   echo "<br/>The string is a palindrome.";
 }
 else
 {
   echo "<br/>The string is not a palindrome.";
 }
}
?>
<html>
<body>
  <form action="<?php $_PHP_SELF?>" method="GET">
    Name: <input type="text" name="stringname" >
    <input type="submit" value="Submit">
  </form>
</body>
</html>
