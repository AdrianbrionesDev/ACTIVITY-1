<?php
    include_once 'config/setting-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body class="body1">
    <div class="container">
        <div class="box form-box">
    <h1>Enter OTP</h1>
    <form action="dashboard/admin/authentication//admin-class.php" method="post">
        <div class="field input">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token?>">
        </div>
        <div class="field input">
        <input type="number" name="otp" placeholder="Enter OTP" required><br>
        </div>
        <div class="field" id="btn">
        <button type="submit" name="btn-verify">VERIFY</button>
        </div>
    </form>
    </div>
    </div>


</body>
</html>