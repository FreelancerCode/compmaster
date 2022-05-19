<?php
$to = "krd.comp.master@mail.ru";
$tema = "Help me Master";
$message = "Имя пользователя: ".$_POST['name']."<br>";
// $message .= "Фамилия: ".$_POST['familija']."<br>";
$message .= "Почта клиента: ".$_POST['email']."<br>";
$message .= "Телефон: ".$_POST['phone']."<br>";
// $message .= "Комментарий к письму: ".$_POST['message']."<br>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($to, $tema, $message, $headers);
	echo '<script type="text/javascript"> setTimeout(\'location.replace("thanks.html")\'); </script> '; 
?>

