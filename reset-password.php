<?php
    include_once 'config/setting-config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>

    <div class="container">

        <div class="form-section" id="reset-password-section">
            <h1>RESET PASSWORD</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">

                <input type="password" name="new_password" placeholder="Enter new password" required><br>
                <input type="password" name="confirm_password" placeholder="Confirm new password" required><br>

                <button type="submit" name="btn-reset-password">RESET PASSWORD</button>
            </form>

            <a href="index.php" class="forgot-password-link">Back to Sign In</a>
        </div>

    </div>

</body>
</html>
