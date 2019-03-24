<?php
require_once"bootstrap.php";

if(isset($_POST['register'])) {
	   
	   if($_POST['password']!=$_POST['password_confirmation']){
	   	notification("Password dosen't match",'danger');
	   	redirect('register');

	   }

		$name=$_POST['name'];
		$email=$_POST['email'];
		$bloodgroup=$_POST['blood'];
		$mobile=$_POST['mobile'];

		$district=$_POST['district'];
		$thana=$_POST['thana'];
		$password=$_POST['password'];
		$password=password_hash($password, PASSWORD_DEFAULT);
		$image=$_FILES['image'];
		$token=md5($email);

		
		if(isset($image) ){
				$imagename=$_FILES['image']['name'];
				$tmp_file=$_FILES['image']['tmp_name'];

				$filepart=explode(".", $imagename);
				$extension=end($filepart);

				$imagenewName=uniqid()."_image".rand().time().$name.".".$extension;

				$file_info="uploads/".$imagenewName;

				move_uploaded_file($tmp_file, $file_info);




		}

		else{

			$file_info="default.png";


		}


		$query="INSERT INTO users (name,email,blood,district,thana,password,image,mobile,mail_token) values(:name,:email,:blood,:district,:thana,:password,:image,:mobile,:token) ";
		$stmt=$connect->prepare($query);

		$stmt->bindParam(":name",$name);
		$stmt->bindParam(":email",$email);
		$stmt->bindParam(":blood",$bloodgroup);
		$stmt->bindParam(":district",$district);
		$stmt->bindParam(":thana",$thana);
		$stmt->bindParam(":password",$password);
		$stmt->bindParam(":image",$file_info);
		$stmt->bindParam(":mobile",$mobile);
		$stmt->bindParam(":token",$token);
		$result=$stmt->execute();
		if($result==true){


						$mail = new PHPMailer\PHPMailer\ PHPMailer();

			try {
			    //Server settings
			    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
			    $mail->isSMTP();                                            // Set mailer to use SMTP
			    $mail->Host       = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			    $mail->Username   = '922a6ab690b6e1';                     // SMTP username
			    $mail->Password   = 'e78e8fa9f7aeaf';                               // SMTP password
			    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
			    $mail->Port       = 465  ;                                    // TCP port to connect to

			    //Recipients
			    $mail->setFrom('from@example.com', 'Mailer');
			    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			    $mail->addAddress('ellen@example.com');               // Name is optional
			    $mail->addReplyTo('info@example.com', 'Information');
			    $mail->addCC('cc@example.com');
			    $mail->addBCC('bcc@example.com');

			    // Attachments
			    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

			    // Content
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = 'Here is the subject';
			    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
			    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			    $mail->send();
			    echo 'Message has been sent';
			} catch (Exception $e) {
			    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}






			notification('Thanks to become a member',"success");
			redirect('login');
		}



									
}


?>