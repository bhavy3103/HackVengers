<?php
require "connection.php";
$sql = $conn->prepare("SELECT * FROM books");
$sql->execute();
$books = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BUY Books</title>
</head>
<body>
    <h1>Books On Sale</h1>
    <div class="books-display">
            <?php foreach ($books as $i => $book) { ?>
                <div class="card">
                    <img src=<?php echo $book['image'] ?> class="card-img" alt="img1">
                    <div class="card-body">
                        <p class="price1">Price : ₹ <?php echo $book['price'] ?></p>
                        <p class="card-text"><b>Subject : </b><?php echo $book['subject'] ?></p>
                        <button type="button"><a href="03_aftercard.html">Buy</a></button>
                    </div>
                </div>
            <?php } ?>
        </div>
</body>
</html>