 <?php
     			$name=$_POST['name'];
		           			$log=$_POST['mail'];
		           			
		           			$con=$_POST['con'];
				 			require_once 'PHPMailer-master/src/PHPMailer.php';
					  		  require_once 'PHPMailer-master/src/Exception.php';
					  		  require_once 'PHPMailer-master/src/SMTP.php';
						  
						  $subject="Exposit Contact";
						  $msg="Hi, My Name is ".$name."<br/>Email: ".$log."<br/>Message: ".$con;
						   $to="expositarvr@gmail.com";

						  $mail = new PHPMailer\PHPMailer\PHPMailer(true);                      // Passing `true` enables exceptions

				    //Server settings
				    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
				    $mail->isSMTP();                                      // Set mailer to use SMTP
				    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
				    $mail->SMTPAuth = true;                               // Enable SMTP authentication
				    $mail->Username = 'sbhumi921@gmail.com';                 // SMTP username
				    $mail->Password = 'bhumi@123';                           // SMTP password
				    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				    $mail->Port = 587;                                    // TCP port to connect to

				    //Recipients
				    $mail->setFrom('sbhumi921@gmail.com');

				    $mail->addAddress($to);

				     $mail->isHTML(true);                                  // Set email format to HTML
				    $mail->Subject = $subject;
				    $mail->Body    = $msg;

				    if(!$mail->send()) {
				    echo 'Message could not be sent.';
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				     
				}
				 else {
				   echo "success";
				   header("location:pricing.php");
				   
				 }
				
           ?>