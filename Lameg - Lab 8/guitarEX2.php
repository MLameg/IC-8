<!DOCTYPE html>
<html>
	<head>
		<style>
			table{ 
				text-align: center;
				}
			
		</style>
	</head>
	<body>
		<?php
			$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
			$username = 'mgs_user';
			$password = 'pa55word';
			// creates PDO object
			$db = new PDO($dsn, $username, $password);  

			$productID = $_POST["num"];

			$query = "SELECT *
					FROM products
					WHERE productID = $productID";

			$products = $db->query($query);    
			// $products is a PDOStatement object

			$products = $db->query($query);
		?>
		
	<table border="1">
		<thead><tr>
			<th>Product Id</th>
			<th>Product Code</th>
			<th>Name</th>
			<th>Price</th>
		</tr></thead>
		
		<?php foreach($products as $product) : ?>
			<tr>
				<td><?php echo $product['productID']; ?></td>
				<td><?php echo $product['productCode']; ?></td>
				<td><?php echo $product['productName']; ?></td>
				<td><?php echo $product['listPrice']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	</body>
</html>