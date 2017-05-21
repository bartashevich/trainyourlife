<?php

include ('../db.php');
include ('mail/mail.php');

$register_query = $db->prepare("CALL add_user(".$db->quote($_POST['full_name']).",".$db->quote($_POST['username']).",".$db->quote($_POST['email']).",".$db->quote(md5($_POST['password'])).", @result)");
$register_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

if($result['result'] == '0'){
    send_email($_POST['email'],$_POST['full_name'],'Welcome to your website',file_get_contents('http://trainyourlife.tk/lib/php/welcome_email_page.php?full_name='.urlencode($_POST['full_name'])));
}

echo $result['result'];