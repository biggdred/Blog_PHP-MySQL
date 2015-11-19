<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>My first blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1><a href="index.php" >My first blog</a></h1>
        <div>
            <div class="article">
                <h3><?=$article['title']?></h3>
                <em>Published: <?=$article['date']?></em>
                <p><?=$article['content']?></p>
            </div>
        </div>
        <footer>
            <p>My first blog &copy; 2015</p>
        </footer>
    </div>
</body>
</html>