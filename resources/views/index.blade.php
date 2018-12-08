<!DOCTYPE>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
</head>
<body>
<div>
    <div>
        <a href="{{ route('autos.create') }}">Create auto</a>
    </div>
    <br>
    <hr>
    <br>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Year of release</th>
            </tr>
        </thead>
        <tbody>
            @foreach($autos as $auto)
                <tr>
                    <td>{{ $auto->id }}</td>
                    <td>{{ $auto->brand }}</td>
                    <td>{{ $auto->model }}</td>
                    <td>{{ $auto->year_of_release }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
