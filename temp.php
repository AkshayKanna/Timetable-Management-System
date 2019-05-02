<?php 
 // this will trigger when submit button click
 if(isset($_POST['insert'])){
 
 $mysqli = new mysqli("localhost","root","","timetable");
 if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
$table_name = $_POST['ttname'];
$day1 = 'Monon';
$mon1 = $_POST['mon1'];
$mon2 = $_POST['mon2'];
$mon3 = $_POST['mon3'];
$mon4 = $_POST['mon4'];
$mon5 = $_POST['mon5'];
$mon6 = $_POST['mon6'];
$mon7 = $_POST['mon7'];
$mon8 = $_POST['mon8'];
$day2 = 'Tue';
$tue1 = $_POST['tue1'];
$tue2 = $_POST['tue2'];
$tue3 = $_POST['tue3'];
$tue4 = $_POST['tue4'];
$tue5 = $_POST['tue5'];
$tue6 = $_POST['tue6'];
$tue7 = $_POST['tue7'];
$tue8 = $_POST['tue8'];
$day3 = 'Weded';
$wed1 = $_POST['wed1'];
$wed2 = $_POST['wed2'];
$wed3 = $_POST['wed3'];
$wed4 = $_POST['wed4'];
$wed5 = $_POST['wed5'];
$wed6 = $_POST['wed6'];
$wed7 = $_POST['wed7'];
$wed8 = $_POST['wed8'];
$day4 = 'Thu';
$thu1 = $_POST['thu1'];
$thu2 = $_POST['thu2'];
$thu3 = $_POST['thu3'];
$thu4 = $_POST['thu4'];
$thu5 = $_POST['thu5'];
$thu6 = $_POST['thu6'];
$thu7 = $_POST['thu7'];
$thu8 = $_POST['thu8'];
$day5 = 'Fri';
$fri1 = $_POST['fri1'];
$fri2 = $_POST['fri2'];
$fri3 = $_POST['fri3'];
$fri4 = $_POST['fri4'];
$fri5 = $_POST['fri5'];
$fri6 = $_POST['fri6'];
$fri7 = $_POST['fri7'];
$fri8 = $_POST['fri8'];
$day6 = 'Sat';
$sat1 = $_POST['sat1'];
$sat2 = $_POST['sat2'];
$sat3 = $_POST['sat3'];
$sat4 = $_POST['sat4'];
$sat5 = $_POST['sat5'];
$sat6 = $_POST['sat6'];
$sat7 = $_POST['sat7'];
$sat8 = $_POST['sat8'];
$sql1 = "CREATE TABLE $table_name(day VARCHAR(3),hron VARCHAR(10),hrtw VARCHAR(10),hrth VARCHAR(10),hrfo VARCHAR(10),hrfi VARCHAR(10),hrsi VARCHAR(10),hrse VARCHAR(10),hrei VARCHAR(10))";
	$mysqli->query($sql1);
	//if($mysqli->query($sql1) === true){
		//echo "<script type='text/javascript'>alert('Table Created successfully.')</script>";
	//} 
	//else{
		//die("ERROR: Could not able to create Table " . $mysqli->error);
		//}
		// $qu="insert into test values(".$pin.",'".$area."')"; 
$sql = "INSERT INTO $table_name VALUES('".$day1."','".$mon1."','".$mon2."','".$mon3."','".$mon4."','".$mon5."','".$mon6."','".$mon7."','".$mon8."'),
('".$day2."','".$tue1."','".$tue2."','".$tue3."','".$tue4."','".$tue5."','".$tue6."','".$tue7."','".$tue8."'),
('".$day1."','".$wed1."','".$wed2."','".$wed3."','".$wed4."','".$wed5."','".$wed6."','".$wed7."','".$wed8."'),
('".$day1."','".$thu1."','".$thu2."','".$thu3."','".$thu4."','".$thu5."','".$thu6."','".$thu7."','".$thu8."'),
('".$day1."','".$fri1."','".$fri2."','".$fri3."','".$fri4."','".$fri5."','".$fri6."','".$fri7."','".$fri8."'),
('".$day1."','".$sat1."','".$sat2."','".$sat3."','".$sat4."','".$sat5."','".$sat6."','".$sat7."','".$sat8."')";
// execute query
//$sql = $mysqli->query($sql);
		if($sql = $mysqli->query($sql)){
			echo "<script type='text/javascript'>alert('Table Inserted Successfully')</script>";
		} else {
			echo " Error in Insertion";
 }
    // Close connection
    $mysqli->close();
 
 }
