<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
</head>
<body>
    <div>
        <h1>Student Information</h1>
        <p>Displaying details for Student ID: <strong>{{ $id }}</strong></p>

        <a href="{{ route('students.index') }}">Back to List</a>
    </div>
</body>
</html>