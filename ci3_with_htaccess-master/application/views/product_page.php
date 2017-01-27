<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Product <?= $product['id'] ?></h2>
	<p>Name: <?= $product['Name'] ?></p>
	<p>Description: <?= $product['Description'] ?></p>
	<p>Price: $<?= $product['Price'] ?></p>

	<a href="/products/edit/<?= $product['id'] ?>">Edit</a>
	<a href="/products">Back</a>
</body>
</html>
