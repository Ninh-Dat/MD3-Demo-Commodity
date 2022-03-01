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

<a href="{{route('products.create')}}" type="button" class="btn btn-success mb-4 mt-5 ml-4"> Create Product</a>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
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
            <a href="{{route('products.show',$product->id)}}" type="button" class="btn btn-info">Detail</a>
            <a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('products.delete', $product->id)}}" type="button" class="btn btn-danger">Delete</a>
            <a href="{{route('products.edit',$product->id)}}" type="button" class="btn btn-success">Update</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('logout')}}" type="button" class="btn btn-info mb-4 mt-5 ml-4"> Logout</a>



</body>


</html>
