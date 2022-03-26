<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="Sum" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Enter First Number</td>
            <td><input type="number" name="fnum"><br></td>
        </tr>
        <tr>
            <td>Enter Second Number</td>
            <td><input type="number" name="snum"><br></td>
        </tr>
    </table>


@error('sum')
<div>{{$message}}</div>
@enderror

    <input type="submit" value="Add">
    </form>
</body>
</html>