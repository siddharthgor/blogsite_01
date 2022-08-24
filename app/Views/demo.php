<html>

	<head>
		<title>Modeling Data and ORM in CodeIgniter 4</title>
	</head>

	<body>

		<h3>Product List</h3>
		<table border="1" cellpadding="2" cellspacing="2">
			<tr>
				<th>Blog ID</th>
				<th>User ID</th>
				<th>Blog Title</th>
				<th>First Name </th>
				<th>Last Name </th>
				<th>Category</th>
				<th>Blog Description</th>
			</tr>
			<?php foreach ($blogs as $product) { ?>
				<tr>
					<td><?= $product['blog_id'] ?></td>
					<td><?= $product['user_id'] ?></td>
					<td><?= $product['blog_title'] ?></td>
					<td><?= $product['first_name_user'] ?></td>
					<td><?= $product['last_name_user'] ?></td>
					<td><?= $product['categories'] ?></td>
					<td><?= $product['blog_description'] ?></td>
				</tr>
			<?php } ?>
		</table>

	</body>

</html>