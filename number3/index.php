<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styless.css">
	<title>Комменты</title>
    
<body>
<div class="container">
    <h1>Комментарии</h1>

    <form method="post" action="process.php">
        <div class="form-group mt-3">
            <label for="author">Автор:</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group mt-3">
            <label for="comment">Комментарий:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-primary">Добавить комментарий</button>
        </div>
    </form>

    <h2>Список комментариев:</h2>
    <?php
        include 'display_comments.php';
    ?>
</div>

</body>
</head>
</html>