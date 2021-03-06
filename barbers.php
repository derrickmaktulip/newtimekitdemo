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
            <li><a href="barbers2.php">New Booking Page</a></li>
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
                <h1>Our Barbers</h1>
                <h2>We at Schnippets have spent time training our barbers to be the most creative and effective barbers. We promise nothing but the best.</h2>
            </div>
        </div>
        <div class="listSection">
        <h1 class="header">Our Barbers</h1>
            <ul class = "barberList">
                <?php
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, 'https://api.timekit.io/v2/resources');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_USERPWD, ":live_api_key_NuvN1bCG3Vv7la7vpPDYaqJDCOrg135g");
                curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                ));
            
                $output = curl_exec($ch);
            
                if ($output === FALSE) {
                    echo "cURL Error: " . curl_error($ch);
                };
                $data = json_decode($output,true);
                foreach ($data['data'] as $person) {
                    if (strcmp(substr($person['email'],0,9),"resource+")!=0) #this is to filter out resources that do not have emails, this will check the resoure's email and if it sees 'resource+' in the beginning, it will not display the resource on barbers.                   
                    {
                        echo "<li class='barber'>
                            <div 'barberText'>
                                <h3 class='barberName'>".$person['name']."</h3>".
                                "<button type='button' class='bookButton'><a href='https://book.timekit.io/".$person['first_name']."-bookings-companyname'>Book with ".$person['first_name']."</a></button>".
                            "</div>".
                        "<img src='";
                        if (isset( $person['image'])) {
                        echo $person['image']."' class='profilePic'>
                        </li>";
                            }  else {
                        echo "images/default.png' class='profilePic'>
                        </li>";
                            }
                    }
                }
                curl_close();
                ?>
            </ul>
        </div>
    </main>
</body>
</html>