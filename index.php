<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Сокращатель ссылок</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form method="POST" action="/r">
        <div class="container text-center">
            <div class="row align-items-center">
                <p>Введите ссылку для сокращения:</p>
                <p><input name="long_url" class="form-label" style="width: 500px"></p>
                <div class="form-text" style="height: 50px">Вы можете сделать из длинной и сложной ссылки простую.</div>
                <p><input type="submit" class="btn btn-primary" value="Сократить"></p>
            </div>
        </div>
    </form>
</body>

</html>