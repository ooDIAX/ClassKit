<h2>{{ $course->name }}</h2>
<p>Description: {{ $course->description }}</p>
<!-- Add more course details as needed -->

<!-- Button to add a material -->
<a href="{{ route('materials.create', ['course_id' => $course->id]) }}" class="btn btn-primary">Add Material</a>
