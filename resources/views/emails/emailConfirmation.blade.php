<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="background-color: #ffffff; padding: 30px; border-radius: 8px; max-width: 500px; margin: auto;">
        <h2 style="color: #333;">Hello!</h2>
        <p style="font-size: 16px;">Your email verification code is:</p>
        <h1 style="color: #0d6efd; font-size: 36px; text-align: center;">{{ $code }}</h1>
        <p style="font-size: 14px; color: #666;">Please enter this code to verify your email address.</p>
        <br>
        <p style="font-size: 12px; color: #999;">If you did not request this code, please ignore this email.</p>
    </div>
</body>
</html>