<!DOCTYPE html>
<html>
 <!-- Record the transaction and update the balance of the customers-->
<head>
    <title>Insert Page</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
</head>
 
<body>
    <?php
$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$from_name =  $_REQUEST['fromname'];
$from_id = $_REQUEST['fromid'];
$to_name =  $_REQUEST['toname'];
$to_id = $_REQUEST['toid'];
$amount = $_REQUEST['amount'];
echo "<div class='card'>
<div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>";
  
$sql = "INSERT INTO transfers (from_id, from_name, to_id, to_name, amount)
VALUES ('$from_id', '$from_name', '$to_id','$to_name','$amount')";
if ($conn->query($sql) === TRUE) {
  echo "<i class='checkmark'>✓</i></div><h1>Payment Successful!</h1>";
} else {
  echo "Error  " . $sql . "<br>" . $conn->error;
}

$sql1 = "UPDATE customers SET balance=(balance-$amount) WHERE acc_id=$from_id";

if ($conn->query($sql1) === TRUE) {
  echo "<p>Sender :  ". $from_name . "<br/>Receiver :  " . $to_name . "<br/>";
} else {
  echo "Error  " . $conn->error;
}

$sql2 = "UPDATE customers SET balance=(balance+$amount) WHERE acc_id=$to_id";

if ($conn->query($sql2) === TRUE) {
  echo "Amount transferred :  Rs. " .  $amount . "<br/><br/></p><h4><a href='index.php'>Back to Home Page</a></h4></div>";
} else {
  echo "Error " . $conn->error;
}
$conn->close();
?>
</body>
</html>
