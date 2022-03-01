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

<div class="card-body">
    <form action="{{route('products.update',$product->id)}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="inputPassword3" value="{{$product->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Sectors</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="sectors" id="inputPassword3" value="{{$product->sectors}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="price" value="{{$product->price}}"  id="inputPassword3">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Amount</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="amount" value="{{$product->amount}}"  id="inputPassword3">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Data created</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="datecreated" value="{{$product->datecreated}}"  id="inputPassword3">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="description" value="{{$product->description}}"  id="inputPassword3">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Update_product</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>


