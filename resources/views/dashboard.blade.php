<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('db') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="mt-4">
                    
                        <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>

                        <div class = "p-6 text-gray-800 dark:text-gray-100">
                        <h2>Enrolled Courses</h2>
                            @foreach ($enrolledCourses as $course)
                                <div><a href="{{ route('courses.show', $course) }}">{{ $course->name }}</a></div>
                                <!-- Display other course details as needed -->
                            @endforeach
                        </div>


                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
