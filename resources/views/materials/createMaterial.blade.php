<h2>Add Material</h2>

<form action="{{ route('materials.store') }}" method="POST">
    @csrf
    <input type="hidden" name="course_id" value="{{ $course_id }}">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea id="content" name="content" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
