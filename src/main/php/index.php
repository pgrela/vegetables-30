<?php
session_start();
?>
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
if (!empty($_POST)) var_dump($_POST);
if (isset($_POST['vote'])) {
    if ($_POST['vote'] == 'upvote') {
        $_SESSION['vegetables'][(int)$_POST['vegetable_id']]['votes'] = 1 + @$_SESSION['vegetables'][(int)$_POST['vegetable_id']]['votes'];
    }
    if ($_POST['vote'] == 'downvote') {
        $_SESSION['vegetables'][(int)$_POST['vegetable_id']]['votes'] = -1 + @$_SESSION['vegetables'][(int)$_POST['vegetable_id']]['votes'];
    }
}
?>

<div class="grid-container">
    <?php for ($i = 1; $i <= 30; $i++): ?>
        <div class="vegetable">
            <div class="vegetable-image"><img src="./img/vegetable-<?php echo $i; ?>.png" alt="Carrot"></div>
            <div class="buttons-bar">
                <div class="like-wrapper">
                    <form action="index.php" method="post">
                        <input type="hidden" name="vegetable_id" value="<?php echo $i; ?>"/>
                        <input type="hidden" name="vote" value="upvote"/>
                        <input type="submit" name="vegetable-like-<?php echo $i; ?>" class="like" value="Like 👍"/>
                    </form>
                </div>
                <div class="likes">Total Likes: <span
                            class="likes-number"><?php echo @(int)$_SESSION['vegetables'][$i]['votes']; ?></span></div>
                <div class="dislike-wrapper">
                    <form action="index.php" method="post">
                        <input type="hidden" name="vegetable_id" value="<?php echo $i; ?>"/>
                        <input type="hidden" name="vote" value="downvote"/>
                        <input type="submit" name="vegetable-like-<?php echo $i; ?>" class="dislike" value="Dislike 👎"/>
                    </form>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

</body>
</html>
