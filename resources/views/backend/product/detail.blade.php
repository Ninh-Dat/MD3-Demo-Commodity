<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Sectors</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th scope="col">Data Created</th>
        <th scope="col">Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->sectors}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->datecreated}}</td>
        <td>{{$product->description}}</td>

    </tr>
    </tbody>

</table>

</body>
</html>
