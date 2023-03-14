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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard-container">
        <div class="dashboard-sellbuy">
            <a href="./sell.php">
                <div class="dashboard-element">SELL BOOK</div>
            </a>
            <a href="./buy.php">
                <div class="dashboard-element">BUY BOOK</div>
            </a>
        </div>
        <h1>Your Books On Sale</h1>
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
    </div>
</body>

</html>