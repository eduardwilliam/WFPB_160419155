<!DOCTYPE html>
<html lang="en">
<head>
    <title>Medicine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>List Medicine</h2>
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Price</th>
        <th>Category Name</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $data->generic_name }}</td>
        <td>{{ $data->form }}</td>
        <td>{{ $data->restriction_formula }}</td>
        <td>{{ $data->price }}</td>
        
    </tr>
    </tbody>
</table>
</div>

</body>
</html>