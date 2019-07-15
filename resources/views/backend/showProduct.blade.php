<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productView</title>
</head>
<body>
    @foreach ($pro as $value)
        <table border="5px;">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Qty</th>
                <th>Product img</th>
            </tr>
            <tr>
                <td>{{ $value->pid }}</td>
                <td>{{ $value->pname }}</td>
                <td>{{ $value->pqty }}</td>
                <td><img src="{{asset( 'imgProduct')}}\{{$value->img }}" width="150px" height="100px"></td>
            </tr>
        </table> 
    @endforeach
</body>
</html>