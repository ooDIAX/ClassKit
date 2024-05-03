<x-app-layout>

<div class="max-w-7xl mx-auto bg-white p-8 shadow-md rounded-md">
    <h1 class="text-2xl font-semibold mb-4 text-center">{{ $course->name }}</h1>

    @if($isEnrolled)

        <div class="p-6 text-gray-800 dark:text-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($course->materials as $material)
                <div class="border border-gray-300 rounded-md p-4 hover:border-gray-500 transition duration-300 mb-4">
                    <div class="mb-2">{{ $material->name }}</div>
                    <div class="text-sm">{{ $material->content }}</div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Button to add a material -->
        <a href="{{ route('materials.create', ['course_id' => $course->id]) }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Add Material</a>
    @else
        {{-- Display enroll button for non-enrolled user --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="rounded-md p-4 hover:border-gray-500 transition duration-300 block">
                <a href="{{ route('courses.enroll', ['course' => $course->id]) }}" class="border border-gray-300 rounded-md p-4 hover:border-gray-500 transition duration-300 block">Enroll</a>
            </div>
        </div>
    @endif
</div>


</x-app-layout>
