<br />
<b>Fatal error</b>:  Uncaught PHPMailer\PHPMailer\Exception: Could not instantiate mail function. in /var/www/html/libreriaSoftware/controlador/PHPMailer/src/PHPMailer.php:1805
Stack trace:
#0 /var/www/html/libreriaSoftware/controlador/PHPMailer/src/PHPMailer.php(1603): PHPMailer\PHPMailer\PHPMailer-&gt;mailSend()
#1 /var/www/html/libreriaSoftware/controlador/PHPMailer/src/PHPMailer.php(1437): PHPMailer\PHPMailer\PHPMailer-&gt;postSend()
#2 /var/www/html/libreriaSoftware/controlador/EnviarCorreos.php(291): PHPMailer\PHPMailer\PHPMailer-&gt;send()
#3 /var/www/html/libreriaSoftware/modelo/daos/ClienteDAO.php(34): enviarCorreo-&gt;enviarMensaje()
#4 /var/www/html/libreriaSoftware/controlador/ControladorCliente.php(12): ClienteDAO-&gt;agregarRegistroPlataforma()
#5 /var/www/html/libreriaSoftware/controlador/registroPost.php(26): ControladorCliente-&gt;agregarRegistroPlataforma()
#6 {main}
  thrown in <b>/var/www/html/libreriaSoftware/controlador/PHPMailer/src/PHPMailer.php</b> on line <b>1805</b><br />