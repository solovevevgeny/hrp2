<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

    <ul class="list-group">
        <li class="list-group-item"><a href="/public/api/products">/products</a></li>
        <li class="list-group-item"><a href="/public/api/product/1">/product/{id}</a></li>
        <li class="list-group-item"><a href="/public/api/categories/">/categories/</a></li>
        <li class="list-group-item"><a href="/public/api/category/1">/category/{id}</a></li>
    </ul>


    <table class="table">
        <tr>
            <td>products</td>
            <td>список всех продуктов, вместе с торговыми предложениями</td>
        </tr>
        <tr>
            <td>product/{id}</td>
            <td>информация о товаре с id = {id}</td>
        </tr>
    </table>


</body>
</html>