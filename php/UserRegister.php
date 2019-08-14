<?php
    $con = mysqli_connect('localhost', 'ehfkdl94', 'dpf459zb!@', 'ehfkdl94');
     //안드로이드 앱으로부터 아래 값들을 받음
     $uid = $_POST["userID"];
     $pw = $_POST["userPassword"];
     $uname =  $_POST["userGender"];
     $email = $_POST["userEmail"];
     $phnum = $_POST["userPhonenumber"];
     //insert 쿼리문을 실행함
     $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?, ?, ?, ?, ?)");
     mysqli_stmt_bind_param($statement, "sssss", $uid, $pw, $uname, $email, $phnum);
     mysqli_stmt_execute($statement);
     $response = array();
     $response["success"] = true;
     //회원 가입 성공을 알려주기 위한 부분임
     echo json_encode($response);
?>
