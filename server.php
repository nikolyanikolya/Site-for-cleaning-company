<?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    if($_POST['form_submission']){
        $errors = array(); // контейнер для ошибок
        // проверяем корректность полей
        if($_POST['fio'] == "") $errors[] = "Поле 'Ваше имя' не заполнено!";
        if($_POST['mail'] == "") $errors[] = "Поле 'Почта' не заполнено!";
        if($_POST['phone'] == "") $errors[] = "Поле 'Телефон' не заполнено!";
        if(empty($errors)){
            $to = "nickigna610@gmail.com";
            $topic = "Заявка на уборку";
            $fio=trim(urldecode(htmlspecialchars($_POST['fio'])));
            $mail=trim(urldecode(htmlspecialchars($_POST['mail'])));
            $phone=trim(urldecode(htmlspecialchars($_POST['phone'])));
            $data = "ФИО:".$fio."<br/>";
            $data .= "E-mail: ".$mail."<br/>";
            $data .= "Телефон: ".$phone."<br/>";
            $headers= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
            $headers .= 'To: Николай <nickigna610@gmail.com>' . "\r\n"; // Свое имя и email
            $headers .= 'From: '  . $fio . '<' . $mail . '>' . "\r\n";
            echo $fio;
            echo "<br/>";
            echo $mail;
            echo "<br/>"
            echo $phone;
            if (mail($to, $topic, $data, $headers)){
                echo "сообщение успешно отправлено";
            } 
            else {
                echo "при отправке сообщения возникли ошибки";
            }
        }
        else{
            $msg_box = "";
            foreach($errors as $one_error){
                 $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
            }
            echo $msg_box;
        }
    }
?>    