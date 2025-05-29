<?php
    include_once 'config/setting-config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="src/css/style.css" />
</head>
<body>

    <div class="container">

        <div class="form-section" id="forgot-password-section">
            <h1>FORGOT PASSWORD</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>" />
                
                <input type="email" name="email" placeholder="Enter your email" required /><br />
                
                <button type="submit" name="btn-forgot-password">SEND RESET OTP</button>
            </form>

            <a href="index.php" class="forgot-password-link">Back to Sign In</a>
        </div>

    </div>

</body>
</html>
