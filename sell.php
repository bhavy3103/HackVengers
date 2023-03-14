<?php
require "./connection.php";
$subject = '';
$sem = '';
$branch = '';
$price = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = $_POST['subject'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];
    $price = $_POST['price'];

    // if (!is_dir('images'))
    //     mkdir('images');

    $image = $_FILES['image'];
    $imagePath = '';
    $uniqid = uniqid();
    if ($image && $image['tmp_name']) {
        $imagePath = 'images/' . $uniqid . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    $sql = $conn->prepare("INSERT INTO books (`id`, `sem`, `branch`, `subject`, `image`, `price`) VALUES ('$uniqid', '$sem', '$branch', '$subject', '$imagePath', '$price')");
    $sql->execute();
    echo "<script>alert('Book added')</script>";
    // header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SELL</title>
</head>

<body>
    <div class="padding-50px sell-container">
        <form action="" method="POST" enctype="multipart/form-data" class="sell-form">
            <!-- enctype- Required to upload file -->
            <div class="mb-3">
                <label class="form-label">Book Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>
            <div class="mb-3">
                <label class="form-label">Semester</label>
                <input type="number" step="1" class="form-control" name="sem">
            </div>
            <div class="mb-3">
                <label class="form-label">Branch</label>
                <input type="text" class="form-control" name="branch">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Price</label>
                <input type="number" step="0.01" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Book Image</label>
                <br>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>