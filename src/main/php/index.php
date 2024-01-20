<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Voting</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<h1>Vegetable Voting</h1>

<?php
    if(!empty($_POST))var_dump($_POST);
?>

<form action="index.php" method="post">
    <div class="grid-container">
        <?php for ($i = 1; $i <= 30; $i++): ?>
            <div class="vegetable">
                <div class="vegetable-image"><img src="./img/vegetable-<?php echo $i; ?>.png" alt="Carrot"></div>
                <div class="buttons-bar">
                    <div class="like-wrapper">
                        <input type="submit" name="vegetable-like-<?php echo $i; ?>" class="like" value="Like 👍" />
                    </div>
                    <div class="likes">Total Likes: <span class="likes-number">0</span></div>
                    <div class="dislike-wrapper">
                        <input type="submit" name="vegetable-like-<?php echo $i; ?>" class="dislike" value="Dislike 👎" />
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</form>

</body>
</html>
