<?php
include "function.php";

$background_color="#fff";

if(isset($_POST['send'])){

//var_dump($_POST);
   $background_color = select_bg($_POST['background']);

  // var_dump($_POST['background']);
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: <?php echo $background_color; ?> ">

<?php //if(is_user_logged_in()): ?>
<!--<p>welcome</p>-->
<!---->
<?php //else: ?>
<!---->
<!--    <a href="#">loggin</a>-->
<?php //endif; ?>

<?php
////$a=false;
////
////switch ($a){
////
////    case true:
////
////        echo 'true';
////break;
////
////    case false:
////        echo 'false';
////        break;
////    default:
////
////        echo 'default';
////        break;
//
//}



?>

<form action=" " method="post">

    <input type="radio" name="background" value="blue">blue
    <input type="radio" name="background" value="red">red
    <input type="radio" name="background" value="green">green

    <input type="submit" name="send" value="send">
</form>

</body>
</html>