<?php
session_start();
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Testing</title>
</head>
<body>
<div class="container">
    <div id="header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="dbList.php">DB list</a></li>
                <li class="breadcrumb-item active" aria-current="page">Enter your URL</li>
            </ol>
        </nav>
    </div>
    <div id="content">
        <form action="treatment.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Enter URL</label>
                <input name="url" type="url" class="form-control" id="exampleFormControlInput1"
                       placeholder="example.com/category">
                <br>
                <button type="submit" name="isset" value="1" class="btn btn-secondary">submit</button>
            </div>
        </form>
        <?php if (isset($_SESSION)): ?>
            <a href="http://<?= $_SESSION['shortUrl'] ?>"
               class="btn btn-primary btn-lg btn-block"><?= $_SESSION['shortUrl'] ?></a>
        <?php endif; ?>
    </div>
    <div id="footer"><h5>Complete Hales Artem</h5></div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>