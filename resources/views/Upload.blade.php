<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>

    <form method="POST" action="upload" enctype="multipart/form-data">
    <h2>student Profile</h2>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="fname" id="fname"><br></td>
        </tr>
        <tr>
            <td>RegNum</td>
            <td>:</td>
            <td><input type="number" name="regno" id="regno"><br></td>
        </tr>
        <tr>
            <td>CGPA</td>
            <td>:</td>
            <td><input type="number" name="cgpa" id="cgpa"><br></td>
        </tr>
        <tr>
            <td>Specialization</td>
            <td>:</td>
            <td><input type="text" name="spl" id="spl"><br></td>
        </tr>
        <tr>
            <td>File upload(Resume)</td>
            <td colspan="2"><input type="file" name="file" id="file"> <br></td>
        </tr>
    </table>

    <input type="submit">Upload</input>
    </form>
</body>
</html>

