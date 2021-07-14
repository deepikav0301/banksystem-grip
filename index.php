<!DOCTYPE html>
<html>
<head>
  <title>GRIP Banking system</title>
  <script src="index1.js"></script>
  <link rel="stylesheet" href="index3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
        <header><ul>
            <li><a href="#home" id="link1" onclick="viewHome()">Home</a></li>
            <li><a href="#customers" id="link2" onclick="viewCustomers()">Customers</a></li>
            <li><a href="#transfer" id="link3" onclick="viewTransfer()">Transfer Money</a></li>
            <li><a href="#history" id="link4" onclick="viewHistory()">Transaction History</a></li>
            <li><a href="#contact" id="link5" onclick="viewContact()">Contact Us</a></li>
            <li style="float:right;margin-right:15px;margin-top:5px;"><img src="https://cassiopea-group.com/wp-content/uploads/2017/03/BB.png" alt="bankicon" width="40" height="40"></img></li>
        </ul>
      </header>
        <div style="margin-top: 55px;">

        <!--Home Page-->
        <div id="home" style="display: block;">
            <center><h1 style="font-size:50px;font-family:Georgia;background-image:linear-gradient(to right, rgba(50,0,0,0), rgb(67, 16, 90));">GRIP ONLINE BANKING SYSTEM</h1></center>
            <div class="row">
            <div class="column">
              <img src="https://www.yesbank.in/images/Covid_resolution_framework_banner.jpg" alt="homeimg1" style="width:100%">
            </div>
            <div class="column">
              <img src="https://www.yesbank.in/images/Credit-Card-Banner_502x316.jpg" alt="homeimg2" style="width:100%">
            </div>
            <div class="column">
              <img src="https://www.yesbank.in/images/Resolution_Plan_Banner_Credit%20Card.jpg" alt="homeimg3" style="width:100%">
            </div>
          </div>
            <p style="font-size:115%;color:white;background-color:rgba(0,0,255,0.7);margin-left:40px;margin-right:40px;border-radius:20px;padding:13px 13px;font-family:Arial, Helvetica, sans-serif;">
            <span style="font-size:138%;color:lightgreen;">About Us</span><br>
            The GRIP bank was founded on 7th September, 1906 by a group of eminent businessmen from Mumbai. The Bank was under private ownership and control till July 1969 when it was nationalised along with 13 other banks.

                Beginning with one office in Mumbai, with a paid-up capital of Rs.50 lakh and 50 employees, the Bank has made a rapid growth over the years and blossomed into a mighty institution with a strong national presence and sizable international operations. 
                In business volume, the Bank occupies a premier position among the nationalised banks.
                
                The Bank has over 5000 branches in India spread over all states/ union territories including specialized branches. These branches are controlled through 59 Zonal Offices and 10 NBG Offices. There are 60 branches/ offices and 5 Subsidaries and 1 joint venture abroad.
                <br><br>
                The Bank came out with its maiden public issue in 1997 and follow on Qualified Institutions Placement in February 2008.
                
                While firmly adhering to a policy of prudence and caution, the Bank has been in the forefront of introducing various innovative services and systems. Business has been conducted with the successful blend of traditional values and ethics and the most modern infrastructure. 
                The Bank has been the first among the nationalised banks to establish a fully computerised branch and ATM facility at the Max Branch at Mumbai way back in 1989. The Bank is also a Founder Member of SWIFT in India. It pioneered the introduction of the Health Code System in 1982, for evaluating/ rating its credit portfolio.
                
                Presently Bank has overseas presence in 18 foreign countries spread over 5 continents – with 52 offices including 4 Subsidiaries, 1 Representative Office and 1 Joint Venture, at key banking and financial centres viz., Tokyo, Singapore, Hong Kong, London, Paris and New York.</p>
        </div>
        <!--Transfer Money Page-->
        <div id="transfer" style="display: none;">
            <div class="container1">  
            <form id="transferform" action="transfermoney.php" method="post">
              <h3>Transfer Money</h3>
              <h4>Enter the details</h4>
              <fieldset>
                <input placeholder="Name of the Sender" type="text" id="fromname" name="fromname" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input placeholder="Account ID of the Sender" type="number" id="fromid" name="fromid" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input placeholder="Name of the Receiver" type="text" id="toname" name="toname" tabindex="3" required>
              </fieldset>
              <fieldset>
                <input placeholder="Account ID of the Receiver" type="number" id="toid" name="toid" tabindex="4" required>
              </fieldset>
              <fieldset>
                <input placeholder="Amount" type="number" id="amount" name="amount" tabindex="5" required>
              </fieldset><br><br>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send Money</button>
              </fieldset>
            </form>
          </div>
        </div>
        <!--Contact Us Page-->
        <div id="contact" style="display: none;">
        <div class="container_c">
          <img src="https://gartman.com/wp-content/uploads/2020/06/website-contact-us-icons-post-internet-page-concept-icon-five-paper-isolated-white-background-32678534.png" alt="contactus" style="width:145%;">
          <div class="content">
            <center>
            <h1 style="font-size:35px;">CONTACT US</h1>
            <h3>For all customers  (24 x 7)<br>Toll Free Number
                  <br><i class="fa fa-phone" style="font-size:18px"></i>  <span style="color:lightpink;font-size:86%;">1800 258 44 55</span>
                  <br><i class="fa fa-phone" style="font-size:18px"></i>  <span style="color:lightpink;font-size:86%;">1800 102 44 55</span><br><br>
                  Missed Call services<br>Balance Inquiry  :  <i class="fa fa-phone" style="font-size:18px"></i> <span style="color:lightpink;font-size:86%;"> 84680 01111</span><br>Mini Statement  :  
                  <i class="fa fa-phone" style="font-size:18px"></i>  <span style="color:lightpink;font-size:86%;">84680 01122</span></h3>
                <h1>Head office</h1>
                <h3>GRIP Bank</h3>
                <h4>Hope Colony
                <br>7th Floor, R.C. Dutt Road,
                <br>Vadodara-390 007, (Gujarat) India.
                <br><span style="color:yellow;font-size:89%;"><i class="fa fa-phone" style="font-size:18px"></i> : (0265) 2316792</span>
                <br><span style="color:yellow;font-size:89%;"><i class="fa fa-envelope"></i> : cs.ho@gripbank.com</h4></span></center>
          </div>
        </div>
        </div>
        <!--View Customers Page-->
        <div id="customers" style="display: none;">
            <center><h1>CUSTOMER DETAILS</h1></center>
            <?php
              $servername = "sql106.epizy.com";
              $username = "epiz_29133350";
              $password = "NayVb7UInKPNG";
              $dbname = "epiz_29133350_banksys";
              $conn = new mysqli($servername, $username, $password, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              $sql = "SELECT acc_id, customername, emailid, balance, phone_no FROM customers";
              $result = $conn->query($sql);
              //function to fill the text fields in transfer page when a customer is selected
              echo "<style>.button_c {
                background-color: #310731;
                color: white;
                padding: 8px 8px;
                text-align: center;
                display: inline-block;
                font-size: 10px;
                cursor: pointer;
              }</style>";
              echo "<script>function fillTextField(cname, cid) { viewTransfer();"; 
                echo "document.getElementById('fromname').value = cname ;";
                echo "document.getElementById('fromid').value = cid ;";
                echo "}</script>";
              if ($result->num_rows > 0) {
              // output data of each row from customers table
                echo "<center><table id='c_data' style='background-color:lightblue;'>";
                echo "<tr><th>ACCOUNT ID</th><th>NAME</th><th>EMAIL ID</th><th>BALANCE</th><th>PHONE NUMBER</th><th></th></tr>";
                while($row = $result->fetch_assoc()) {
                  $c_name = $row["customername"];
                  $c_id = $row["acc_id"];
                  echo "<tr><td>" . $row["acc_id"]. " </td><td>" . $row["customername"]. "</td><td> ". $row["emailid"]. "</td>";
                  echo "<td>". $row["balance"] . "</td><td> ". $row["phone_no"] ."</td><td><button class=\"button_c\" onclick='fillTextField(\"$c_name\",\"$c_id\")'>SELECT</button></td></tr>";
                }
              } else {
                echo "No results";
              }
              echo "</table></center>";
              $conn->close();
            ?>
            <br><br>
        </div>
        <!--Transaction History Page-->
        <div id="history" style="display: none;">
            <center><h1>TRANSACTION HISTORY</h1></center>
            <?php
              $servername = "sql106.epizy.com";
              $username = "epiz_29133350";
              $password = "NayVb7UInKPNG";
              $dbname = "epiz_29133350_banksys";
              $conn1 = new mysqli($servername, $username, $password, $dbname);
              // Check connection
              if ($conn1->connect_error) {
                die("Connection failed: " . $conn1->connect_error);
              }
              $sql1 = "SELECT from_id, from_name, to_id, to_name, amount, date_time FROM transfers";
              $result1 = $conn1->query($sql1);
              if ($result1->num_rows > 0) {
              //output data from each row of transfers table
                echo "<center><table id='c_data' style='background-color:lightgreen;'>";
                echo "<tr><th>SENDER ID</th><th>SENDER NAME</th><th>RECEIVER ID</th><th>RECEIVER NAME</th><th>AMOUNT TRANSFERRED</th><th>DATE AND TIME</th></tr>";
                while($row = $result1->fetch_assoc()) {
                  echo "<tr><td>" . $row["from_id"]. " </td><td>" . $row["from_name"]. "</td><td> ". $row["to_id"]. "</td><td>". $row["to_name"] . "</td><td> ". $row["amount"] . "</td><td> ". $row["date_time"] ."</td></tr>";
                }
              } else {
                echo "No results";
              }
              echo "</table></center>";
              $conn1->close();
            ?>
        </div>
        </div>
</body>
</html>