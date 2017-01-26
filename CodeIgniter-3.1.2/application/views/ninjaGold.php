<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$_SESSION['gold']=0;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <style media="screen">
      #options{
        width: 1000px;
        height: 500px;
        border: 2px solid blue;
      }
      #farm, #cave, #house, #casino{
        width: 200px;
        height: 200px;
        border: 2px solid red;
        display: inline-block;
        text-align: center;
        line-height: 40px;
      }
    </style>
		<title>Ninja Gold Game</title>
	</head>
	<body>
		<div id="gameHolder">
			<b>Your Gold:</b>
			<!-- //<label for="">Your Gold:<?php echo $_SESSION['gold']; ?> </label> -->
			<div id="options">
				<div id="farm">
					<form action="/Ninja" method="post">
					<input type="hidden" name="building"/>Farm<br>
					<label for="" type="text">(earns 10-20 gold)</label><br>
					<input type="submit" name="Submit" value="Find Gold!">
					</form>
				</div>
				<div id="cave">
					<form action="/Ninja" method="post">
					<input type="hidden" name="building"/>Cave<br>
					<label for="" type="text">(earns 10-20 gold)</label><br>
					<input type="submit" name="Submit" value="Find Gold!">
					</form>
				</div>
				<div id="house">
					<form action="/Ninja" method="post">
					<input type="hidden" name="building"/>House<br>
					<label for="" type="text">(earns 10-20 gold)</label><br>
					<input type="submit" name="Submit" value="Find Gold!">
					</form>
				</div>
				<div id="casino">
					<form action="/Ninja" method="post">
					<input type="hidden" name="building"/>Casino<br>
					<label for="" type="text">(earns 10-20 gold)</label><br>
					<input type="submit" name="Submit" value="Find Gold!">
					</form>
				</div>
				<div id="activities">
					<label for="">Activities:</label><br>
				</div>
				<div>
					<table id="activityResult">
						<tr>
							<!-- <th id="youEnter"><?php echo $_POST["farm"];?></th> -->
						</tr>
					</table>
				</div>

			</div>
		</div>
	</body>
</html>
