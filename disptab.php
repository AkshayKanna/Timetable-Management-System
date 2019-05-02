<?php $db = mysqli_connect('localhost','root','','timetable');
?>
<html>
<head>
<style type="text/css">
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
	align: center;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tr:nth-child(odd) {
    background-color: #ffffff;
}
select {
        width: 150px;
        margin: 10px;
		color:#aaa;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    } 
	option:not(first-child) {
        color: #000;
    }
</style>
<link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="aabbcc">
<div id="main">
  <div class="container">
    <nav>
      <div class="nav-fostrap">
        <ul>
          <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
          <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
		  <li><a></a></li><li><a></a></li><li><a></a></li>
		  <li><a></a></li>
          <li><a href="index.php">Back to Home</a></li>
          <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
          <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
		  <li><a></a></li><li><a></a></li><li><a></a></li>
		  <li><a></a></li>
        </ul>
      </div>
<h3> Page to display the TimeTable </h3>
<form method="POST">
<select name="listtt">
<?php
$sqlq = "show tables";
$res = mysqli_query($db, $sqlq);
while($tables = mysqli_fetch_array($res)) { 
echo '<option value="'.$tables['Tables_in_timetable'].'">'.$tables['Tables_in_timetable'].'</option>';
	}
?>
</select>
<button type="submit" name="select"><b>Select TimeTable</b></h4></button>
<?php 
if(isset($_POST['select'])){
$selected = $_POST['listtt'];
$query="select * from $selected";
$result=mysqli_query($db,$query);
?>
<table border="1" align="center" width="80%">
	<thead>
		<tr>
    <th>Day</th>
    <th>08:40-09:30</th>
    <th>09:30-10:20</th>
    <th>10:40-11:30</th>
    <th>11:30-12:20</th>
    <th>01:10-02:00</th>
    <th>02:00-02:50</th>
    <th>03:10-04:00</th>
    <th>04:00-04:50</th>
  </tr> 
  </thead>
  <tbody>
<?php while($row = mysqli_fetch_array($result)) { 
echo '<tr>
	<td>'.$row['day'].'</td>
	<td>'.$row['hron'].'</td>
	<td>'.$row['hrtw'].'</td>
	<td>'.$row['hrth'].'</td>
	<td>'.$row['hrfo'].'</td>
	<td>'.$row['hrfi'].'</td>
	<td>'.$row['hrsi'].'</td>
	<td>'.$row['hrse'].'</td>
	<td>'.$row['hrei'].'</td>
</tr>';
} ?>
<?php mysqli_free_result($result); ?>
<?php mysqli_close($db); ?>
<?php } ?>
</table>
</form>
</body>
</html>