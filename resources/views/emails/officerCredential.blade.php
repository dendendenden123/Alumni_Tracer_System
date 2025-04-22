<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Account Credentials</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
    <div style="background-color: #ffffff; padding: 30px; border-radius: 8px; max-width: 500px; margin: auto;">
        <h2 style="color: #333;">Hello Alumni Officer!</h2>
        <p style="font-size: 16px;">Your account has been successfully created. Here are your login credentials:</p>
        
        <p style="font-size: 16px;"><strong>Email:</strong> {{ $email }}</p>
        <p style="font-size: 16px;"><strong>Password:</strong> {{ $password }}</p>
        
        <p style="font-size: 14px; color: #666;">Please keep this information secure and change your password after your first login.</p>
        <br>
        <p style="font-size: 12px; color: #999;">If you have any questions or did not request this account, please contact the admin.</p>
    </div>
</body>
</html>