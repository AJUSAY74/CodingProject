<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Add Courses</title>
	<style type="text/css">
		td, th{
			border: 1px solid black;
			padding: 5px;
		}
    tr:nth-child(even) {background: #CCC}
    tr:nth-child(odd) {background: #FFF}
	</style>
</head>
<body>
	<h3>Add a new course</h3>
	<form action='<?php echo base_url('/Courses/add'); ?>' method='post'>
		<label>Name:
			<input type='text' name='Course_Name' required=""/>
		</label>
		<br />
		<label>Description:
			<textarea name='Description' required=""></textarea>
		</label>
		<br />
		<input type='submit' value='Add' />
	</form>

	<h3>Courses</h3>
	<table>
		<thead>
			<tr>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
<?php
			// var_dump($courses);
    foreach ($courses as $course)
    {
				$Date_Added = date('F d, Y',  strtotime($course['Date_Added']));
				echo "<tr>
						<td>". $course['Course_Name'] . "</td>
						<td>". $course['Description'] . "</td>
						<td>". $Date_Added . "</td>
						<td><a href= 'courses/destroy/". $course['id']. "'>Remove</a></td>
				</tr>";
}

?>
		</tbody>
	</table>
</body>
</html>
