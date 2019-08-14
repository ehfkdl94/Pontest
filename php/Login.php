<?php
		$con = mysqli_connect("localhost", "ehfkdl94", "dpf459zb!@", "ehfkdl94");

		$uid = $_POST["uid"];
		$pw = $_POST["pw"];

		$statement = mysqli_prepare($con, "SELECT * FROM user WHERE uid = ? AND pw = ?");
		mysqli_stmt_bind_param($statement, "ss", $uid, $pw);
		mysqli_stmt_execute($statement);

		mysqli_stmt_store_result($statement);
		mysqli_stmt_bind_result($statement, $uid, $pw, $uname, $email, $phnum);

		$response = array();
		$response["success"] = false;

		while(mysqli_stmt_fetch($statement)){
			$response["success"] = true;
			$response["uid"] = $uid;
			$response["pw"] = $pw;
			$response["uname"] = $uname;
			$response["email"] = $email;
			$response["phnum"] = $phnum;
	}

	echo json_encode($response);
?>
