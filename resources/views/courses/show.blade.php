<div>
    <h1>{{ $course->name }}</h1>
    <p>{{ $course->description }}</p>

    @if($isEnrolled)
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
    @else
        {{-- Display enroll button for non-enrolled user --}}
        <form action="{{ route('courses.enroll', ['course' => $course->id]) }}" method="POST">
            @csrf
            <button type="submit">Enroll in Course</button>
        </form>
    @endif
</div>