<!DOCTYPE html>
<html>
<head>
    <title>Monthly Report</title>
    <link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="header">
    <h1>
        <div class="container" onclick="toggleNav(this)">
          <div class="bar1"></div><div class="bar2"></div><div class="bar3"></div>
        </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-briefcase"></i> My Business Manager
      <div  style="float: right; margin-right: 100px;">
        <i class="far fa-user"></i>&nbsp;&nbsp;<a class="logout" href="login.php">Logout</a>
      </div>
    </h1>
  </div>
    <div id="mySidenav" class="sidenav">
  <button class="dropdown-btn">Tasks<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="AddTask1.html">Schedule Task</a>
    <a href="TasksList.php">View Tasks</a>
  </div>
    <button class="dropdown-btn">Transactions<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="RecordTrans1.php">Record Transaction</a>
    <a href="TransactionLog.php">Transaction Log</a>
  </div>
    <button class="dropdown-btn">Taxes<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="FileTax1.php">File Task</a>
    <a href="TaxHistory.php">Tax History</a>
  </div>
    <button class="dropdown-btn">Products<i class="fa fa-caret-down"></i></button>
  <div class="dropdown-container">
    <a href="#">View Products</a>
  </div>
</div>
<script>
function toggleNav(x) {
      x.classList.toggle("change");
     if(document.getElementById("mySidenav").style.width === "320px")
        document.getElementById("mySidenav").style.width = "0px";
     else
        document.getElementById("mySidenav").style.width ="320px";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.height === "110px") {
  dropdownContent.style.height = "0px";
  }
  else {
  dropdownContent.style.height="110px";
  }
  });
}
</script>
    <h2><center>Monthly Report</center></h2>
    <table cellpadding="16px">
        <tr><th>S.No.</th><th>Month</th><th>No. of Customers</th><th>No. of Transactions</th><th>Revenue</th><th>Profits</th><th>Taxes</th></tr>

    <?php
    include_once 'dbConnection.php';
    $list = mysqli_query($con,"SELECT * FROM report") or die('Error');
  $c=1;
  while($row = mysqli_fetch_array($list)) {
  $month = $row['month'];
  $yr = $row['year'];
  $trans = $row['n_trans'];
  $cust = $row['n_cust'];
  $revenue = $row['t_revenue'];
  $profit = $row['t_profit'];
  $tax = $row['tax'];
  echo '<tr><td>'.$c++.'</td><td>'.$month.', '.$yr.'</td><td>'.$trans.'</td><td>'.$cust.'</td><td>'.$revenue.'</td><td>'.$profit.'</td><td>'.$tax.'</td>';
}
$c=0;
?>
</table>
<br><br>
<div align="center">
            <a href="home.html"><button class="btn">Home</button></a>
            <a href="FileTax1.php"><button class="submit">File Tax</button></a>
        </div>
        <div class="footer">
    <a class="footer" href="" style="margin-left: 80px;">About Us</a>
    <a class="footer" href="">Contact Us</a>
    <a class="footer" href="Feedback.html">Feedback</a>
    <i class="fab fa-reddit-alien" style="margin-right: 100px;"></i>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-facebook-f"></i>
</div>
</body>
</html>