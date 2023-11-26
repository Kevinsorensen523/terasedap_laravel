<!-- menu.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Restaurant Menu</title>
</head>

<body>
    <h1>Restaurant Menu</h1>
    <ul>
        @foreach($foodItems as $item)
        <li>
            <strong>Name:</strong> {{ $item->name }}<br>
            <strong>Price:</strong> ${{ $item->price }}<br>
            <strong>Category:</strong> {{ $item->category->name }}<br>
            <strong>Description:</strong> {{ $item->description }}<br><br>
        </li>
        @endforeach
    </ul>
</body>

</html>