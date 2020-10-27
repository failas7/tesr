<?php
header('Access-Control-Allow-Origin: http://jakleaf.lk');
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master-2/src/Exception.php';
require './PHPMailer-master-2/src/PHPMailer.php';
require './PHPMailer-master-2/src/SMTP.php';

if (array_key_exists('name', $_POST) && array_key_exists('mobile', $_POST) && array_key_exists('message', $_POST)) {
  //get post data
  $senderName = strip_tags(trim($_POST["name"]));
  $senderMobile = strip_tags(trim($_POST["mobile"]));
  $senderMessage = strip_tags(trim($_POST["message"]));
  //
  if ($senderName!="" && $senderMobile!="" && $senderMessage!="") {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    try {
      $mail->SMTPDebug  = 1;
      $mail->SMTPAuth   = TRUE;
      $mail->SMTPSecure = "tls";
      $mail->Port       = 587;
      $mail->Host       = "smtp.gmail.com";
      $mail->Username   = "mohamedfilas7@gmail.com";
      $mail->Password   = "rpvhokiuytysgoxj";

      $mail->IsHTML(true);
      $mail->AddAddress("mohamedfilas7@gmail.com", "JakLeaf");

      $mail->SetFrom('mohamedfilas7@gmail.com', 'JakLeaf Lanka');
      $mail->Subject = "Customer Feedback From $senderName";

      $content = '<!doctype html>
      <html>
      <head>
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>WeCre8</title>
        <style>
        @media only screen and (max-width: 620px) {
          table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
          }
          table[class=body] p,
                table[class=body] ul,
                table[class=body] ol,
                table[class=body] td,
                table[class=body] span,
                table[class=body] a {
            font-size: 16px !important;
          }
          table[class=body] .wrapper,
                table[class=body] .article {
            padding: 10px !important;
          }
          table[class=body] .content {
            padding: 0 !important;
          }
          table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
          }
          table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
          }
          table[class=body] .btn table {
            width: 100% !important;
          }
          table[class=body] .btn a {
            width: 100% !important;
          }
          table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
          }
        }
        @media all {
          .ExternalClass {
            width: 100%;
          }
          .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
            line-height: 100%;
          }
          .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
          }
          #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
          }
          .btn-primary table td:hover {
            background-color: #34495e !important;
          }
          .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
          }
        }
        </style>
      </head>
      <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
        <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
          <tr>
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
              <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">
                <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
                  <tr>
                    <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                        <tr>
                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi JakLeaf,</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Client Name  : ' . $senderName . '</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Mobile : ' . $senderMobile . '</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Meassage : ' . $senderMessage . '</p>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>
            </td>
            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>';

      $mail->MsgHTML($content);
      if (!$mail->Send()) {
        $arrResult = array('message' => 'Somthing went Wrong while sending Email! Try again Shortly...', 'result' => 0);
        echo json_encode($arrResult);
      } else {
        $arrResult = array('message' => 'we will review your query and get back to you as soon as possible... Have a nice day!', 'result' => 1);
        echo json_encode($arrResult);
      }
    } catch (Exception $e) {
      $arrResult = array('message' => 'Message could not be sent! Try again Shortly...', 'result' => 0);
      echo json_encode($arrResult);
    }
  } else {
    $arrResult = array('message' => 'Fill all required fields', 'result' => 0);
    echo json_encode($arrResult);
  }
} else {
  $arrResult = array('message' => 'Fill all required fields', 'result' => 0);
  echo json_encode($arrResult);
}
