<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./index.css">
        <title>Form</title>
    </head>
    <body>
        <form action="./server.php" method="POST" class="container py-5 input-group">
            <input type="text" name="paragrafo" class="form-control" placeholder="Write a paragraph here" >
            <input type="text" name="censura" class="form-control" placeholder="Parola da censurare">
            <button type="submit" class="btn btn-outline-dark">
                INVIA AL SERVER
            </button>
        </form>
    </body>
</html>