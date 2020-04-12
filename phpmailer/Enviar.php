
<?php

         use phpmailer\phpmailer\PHPMailer;
         use phpmailer\phpmailer\Exception;
        
        require 'phpmailer/Exception.php';
        require 'phpmailer/PHPmailer.php';
        require 'phpmailer/SMTP.php';


        //variables para los campos de texto 
        $nombre= $_POST["nombre"]; 
        $telefono=$_POST["telefono"]; 
        $mail=$_POST["correo"]; 
        $mensaje= $_POST["comentario"]; 

        var_dump($_POST);

            $correo= "nombre".$nombre ."Correo:".$mail ."Telefono:".$telefono ."Mensaje:".$mensaje;
            
            $mail = new PHPMailer;                             
            //configuracion de servidor 
            $mail->SMTPDebug = 0;                                 // Observar Errores 
            $mail->isSMTP();                                      // Protocolo para enviar 
            $mail->Host = 'smtp.gmail.com';                       // servicio de correo  que se va utilizar 
            $mail->SMTPAuth = true;                               // 
            $mail->Username = 'aldair.uaem@gmail.com';          // correo desde donde se va enviar el correo 
            $mail->Password = 'kiderzom05';                      // contraseña 
            $mail->SMTPSecure = 'tls';                            // 
            $mail->Port = 587;                                    // 
            //Recipients
            $mail->setFrom('aldair.uaem@gmail.com', 'Aldair');  // desde donde se va enviar 
            $mail->addAddress('aldair.uaem@gmail.com');        // a quien se le va enviar el correo 
            //Contenido para  Permitir hacer HTML
            $mail->isHTML(true);                                  
            $mail->Subject = 'Asunto muy importante';
            $mail->Body    = 
            " 
            <html xmlns='http://www.w3.org/1999/xhtml'>
            <head>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                <title>CORREO CONECTADO</title>
               
                <body style='margin: 0; padding: 0;'>
                        <table width='100%' bgcolor='#ffffff' style='border:1px solid #CCCCCC; color: #696969; border-collapse: collapse; padding:15px 10px 20px 10px; margin: 5px 0;'>
                <tr>
         

                            <table align='left' border='0' cellpadding='0' cellspacing='0' width='100%'>
							            <tbody>
								            <tr>
								            	<td align='left' valign='top' bgcolor='d1ae85' style='padding:18px 20px 10px 20px;color:#FFFFFF; font-family:Arial, Helvetica, sans-serif;font-weight:normal; font-size:14px;'>Nombre:<strong>$nombre</strong><td>
                                                </td>
                                                <td align='left' valign='top' bgcolor='d1ae85' style='padding:18px 20px 10px 20px;color:#FFFFFF;font-family:Arial, Helvetica, sans-serif;font-weight:normal;font-size:14px;'><strong>$nombre</strong><td>
                                                </td>
                                                <td align='left' valign='top' bgcolor='d1ae85' style='padding:18px 20px 10px 20px;color:#FFFFFF; font-family:Arial, Helvetica, sans-serif;font-weight:normal; font-size:14px;'>Telefono:<strong>$telefono</strong><td>
                                                </td>
                                                <td align='left' valign='top' bgcolor='d1ae85' style='padding:18px 20px 10px 20px;color:#FFFFFF; font-family:Arial, Helvetica, sans-serif;font-weight:normal; font-size:14px;'>Mensaje:<strong>$mensaje</strong><td>
                                                </td>
							                </tr>
							            </tr>
							            </tbody>
						    </table>
                        
                            <table align='center' border='0' cellpadding='0' cellspacing='0' height='176' width='100% padding: 20px'>
							        <tbody>
								        <tr>
									        <td bgcolor='d1ae85' style='display:block; padding-bottom:15px; font-size:12px; font-family:Helvetica, Arial, sans-serif; color:#777777;' valign='top'>
										        <div style='text-align: justify; padding:20px; color:#fff;'>
											Este mensaje fue enviado a tu email por ser cliente o suscriptor de nuestra empresa y haber indicado expresamente que deseas que te comuniquemos nuestras novedades y promociones. Nuestra empresa nunca te mandará correos no solicitados ni con otros fines distintos al indicado. Nuestra empresa cumple las normativas para la lucha activa contra el correo no deseado (spam). Si no quieres recibir más emails, puedes darte de baja aquí: cancelar tu suscripción.<br />
											
											<br />
											<br />
											&nbsp;</div>
										
										<br />
										&nbsp;</td>
								</tr>
							</tbody>
						</table>


                </tr>
            </table>
        </body>
            
    </head>
<html>    
            
            
            
            
            ";
            $exito = $mail->Send();

        if($exito){ 
            
            echo "El correo fue enviado correctamente."; 
        }
            else{
             echo "Hubo un problema. Contacta a un administrador."; 
            } 
?>