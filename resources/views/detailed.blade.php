<h3>Detailed</h3>
<a href="{{ route('list') }}">Back to list</a> <br>
<a href="{{ route('create') }}">Create new student</a> <br>

<p>Student name: {{ $student_detailed->student_name }}</p>
<p>Student email: {{ $student_detailed->student_email }}</p>
<p>Student password: {{ $student_detailed->student_password }}</p>
