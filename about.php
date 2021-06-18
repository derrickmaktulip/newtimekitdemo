<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbers</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul class="navItems">
            <li><a href="..">Home</a></li>
            <li><a href="barbers.php">Our Barbers</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <div class="widget">
            <button class="dropdownButton">Schedule Now</button>
            <div class="dropdownContent">
                <div id="bookingjs"></div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
                <script src="https://cdn.timekit.io/booking-js/v2/booking.min.js" defer></script>
                <script>
                window.timekitBookingConfig = {
                app_key: 'live_widget_key_RXqzkyvafUHQ4fv3GOB3lZZArA5Tnjh5',
                project_id: 'c1ef5daa-0ee4-4301-ac95-746ba165938b'
                }
                </script>
            </div>
        </div>
    </nav>
    <main>
        <div class="banner">
            <div class="bannerText">
                <h1>About Us</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. See our shop below!</h2>

                <img src="images/shop.png">
                <img src="images/timekitLogo.png">
            </div>
        </div>
    </main>
</body>
</html>