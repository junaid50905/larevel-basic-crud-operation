<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid;
            padding: 2px;
        }
        .thead{
            background: orange;
        }
    </style>
</head>
<body>
    <a href="{{ route('create') }}">create a student</a>
    <table>
    <tr class="thead">
        <td>Serial Number</td>
        <td>Student Name</td>
        <td>Student Email</td>
        <td>Action</td>
    </tr>
    @php
        $sn = 1;
    @endphp
    @foreach ($students as $student)
    <tr>
        <td>{{ $sn++; }}</td>
        <td>{{ $student->student_name }}</td>
        <td>{{ $student->student_email }}</td>
        <td>
            <button><a href="{{ route('detailed', $student->id) }}">Detailed</a></button>
            <button><a href="{{ route('edit', $student->id) }}">Edit</a></button>
            <form action="{{ route('destroy', $student->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
