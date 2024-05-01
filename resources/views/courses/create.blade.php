<!-- resources/views/courses/create.blade.php -->
<h1>Create Course</h1>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf

    <label for="name">Course Name:</label>
    <input type="text" id="name" name="name" required>

    <button type="submit">Create</button>
</form>
