<a href="{{ route('list') }}">Back to list</a>
<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="student_name" placeholder="Name"><br>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="student_email" placeholder="email"><br>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="student_password" placeholder="password"><br>
    </div>
    <button type="submit">save</button>
    <button type="reset">cancel</button>
</form>
