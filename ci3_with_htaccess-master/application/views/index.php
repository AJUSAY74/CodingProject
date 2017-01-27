<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>Products</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php
			foreach ($products as $product)
			{ ?>
				<tr>
					<td><?= $product['Name'] ?></td>
					<td><?= $product['Description'] ?></td>
					<td>$<?= $product['Price'] ?></td>
					<td><a href="/products/show/<?= $product['id'] ?>">Show</a></td>
					<td><a href="/products/edit/<?= $product['id'] ?>">Edit</a></td>
					<td>
						<form action="/products/destroy/<?= $product['id'] ?>" method="post">
							<input type="submit" value="Remove">
						</form>
					</td>
				</tr>
<?php 		} ?>
		</tbody>
	</table>
	<a href="/products/new_product">Add a new product</a>
</body>
</html>
