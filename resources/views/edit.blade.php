<h2>Update Student information</h2>
<a href="{{ route('list') }}">back</a>
<form action="{{ route('update', $edit_student->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" value="{{ $edit_student->student_name }}" name="student_name" placeholder="Name"><br>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" value="{{ $edit_student->student_email }}" name="student_email" placeholder="email"><br>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" value="{{ $edit_student->student_password }}" name="student_password" placeholder="password"><br>
    </div>
    <button type="submit">update</button>
</form>
