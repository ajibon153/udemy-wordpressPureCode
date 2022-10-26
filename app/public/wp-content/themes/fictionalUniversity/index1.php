<?php

function myFirstFunction(){
  echo 2+2;
}
// myFirstFunction()
?>

<h2><?= bloginfo('name'); ?></h2>
<p><?= bloginfo('description'); ?></p>

<?php 
$names = array('Ai','ibon','Aii');
$count = 0;
echo count($names);
while($count < count($names)){
  echo "<li>Hi, my name is $names[$count]</li>";
  $count++;
}

?>