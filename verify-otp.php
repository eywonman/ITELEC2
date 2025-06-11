<?php
   include_once 'config/setting-config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="src/css/style.css"> 
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Enter OTP</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
                <input type="text" name="otp" placeholder="Enter OTP" maxlength="6" required pattern="\d{6}" title="6 digit OTP" autocomplete="off" /><br />
                <button type="submit" name="btn-verify">VERIFY</button>
            </form>
        </div>
    </div>
</body>
</html>
