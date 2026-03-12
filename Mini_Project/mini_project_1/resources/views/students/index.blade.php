<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <div>
        <h1>Student List</h1>
        <ul>
            <li><a href="{{ route('students.show', ['id' => 1]) }}">Student 1</a></li>
            <li><a href="{{ route('students.show', ['id' => 2]) }}">Student 2</a></li>
        </ul>
    </div>
</body>
</html>