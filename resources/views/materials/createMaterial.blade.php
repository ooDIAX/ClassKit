<x-app-layout>

    <div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-md">
        <h2 class="text-2xl font-semibold mb-4 text-center">Add Material</h2>
        
        <form action="{{ route('materials.store') }}" method="POST">
            @csrf
            <input type="hidden" name="course_id" value="{{ $course_id }}">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
                <textarea id="content" name="content" class="border border-gray-300 rounded-md p-2 w-full h-32 focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
            <button type="submit" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
        </form>
    </div>

</x-app-layout>