?>
<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Create TimeTable</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
      @import url(https://fonts.googleapis.com/css?family=Varela);

html {
  height: 100%;
}

body {
  background: #f2f2f2;
  font-family: 'Varela', sans-serif;
  font-size: 14px;
  line-height: 1.5;
  color: #333;
  min-height: 100%;
  position: relative;
}

label {
  margin-top: 6px;
  line-height: 17px;
}

a {
  color: #fff;
}

a:focus,
a:hover {
  color: #008080;
}

.checkbox-inline+.checkbox-inline,
.radio-inline+.radio-inline {
  margin-top: 6px;
}

/******* Login Page *******/

body.login {
  background: rgba(241, 242, 181, 1);
  background: -moz-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
  background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(100%, rgba(19, 80, 88, 1)));
  background: -webkit-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
  background: -o-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
  background: -ms-radial-gradient(center, ellipse cover, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
  background: radial-gradient(ellipse at center, rgba(255, 255, 255, 1) 0%, rgba(19, 80, 88, 1) 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f1f2b5', endColorstr='#135058', GradientType=1);
}

.relative {
  position: relative;
}

.login-container-wrapper .logo,
.login-container-wrapper .welcome {
  margin: 0 0 20px 0;
  font-size: 16px;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
}

.login-container-wrapper .logo {
  text-align: center;
  position: absolute;
  top: -42px;
  margin: 0 auto;
  width: 25%;
  left: 37.5%;
  border-radius: 50%;
  background-color: #344455;
  padding: 25px;
  box-shadow: 0px 0px 9px 2px #344454;
}

.login-container-wrapper {
  max-width: 400px;
  margin: 10% auto 8%;
  padding: 40px;
  box-sizing: border-box;
  background: rgba(57, 89, 116, 0.8);
  box-shadow: 1px 1px 10px 1px #000000, 8px 8px 0px 0px #344454, 12px 12px 10px 0px #000000;
  position: relative;
  padding-top: 80px;
}

.logo .fa {
  font-size: 50px;
}
.login input:focus + .fa{
  color:#fff;
}
.login-form .form-group {
  margin-right: 0;
  margin-left: 0;
}

.login-form i {
  position: absolute;
  top: 18px;
  right: 20px;
  color: #93a5ab;
}

.login-form .input-lg {
  font-size: 16px;
  height: 33px;
  width: 75px;
  padding: 5px 5px;
  border-radius: 0;
}

.login input[type="text"],
.login input[type="password"],
.login input:focus {
  background-color: rgba(40, 52, 67, 0.75);
  border: 1px solid #4a525f;
  color: #eee;
  border-left: 4px solid #93a5ab;
}

.login input:focus {
  border-left: 4px solid #ccd8da;
}

input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
  background-color: rgba(40, 52, 67, 0.75)!important;
  background-image: none;
  color: rgb(0, 0, 0);
  border-color: #FAFFBD;
}

.login .checkbox label,
.login .checkbox a {
  color: #ddd;
}

.btn-success {
  background-color: transparent;
  background-image: none;
  padding: 8px 50px;
  border-radius: 0;
  border: 2px solid #93a5ab;
  box-shadow: inset 0 0 0 0 #7692A7;
  -webkit-transition: all ease 0.8s;
  -moz-transition: all ease 0.8s;
  transition: all ease 0.8s;
}

.btn-success:focus,
.btn-success:hover,
.btn-success.active,
.btn-success:active {
  background-color: transparent;
  border-color: #fff;
  box-shadow: inset 0 0 100px 0 #7692A7;
  color: #FFF;
}
#particles-js {
/*   background: cornflowerblue; */
  width:100%;
  height:100%;
  position:absolute;
  z-index:-1;
}
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
    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >

  <div id="particles-js"></div>
