<?php

require_once "06-connexion.php";

$sql = "SELECT * FROM products WHERE price > 300";

$statement = $pdo->query($sql);

$products = $statement->fetchAll(
    PDO::FETCH_ASSOC
);

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

<title>Gestion des produits</title>

</head>

<body>

    <h1>Gestion des produits</h1>

    <?php

  if (count($products) > 0) {

?>

<table border="1" cellpadding="10">

    <tr>
        <th>Produit</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Total stock</th>
    </tr>

    <?php

    foreach ($products as $product) {

    ?>

        <tr>

            <td>
                <?php echo htmlspecialchars($product["name"]); ?>
            </td>

            <td>
                <?php echo $product["price"]; ?> DH
            </td>

            <td>
                <?php echo $product["quantity"]; ?>
            </td>

            <td>
                <?php  echo $product["quantity"] * $product["price"] ;  ?> DH
            </td>

        </tr>

    <?php

    }

    ?>

</table>

<?php

} else {

    echo "<p>Aucun produit trouvé.</p>";

}

    ?>

</body>

</html>





<!-- [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => "8500.00",
        "quantity" => 2
    ],
    [
        "id" => 2,
        "name" => "Mouse",
        "price" => "200.00",
        "quantity" => 10
    ]
] -->


<!-- [
    0 => 1,
    "id" => 1,

    1 => "Laptop",
    "name" => "Laptop",

    2 => "8500",
    "price" => "8500"
] -->