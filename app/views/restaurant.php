<!doctype html>
<html >
<head>
	<title>Midterm</title>
</head>
    <body>
        <h1>Yelp</h1>
        <?php
            foreach ($restaurants as $restaurant) {
                echo "<h4>$restaurant->restaurant_name ($restaurant->city)</h4>";
                echo "<p>$restaurant->type</p>";
                if ($restaurant->facebook_page) {
                    echo "Facebook Page: <a href='http://facebook.com/$restaurant->facebook_page'>here</a>";
                }
                else {
                    echo "<p>Not on Facebook</p>";
                }
                echo "<p><a href='/restaurants/$restaurant->id/reviews'>View Reviews</a></p>";
                echo "<hr>";
            }
        ?>
    </body>
</html>
