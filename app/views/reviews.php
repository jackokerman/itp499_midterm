<!doctype html>
<html>
<head>
    <style>
        img {
            width: 20px;
            height: 20px;
        }
    </style>
    <title>Midterm</title>
</head>
    <body>
        <h1>Yelp</h1>
        <h3><?php echo $restaurant->restaurant_name?></h3>
        <?php if ($fbpage): ?>
            <h4>Facebook Activity</h4>
            <ul>
                <li>Likes: <?php echo $fbpage->likes?></li>
                <li>Checkins: <?php echo $fbpage->checkins?></li>
            </ul>
        <?php endif; ?>
        <hr>
        <?php foreach($reviews as $review) : ?>
            <?php
                for ($i = 0; $i < $review->rating; $i++) {
                    echo "<img src='http://pngimg.com/upload/star_PNG1594.png'>";
                }
            ?>
            <p><?php echo $review->review_description?></p>
            <hr>
        <?php endforeach ?>
    </body>
</html>