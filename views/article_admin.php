<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My first blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1><a href="index.php" >My first blog</a></h1>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <div class="form-group">
                <label>Название</label>
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-control" autofocus required>
                </div>
                <div class="form-group">
                <label>Дата</label>
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-control" required>
                </div>
                <div class="form-group">
                <label>Содержимое</label>
                    <textarea name="content" rows="10" class="form-control" required><?=$article['content']?></textarea>
                </div>
                <input type="submit" value="Save" class="btn">                                                                    
            </form>                       
        </div>
        <footer>
            <p>Мой первый блог &copy; 2015</p>
        </footer>        
    </div>                        
</body>
</html>