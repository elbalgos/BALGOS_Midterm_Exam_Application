<!DOCTYPE html>
<html>
<head>
    <title>Gadgets</title>
</head>
<body>
    <h1>Available Gadgets</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>
