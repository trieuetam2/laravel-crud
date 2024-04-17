<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>

    <div class="err">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>


    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label for="">Name: </label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="">Qty: </label>
            <input type="text" name="qty">
        </div>

        <div>
            <label for="">price: </label>
            <input type="number" name="price">
        </div>

        <div>
            <label for="">Mo ta: </label>
            <input type="text" name="mota">
        </div>

        <div>
            <input type="submit" value="send">
        </div>
    </form>
</body>
</html>
