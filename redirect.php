<?php
if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
if($name !=''&& $email !=''&& $sujet !=''&& $message !='')
{
//  To redirect form on a particular page

header("Location: http://localhost:8300/php_zet/");
}
else{
?><span><?php echo "Remplir form";?></span> <?php
}
}
?>