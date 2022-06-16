<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City List</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>N <sup>o</sup></th>
            <th>City name</th>
        </tr>
        
        <?php $i = 0; ?>
        @foreach ($city as $row)
        <?php $i++; ?>
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $row->city }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>