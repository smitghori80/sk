<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-weight: 500;
            font-family: Arial, sans-serif;
        }
        .btn {margin: 10px 0px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff !important;
            height: 78px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 600;
            background-image: linear-gradient(to right top, #021d68, #052579, #072d8b, #09369d, #093fb0) !important;
        }
        .btn:hover {
            text-decoration: none;
            opacity: .8;
        }
    </style>
</head>
<body style="margin:0;padding:0;">
<table role="presentation"
       style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
        <td align="center" style="padding:0;">
            <table role="presentation"
                   style="width:600px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                <tr style="border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;">
                    <td align="left" style="padding:10px 25px;background:#fff; display: flex; align-items: center;">
                        <span style="font-weight: bold; padding-top: 10px;"> Welcome to I-Kart Online Selling Platforms </span>
                    </td>
                </tr>
                <tr>
                    <td style="padding:36px 30px 42px 30px;">
                        <table role="presentation"
                               style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                            <tr>
                                <td style="padding:0 0 36px 0;color:#153643;">
                                    <p style="font-weight:bold;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                        Hello {{$sellerAccount->company_name}},</h1>
                                    </p>
                                    <p
                                        style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                        We've received a request to verify your account details.
                                    </p>
                                    <p
                                        style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                        Congratulations you are now eligible seller on I-Kart Online Selling Platforms.
                                    </p>
                                    <p
                                        style="margin:10px 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                        Your are now login your seller account using this link:
                                        <a href="http://127.0.0.1:8000/seller/login">I - Kart Seller Login</a>
                                    </p>

                                    <p style="margin:10px 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                        Thank
                                        you, </p>
                                    <p style="margin:0 0 12px 0;font-size:14px;font-family:Arial,sans-serif;">
                                        Welcome to I-Kart Online Selling Platforms </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
