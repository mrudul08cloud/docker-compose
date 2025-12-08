<?php
// Basic server info
$serverTime = date("Y-m-d H:i:s");
$serverIP   = $_SERVER['SERVER_ADDR'] ?? 'Unknown';
$clientIP   = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$status     = "Online";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1e1e1e;
            color: #e0e0e0;
            margin: 0;
            padding: 40px;
        }
        .container {
            max-width: 650px;
            margin: auto;
            background: #2d2d2d;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        h1 {
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
        }
        .info {
            padding: 15px;
            background: #242424;
            border-left: 5px solid #4CAF50;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .label {
            font-weight: bold;
            color: #79d8ff;
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🚀 PHP Service Status</h1>

    <div class="info">
        <span class="label">Status:</span>
        <span style="color: #4CAF50; font-weight:bold;">
            <?php echo $status; ?>
        </span>
    </div>

    <div class="info">
        <span class="label">Server Time:</span> <?php echo $serverTime; ?>
    </div>

    <div class="info">
        <span class="label">Server IP:</span> <?php echo $serverIP; ?>
    </div>

    <div class="info">
        <span class="label">Your IP:</span> <?php echo $clientIP; ?>
    </div>

    <div class="info">
        <span class="label">PHP Version:</span> <?php echo phpversion(); ?>
    </div>

    <footer>
        PHP Status Dashboard • script.php
    </footer>
</div>

</body>
</html>
