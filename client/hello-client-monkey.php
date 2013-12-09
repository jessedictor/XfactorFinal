<?php
    require '../Services/Twilio.php';

 $accountSid = "AC9d88cef84b9bc3fbc141d7140241ebcb";
 $authToken = "a2160cf3eba8b745cd07db2ac22cf9c5";

$capability = new Services_Twilio_Capability($accountSid, $authToken);
$capability->allowClientOutgoing('APabe7650f654fc34655fc81ae71caa3ff');
$token = $capability->generateToken();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Hello Client Monkey 1</title>
    <script type="text/javascript"
      src="//static.twilio.com/libs/twiliojs/1.1/twilio.min.js"></script>
    <script type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
    </script>
    <link href="http://static0.twilio.com/packages/quickstart/client.css"
      type="text/css" rel="stylesheet" />
    <script type="text/javascript">

      Twilio.Device.setup("<?php echo $token; ?>");

      Twilio.Device.ready(function (device) {
        $("#log").text("Ready");
      });

      Twilio.Device.error(function (error) {
        $("#log").text("Error: " + error.message);
      });

      Twilio.Device.connect(function (conn) {
        $("#log").text("Successfully established call");
      });

      function call() {
        Twilio.Device.connect();
      }
    </script>
  </head>
  <body>
    <button class="call" onclick="call();">
      Call
    </button>

    <div id="log">Loading pigeons...</div>
  </body>
</html>
