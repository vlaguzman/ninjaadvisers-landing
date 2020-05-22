


                         <?php

    require("archivosformulario/class.phpmailer.php");
    require("archivosformulario/class.smtp.php");

    $nombre = $_POST['nombre'];

    $email = $_POST['email'];
    $celular = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $asunto = $_POST['asunto'];
    $base = "admin@ninjaadvisers.tech"; 


   $fecha=getdate();

    $mail = new PHPMailer();

    $mail->IsSMTP();                                      // Set mailer
 
            




        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.zoho.com";
        $mail->Port = 465;
        $mail->Username = "admin@ninjaadvisers.tech";
        $mail->Password = "HagamosLuc4!";
        $mail->SetFrom("admin@ninjaadvisers.tech");
        $mail->From = $base;
        $mail->FromName = $nombre;
        //$mail->AddAddress=($email);        

         $mail->AddAddress($base);   
    
    
        $mail->Subject = 'Nuevo Lead';

          
    $mail->CharSet="utf-8";

   $mail->Body     =  "Nombre: $nombre \n".
                         "Correo: $email \n". "Teléfono: $celular \n". "Asunto: $asunto \n".
                           "Descripción: $mensaje \n";




if(!$mail->Send()) // Now we send the email and check if it was send or not.
{
   echo 'Message was not sent.';
   echo 'Mailer error: ' . $mail->ErrorInfo;
}
else
{
    
        
echo "Message Sent OK\n";

$mail2 = new PHPMailer();

    $mail2->IsSMTP();                                      // Set mailer
 
            




        $mail2->SMTPAuth = true;
        $mail2->SMTPSecure = "ssl";
        $mail2->Host = "smtp.zoho.com";
        $mail2->Port = 465;
        $mail2->Username = "admin@ninjaadvisers.tech";
        $mail2->Password = "HagamosLuc4!";
        $mail2->SetFrom("admin@ninjaadvisers.tech");
        $mail2->From = "admin@ninjaadvisers.tech";
        $mail2->FromName = $nombre;
        //$mail->AddAddress=($email);        

         $mail2->AddAddress($email);   
    
    
        $mail2->Subject = 'Nuevo Lead';

          
    $mail2->CharSet="utf-8";

   $mail2->Body     =  "Hola: $nombre \n".
                         "Tu mensaje ha sido recibido, pronto nos contactaremos contigo";

$mail2->Send();

        echo '<script language="javascript">window.location="https://mosscolombia.com.co/test/examples/index.html#formulario"</script>';

}

       


?>
