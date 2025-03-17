<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ContactFormController extends Controller
{
    public function index(Request $request)
    {

    try {
        $mail = new PHPMailer(true);

        $name    = $request->input('name');
        $email   = $request->input('email');
        $phone   = $request->input('phone');
        $message = $request->input('message');

        // Configuraciones del servidor SMTP
        $mail->SMTPDebug  = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cetra-dev@dualstudio.space';
        $mail->Password   = '12Qwas<zx,.-';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = '465';

        $mail->setFrom('cetra-dev@dualstudio.space', 'Cetra Contact');
        $mail->addAddress('cetra-dev@dualstudio.space', 'Cetra Contact');
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        $mail->isHTML(true);
        $mail->Subject = "Contact CETRA";
        $mail->Body    ="Message of website CETRA<br>
                        <p>Name: $name</p>
                        <p>Email: $email</p>
                        <p>Phone: $phone</p>
                        <p>Message: $message</p>";
        $mail->AltBody ="Name: $name\n
                        Email: $email\n
                        Phone: $phone\n
                        Message: $message";
        $mail->CharSet   = "UTF-8";
        $mail->Encoding  = "quoted-printable";
        $mail->send();
        
            return response()->json([
                'statu'   => 'success',
                'message' => 'Message sent',
            ], 200);
        }
        catch (Exception $e) {
            return response()->json([
                'statu'   => 'error',
                'message' => 'Server error',
                'details' => $e->getMessage(),
            ],500);
        }
    }
}

