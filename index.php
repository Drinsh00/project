<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
              padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
         .add-product {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .add-product:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<h1>Product Table</h1>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price of the product</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $products = [
            ["title" => "Product A", "description" => "Description for product A", "quantity" => 10, "price" => 20.00],

            ["title" => "Product B", "description" => "Description for product B", "quantity" => 5, "price" => 50.00],
        ]
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newProduct = [
                "title" => $_POST["title"],
                "description" => $_POST["description"],
                "quantity" => $_POST["quantity"]
                "price" =>$_POST["price"]
            ];
            $products[] = $newProduct;
        }
        foreach ($products as $product) {
            echo "<tr>
                <td>{$product['title']}</td>
                <td>{$product['description']}</td>
                <td>{$product['quantity']}</td>
                <td>\${$product['price']}</td>
            </tr>";
        }
        ?>
    </tbody>
</table>
<h2>Add a New Product</h2>
<form method="POST">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>
    <label for="quantity">Quantity:</label><br>
    <input type="number" id="quantity" name="quantity" required><br><br>
    <label for="price">Price:</label><br>
    <input type="number"  id="price" name="price" required><br><br>
    <button type="submit" class="add-product">Add Product</button>
</form>
</body>
</html>


