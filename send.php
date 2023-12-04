<?php
$fio = $_POST['fio'];
$phone = $_POST['phone'];
$fio = htmlspecialchars($fio);
$phone = htmlspecialchars($phone);
$fio = urldecode($fio);
$email = urldecode($phone);
$fio = trim($fio);
$phone = trim($phone);
//echo $fio;
//echo "<br>";
//echo $phone;
if (mail("lopesdenis@mail.ru", "Заявка с сайта", "ФИО:".$fio.". Телефон: ".$phone ,"From: video@zakaz-videografa.ru \r\n"))
 {     echo "<p style='font-size: 55px;'>сообщение успешно отправлено </p>"; 
      
echo "<p style='text-align:center;'><button style='width:600px;height:200px;font-size:55px;'><a href='https://www.zakaz-videografa.ru'>Вернуться на сайт</a></button></p>";
} else { 
    echo "<p style='font-size: 55px;'>при отправке сообщения возникли ошибки</p>";
}?>