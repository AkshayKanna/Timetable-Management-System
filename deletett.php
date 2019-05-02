<?php $db = mysqli_connect('localhost', 'root', '', 'timetable');
    require 'Timetable.php';
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
          <li><a href="menu.html">Home</a></li>
          <li><a href="javascript:void(0)">Manage TimeTable<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="creatett.php">Create New TimeTable</a></li>
              <li><a href="modifytt.php">Update TimeTable</a></li>
              <li><a href="deletett.php">Delete Exsisting TimeTable</a></li>
            </ul>
          </li>
          <li><a href="javascript:void(0)" >Manage Teacher<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="createteacher.php">Create New Teacher</a></li>
              <li><a href="updateteacher.php">Update Teacher Details</a></li>
			  <li><a href="deleteteacher.php">Delete Exsisting Teacher</a></li>
            </ul>
          </li>
          <li><a href="javascript:void(0)" >Manage Class Details<span class="arrow-down"></span></a>
            <ul class="dropdown">
              <li><a href="newclass.php">Create New Class</a></li>
              <li><a href="uclass.php">Update Class Details</a></li>
			  <li><a href="dclass.php">Delete Exsisting Class</a></li>
            </ul>
          </li>
          <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
          <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
		  <li><a></a></li><li><a></a></li><li><a></a></li>
		  <li><a></a></li>
          <li><a href="">logout</a></li>
        </ul>
      </div>
<h3> Page to Modify timetable </h3>
<form method="POST">
<select name="listtt">
<?php
$sqlq = "show tables";
$res = mysqli_query($db, $sqlq);
while ($tables = mysqli_fetch_array($res)) {
    echo '<option value="' . $tables['Tables_in_timetable'] . '">' . $tables['Tables_in_timetable'] .
        '</option>';
}
?>
</select>
<button type="submit" name="select"><b>View TimeTable</b></h4></button>
<?php
if (isset($_POST['select'])) {
    $tname = $_POST['listtt'];
    $query = "select * from $tname";
    $result = mysqli_query($db, $query);
?>
<table>
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
<?php while ($row = mysqli_fetch_array($result)) {
	echo '<tr>
	<th>' . $row['day'] . '</th>
	<td>' . $row['hron'] . '</td>
	<td>' . $row['hrtw'] . '</td>
	<td>' . $row['hrth'] . '</td>
	<td>' . $row['hrfo'] . '</td>
	<td>' . $row['hrfi'] . '</td>
	<td>' . $row['hrsi'] . '</td>
	<td>' . $row['hrse'] . '</td>
	<td>' . $row['hrei'] . '</td>
</tr>';
    } 
?>
</tbody>
 </table><br>
<?php	echo '<button type="submit" name="delete">Confirm Delete</b></h4></button>';
 mysqli_free_result($result);
 }
 if (isset($_POST['delete'])) {
    $data = new Timetable();
    $result = $data->deleteTable($_POST['listtt']);
    if($result){echo "<script type='text/javascript'>alert('Table Droped From the DataBase.')</script>";	} 
	else{echo "<script type='text/javascript'>alert('Deletion Failed.')</script>";}   
   }
    mysqli_close($db)
?>
</form>
</body>
</html>