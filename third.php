<?php


if(isset($_POST['color'])) {
$name = $_POST['color'];
$x = 0;
echo "You chose the following color(s): <br>";
foreach (len($name) > 0){
$x++;
}} // end brace for if(isset

else {
$x++;
echo "You did not choose a color.";

}
echo $x;

?>