<body class="login">
			<div class="welcome"><h4 align="center" color="#ffffff"><strong>Create</strong> TimeTable</div></h4>

			<form class="form-horizontal login-form" method="POST" width="800px">
	<table align="center">
	<tr>
	<td colspan="9"><b>Table Name:</b><input id="tname" class="form-control input-lg" name="ttname" type="text" placeholder="III-CSE-C" required></td>
	</tr>
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
  <tr>
    <th>Mon</th>
    <td><input id="m1" class="form-control input-lg" name="mon1" type="text" placeholder="1st-Hr" required></td>
    <td><input id="m2" class="form-control input-lg" name="mon2" type="text" placeholder="2nd-Hr" required></td>
    <td><input id="m3" class="form-control input-lg" name="mon3" type="text" placeholder="3rd-Hr" required></td>
    <td><input id="m4" class="form-control input-lg" name="mon4" type="text" placeholder="4th-Hr" required></td>
    <td><input id="m5" class="form-control input-lg" name="mon5" type="text" placeholder="5th-Hr" required></td>
    <td><input id="m6" class="form-control input-lg" name="mon6" type="text" placeholder="6th-Hr" required></td>
    <td><input id="m7" class="form-control input-lg" name="mon7" type="text" placeholder="7th-Hr" required></td>
    <td><input id="m8" class="form-control input-lg" name="mon8" type="text" placeholder="8th-Hr" required></td>
  </tr>
