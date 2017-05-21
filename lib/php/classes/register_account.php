<?php

include ('../db.php');

$register_query = $db->prepare("CALL add_user(".$db->quote($_POST['full_name']).",".$db->quote($_POST['username']).",".$db->quote($_POST['email']).",".$db->quote(md5($_POST['password'])).", @result)");
$register_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];