<!DOCTYPE>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
</head>
<body>
<div>
    <form action="{{ route('autos.store') }}" method="post">
        @csrf
        <div>
            <label>Brand:</label>
            <input type="text" name="brand">
        </div>
        <br>
        <div>
            <label>Model:</label>
            <input type="text" name="model">
        </div>
        <br>
        <div>
            <label>Year of release:</label>
            <input type="number" name="year_of_release">
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</div>
</body>
</html>
