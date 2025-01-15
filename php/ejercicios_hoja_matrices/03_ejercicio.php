<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $color = array("&#127995", "&#127996", "&#127997", "&#127998;", "&#127999");
    $randomColor= array_rand($color);
    $colorRand=$color[$randomColor];

    $emoji = array("&#128591", "&#9997", "&#129309", "&#129330;", "&#128405");
    $randomEmoji= array_rand($emoji);
    $emojiRand=$emoji[$randomEmoji];

    $emojicolores = $emojiRand . $colorRand;

    echo "<p style='font-size: 2em;'>--->{$emojicolores}<---</p>"
    ?>
</body>
</html>