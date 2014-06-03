<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile-1.4.2.css">
<!link rel="stylesheet" href="prof.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
<?php
echo "Balaji";
?>
<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>India's leading Professors and Lecturers Support Desk</h1>
  </div>
   
  <div data-role="main" class="ui-content">
	   <ul data-role="listview" data-inset="true">
			<li data-role="list-divider">My Info</li>
        	<li><a href="#">
            	<img src="images/Teacher64.png" class="ui-li-thumb">
            	<h2>My Data</h2>
                <p>Personal, University information</p>                
            </a></li>
        	<li><a href="#">
            	<img src="images/leave64.png" class="ui-li-thumb">
            	<h2>Leave Data</h2>
                <p>Leave, Permission Details</p>
            </a></li>
			<li data-role="list-divider">Student Info</li>
        	<li><a href="#studenthistory">
            	<img src="images/student64.png" class="ui-li-thumb">
            	<h2>Student Info</h2>
                <p>Enter Student Personal History</p>
            </a></li>	
			<li><a href="attendance.html">
            	<img src="images/attendance64.png" class="ui-li-thumb">
            	<h2>Student Attendance</h2>
                <p>Daily Attendance of Students</p>
            </a></li>
			<li><a href="#">
            	<img src="images/exam64.png" class="ui-li-thumb">
            	<h2>Exam Marks</h2>
                <p>Enter Student Marks</p>
            </a></li>
        </ul>  
  <div data-role="footer">
    <h1>ProfsDesk.com</h1>
  </div>
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
    <h1>ProfsDesk.com</h1>    
  </div>
</div> 

</body>
</html>