<tr>
    <th>Tue</th>
    <td><input id="tu1" class="form-control input-lg" name="tue1" type="text" placeholder="1st-Hr" required></td>
    <td><input id="tu2" class="form-control input-lg" name="tue2" type="text" placeholder="2nd-Hr" required></td>
    <td><input id="tu3" class="form-control input-lg" name="tue3" type="text" placeholder="3rd-Hr" required></td>
    <td><input id="tu4" class="form-control input-lg" name="tue4" type="text" placeholder="4th-Hr" required></td>
    <td><input id="tu5" class="form-control input-lg" name="tue5" type="text" placeholder="5th-Hr" required></td>
    <td><input id="tu6" class="form-control input-lg" name="tue6" type="text" placeholder="6th-Hr" required></td>
    <td><input id="tu7" class="form-control input-lg" name="tue7" type="text" placeholder="7th-Hr" required></td>
    <td><input id="tu8" class="form-control input-lg" name="tue8" type="text" placeholder="8th-Hr" required></td>
  </tr>
  <tr>
    <th>Wed</th>
    <td><input id="we1" class="form-control input-lg" name="wed1" type="text" placeholder="1st-Hr" required></td>
    <td><input id="we2" class="form-control input-lg" name="wed2" type="text" placeholder="2nd-Hr" required></td>
    <td><input id="we3" class="form-control input-lg" name="wed3" type="text" placeholder="3rd-Hr" required></td>
    <td><input id="we4" class="form-control input-lg" name="wed4" type="text" placeholder="4th-Hr" required></td>
    <td><input id="we5" class="form-control input-lg" name="wed5" type="text" placeholder="5th-Hr" required></td>
    <td><input id="we6" class="form-control input-lg" name="wed6" type="text" placeholder="6th-Hr" required></td>
    <td><input id="we7" class="form-control input-lg" name="wed7" type="text" placeholder="7th-Hr" required></td>
    <td><input id="we8" class="form-control input-lg" name="wed8" type="text" placeholder="8th-Hr" required></td>
  </tr>
  <tr>
    <th>Thu</th>
	<td><input id="th1" class="form-control input-lg" name="thu1" type="text" placeholder="1st-Hr" required></td>
    <td><input id="th2" class="form-control input-lg" name="thu2" type="text" placeholder="2nd-Hr" required></td>
    <td><input id="th3" class="form-control input-lg" name="thu3" type="text" placeholder="3rd-Hr" required></td>
    <td><input id="th4" class="form-control input-lg" name="thu4" type="text" placeholder="4th-Hr" required></td>
    <td><input id="th5" class="form-control input-lg" name="thu5" type="text" placeholder="5th-Hr" required></td>
    <td><input id="th6" class="form-control input-lg" name="thu6" type="text" placeholder="6th-Hr" required></td>
    <td><input id="th7" class="form-control input-lg" name="thu7" type="text" placeholder="7th-Hr" required></td>
    <td><input id="th8" class="form-control input-lg" name="thu8" type="text" placeholder="8th-Hr" required></td>
  </tr>
  <tr>
    <th>Fri</th>
    <td><input id="fr1" class="form-control input-lg" name="fri1" type="text" placeholder="1st-Hr" required></td>
    <td><input id="fr2" class="form-control input-lg" name="fri2" type="text" placeholder="2nd-Hr" required></td>
    <td><input id="fr3" class="form-control input-lg" name="fri3" type="text" placeholder="3rd-Hr" required></td>
    <td><input id="fr4" class="form-control input-lg" name="fri4" type="text" placeholder="4th-Hr" required></td>
    <td><input id="fr5" class="form-control input-lg" name="fri5" type="text" placeholder="5th-Hr" required></td>
    <td><input id="fr6" class="form-control input-lg" name="fri6" type="text" placeholder="6th-Hr" required></td>
    <td><input id="fr7" class="form-control input-lg" name="fri7" type="text" placeholder="7th-Hr" required></td>
    <td><input id="fr8" class="form-control input-lg" name="fri8" type="text" placeholder="8th-Hr" required></td>
  </tr>
  <tr>
    <th>Sat</th>
    <td><input id="sa1" class="form-control input-lg" name="sat1" type="text" placeholder="1st-Hr" required></td>
    <td><input id="sa2" class="form-control input-lg" name="sat2" type="text" placeholder="2nd-Hr" required></td>
    <td><input id="sa3" class="form-control input-lg" name="sat3" type="text" placeholder="3rd-Hr" required></td>
    <td><input id="sa4" class="form-control input-lg" name="sat4" type="text" placeholder="4th-Hr" required></td>
    <td><input id="sa5" class="form-control input-lg" name="sat5" type="text" placeholder="5th-Hr" required></td>
    <td><input id="sa6" class="form-control input-lg" name="sat6" type="text" placeholder="6th-Hr" required></td>
    <td><input id="sa7" class="form-control input-lg" name="sat7" type="text" placeholder="7th-Hr" required></td>
    <td><input id="sa8" class="form-control input-lg" name="sat8" type="text" placeholder="8th-Hr" required></td>
  </tr>
  </table>
  <br>
  <p align="center"><button type="submit" class="btn btn-success btn-lg btn-block" name="insert"><b>Insert New TimeTable</h4></button></p>
			</form>
		</div>
  </body>
    <script >
      /* ---- particles.js config ---- */
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 60,
      "density": {
        "enable": true,
        "value_area": 1000
      }
    },
    "color": {
      "value":  ["#344455", "#ffffff"]
    },
    "shape": {
      "type": "edge",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 4,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 50,
      "color": "#fff",
      "opacity": 0.5,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 3,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "retina_detect": true
});
/* ---- stats.js config ---- */
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);
      //# sourceURL=pen.js
    </script>
</body>
</html>