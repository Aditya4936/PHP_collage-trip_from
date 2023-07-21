<!-- string -->

<?php
$str = "this is a srting <br>";
echo $str;
$lenn= strlen($str) ;
echo "This length of string" , $lenn ."thank you <br> ";

echo "The word count of string" , str_word_count($str) ." thank you <br> ";
echo "This reversed string" , strrev($str) ." thank you <br> ";
echo "This search in  string" , strpos($str,"a") . ". thank you <br> ";
echo "This replace in  string is " , str_replace("a","aaaaaaa",$str) . ". thank you <br> ";


// echo $lenn;
?>