<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="mt-4">

                    <h1 class="text-4xl font-bold mb-4">Other Courses</h1>
                    
                        <div class="p-6 text-gray-800 dark:text-gray-100">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                @foreach ($otherCourses as $course)
                                    <a href="{{ route('courses.show', $course) }}" class="border border-gray-300 rounded-md p-4 hover:border-gray-500 transition duration-300 block">
                                        {{ $course->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
