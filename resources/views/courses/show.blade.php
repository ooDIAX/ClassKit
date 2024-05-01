<h2>{{ $course->name }}</h2>
<p>Description: {{ $course->description }}</p>
<!-- Add more course details as needed -->

<h2>Course: {{ $course->name }}</h2>

<h3>Materials</h3>
<ul>
    @foreach ($course->materials as $material)
        <li>{{ $material->name }}</li>
        <p>{{ $material->content }}</p>
        <!-- Add other material details as needed -->
    @endforeach
</ul>

<!-- Button to add a material -->
<a href="{{ route('materials.create', ['course_id' => $course->id]) }}" class="btn btn-primary">Add Material</a>
