<?php $db = mysqli_connect('localhost', 'root', '', 'timetable');
require 'Section.php';
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
          <li><a href="menu.html">logout</a></li>
        </ul>
      </div>
<h3> Page to Delete Class</h3>
<form method="POST">
<select name="name">
<?php
$sqlq = "select cid from class";
$res = mysqli_query($db, $sqlq);
while ($tables = mysqli_fetch_array($res)) {
    echo '<option value="' . $tables['cid'] . '">' . $tables['cid'] .
        '</option>';
}
?>
</select>
<button type="submit" name="select"><b>View Teacher Details</b></h4></button>
<?php
if (isset($_POST['select'])) {
    $tname = $_POST['name'];
    $query = "select * from class where cid = '$tname'";
    $result = mysqli_query($db, $query);
?>
<table border="1" align="center">
	<thead>
		<tr>
    <th>ClassID</th>
    <th>Department</th>
    <th>Year</th>
    <th>Strength</th>
    <th>Venue</th>
  </tr> 
  </thead>
  <tbody>
<?php while ($row = mysqli_fetch_array($result)) {
	echo '<tr>
	<td>' . $row['cid'] . '</td>
	<td>' . $row['dep'] . '</td>
	<td>' . $row['year'] . '</td>
	<td>' . $row['str'] . '</td>
    <td>' . $row['venue'] . '</td>
</tr>';
    } 
?>
</tbody>
 </table>   
<?php	echo '<button type="submit" name="delete"><b>Delete Details</b></h4></button>';
 }
 if (isset($_POST['delete'])) {
    $data = new Section();
    $result = $data->deleteSection($_POST['name']);
    if($result){
    	echo "<script type='text/javascript'>alert('deletion Success.')</script>";
	} 
	else{
		echo "<script type='text/javascript'>alert('deletion Failed.')</script>";
		}   
    }
    mysqli_close($db);
?>
</form>
</body>
</html>