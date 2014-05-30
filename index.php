<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
<?php
?>
<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>India's leading Professors and Lecturers Network</h1>
  </div>
   
  <div data-role="main" class="ui-content">
      <ul data-role="listview" data-inset="true">
        <li data-role="list-divider">My Info</li>
        <li><a href="#staffhistory">Personal History</a></li>
        <li><a href="#leavedetails">Leave Details</a></li>
        <li data-role="list-divider">Student Info</li>
	<li><a href="#studenthistory">Student History</a></li>	
	<li><a href="attendance.html">Student Attendance</a></li>
	<li><a href="#studentmarks">Student Marks</a></li>
      </ul>  
  </div>

  <div data-role="footer">
    <h1>ProfsNet.in</h1>
  </div>
</div> 

<div data-role="page" id="studenthistory">
  <div data-role="header">
    <h1>Student History</h1>
    <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-icon-back ui-btn-icon-left ui-btn-icon-notext">Back</a>
  </div>

  <div data-role="main" class="ui-content">   
    <ul data-role="listview" data-inset="true">
      <li><a href="stuhispers.html">Personal Info</a></li>
      <li><a href="#">College Info</a></li>
      <li><a href="#">Placement Info</a></li>
    </ul>  
  </div>

  <div data-role="footer">
    <h1>ProfsNet.in</h1>
    
  </div>
</div> 

</body>
</html>
