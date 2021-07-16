//= require jquery
//= require jquery_ujs
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbers2</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="../dist/booking.js"></script> -->
    <script type="text/javascript" src="https://cdn.timekit.io/booking-js/v2/booking.min.js"></script>
</head>
<body>
<nav>
<ul class="navItems">
            <li><a href="..">Home</a></li>
            <li><a href="barbers.php">Our Barbers</a></li>
            <li><a href="barbers2.php">New Booking Page</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>  
</nav>

    
<div class="widgets">


  <div id="bookingjs1">
    <script type="text/javascript">
   <script> 
      var widget1 = new TimekitBooking();
      widget1.init({
        el: '#bookingjs1',
        app_key: 'live_widget_key_RXqzkyvafUHQ4fv3GOB3lZZArA5Tnjh5',
        resources: [
          '8ab3b2cf-a155-4a9a-9591-0baee9f7bfdf'
        ],
        ui: {
          display_name: 'Azaan Wazir'
        },
        availability: {
        mode: 'roundrobin_random',
        length: '45 minutes',
        to: '4 weeks'
        }
       });
       </script>
    </script>
  </div>

  <div id="bookingjs2">
    <script type="text/javascript">
      var widget2 = new TimekitBooking();
      widget2.init({
        el: '#bookingjs2',
        app_key: 'live_widget_key_RXqzkyvafUHQ4fv3GOB3lZZArA5Tnjh5',
        resources: [
          'a16ecbd1-043e-4ec4-9000-4b1dee660164'
        ],
        ui: {
          display_name: 'Erdrick Kam'
        },
        availability: {
        mode: 'roundrobin_random',
        length: '45 minutes',
        to: '4 weeks'
        }
      });
    </script>
  </div>

  <div id="bookingjs3">
    <script type="text/javascript">
      var widget3 = new TimekitBooking();
      widget3.init({
        el: '#bookingjs3',
        app_key: 'live_widget_key_RXqzkyvafUHQ4fv3GOB3lZZArA5Tnjh5',
        resources: [
          'edbaaac0-53d6-45ad-a17f-ebe390946ac0'
        ],
        ui: {
          display_name: 'Wing Keung'
        },
        availability: {
        mode: 'roundrobin_random',
        length: '45 minutes',
        to: '4 weeks'
        }
      });
    </script>
  </div>
  </div>
</body>
</html>