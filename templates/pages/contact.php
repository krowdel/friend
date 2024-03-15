<div class="page page-contact">
    <div class="title-page">Contact form </div>
    <section class="contact" id="kontakt">
        <div class="container">
            <form>
                <input type="text" name="firsname" placeholder="First name and last name">
                <input type="tel" name="phone" placeholder="Phone">
                <input type="email" name="email" placeholder="E-mail">
                <textarea name="message" placeholder="Message content"></textarea>
                <input type="send" value="Send message">
            </form>
        </div>
    </section>
</div>

<?php
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/OAuth.php";
    require "PHPMailer/src/SMTP.php";
    require "PHPMailer/src/Exception.php";
    // if(isset($_POST["send"])){
    if(isset($_POST["_wpcf7_unit_tag"])){

        $secret = '';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
        $result = json_decode($url, TRUE);
        if (true) {
        // if ($result['success'] == 1) {

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "bk.pl";
            $mail->Port = 465;
            $mail->IsHTML(true);
            $mail->Username = "noreply@example.pl";
            $mail->Password = "password";
            $mail->SetFrom($_POST['email']);

            $mail->Subject = "Wiadomość ze strony Soul.pl";

            $mail->Body .= "Imię i nazwisko: <strong>".$_POST['firsname']."</strong> <br />";
            $mail->Body .= "Adres e-mail <strong>".$_POST['email']."</strong>";
            $mail->Body .= "Telefon kontaktowy: <strong>".$_POST['phone']."</strong> <br />";
            $mail->Body .= "Wiadomość: <strong>".$_POST['message']."</strong>";

            $mail->IsHTML(true);
            $mail->CharSet = 'utf-8';
            $mail->AddAddress("kontakt@bk.pl");

            if(!$mail->Send()) { 
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo '<div class="alert-contact"><strong>Wiadomość została wysłana!</strong></div>';
            }
        }else{
            echo '<div class="alert-contact"><strong>Błędnie wypełnione pole reCAPTCHA</strong></div>';
        }
    }
?>