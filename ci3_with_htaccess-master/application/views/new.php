<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Add a new product</h2>
	<form action="/products/create" method="post">
		<label>Name</label>
		<input type="text" name="Name"><br>
		<label>Description</label>
		<input type="text" name="Description"><br>
		<label>Price</label>
		<input type="text" name="Price"><br>
		<input type="submit" value="Create">
	</form>
	<a href="/products">Back</a>
</body>
</html>
