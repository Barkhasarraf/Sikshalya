<?php  

if (isset($_POST['email']) &&
    isset($_POST['full_name']))
    {

    include "../DB_connection.php";
	
	$email     = $_POST['email'];
	$full_name = $_POST['full_name'];
	

	if (empty($email)) {
		$em  = "Email is required";
		header("Location: ../home.php?error=$em#contact");
		exit;
	}else if (empty($full_name)) {
		$em  = "Full name is required";
		header("Location: ../home.php?error=$em#contact");
		exit;
	
	}else {
       $sql  = "INSERT INTO
                 message (sender_full_name, sender_email)
                 VALUES(?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$full_name, $email]);
        $sm = "Message sent successfully";
        header("Location: ../home.php?success=$sm#contact");
        exit;
	}

}else{
	header("Location: ../login.php");
	exit;
}