<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">;

</head>
<body>
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

<a href="{{route('products.create')}}" type="button" class="btn btn-success mb-2"> Create Product</a>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Sectors</th>
        <th scope="col">Price</th>
        <th scope="coi-3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $key=>$product)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->sectors}}</td>
        <td>{{$product->price}}</td>
        <td>
            <a href="{{route('products.show', $product->id)}}" type="button" class="btn btn-info">Detail</a>
            <a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('products.delete', $product->id)}}" type="button" class="btn btn-success">Delete</a>
{{--            <a href="{{route('products.update', $product->id)}}" type="button" class="btn btn-danger">Update</a>--}}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>


</html>
