<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cretae</title>
</head>
<body>
    <form method="POST" action="{{ route('uploadProduct') }}" enctype="multipart/form-data">
        @csrf
        <li>
            <label >Product Name</label>
            <input type="text" name="pname">
        </li>
        <li>
            <label>Product Qty</label>
            <input type="number" name='pqty'>
        </li>
        <li>
            <label>Product img</label>
            <input type="file" name="imgname">
        </li>
        <li>
            <button type="submit" name="submit">submit</button>
        </li>
    </form> 
</body>
</html>