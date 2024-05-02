<x-app-layout>

    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="bg-white p-12 shadow-md rounded-md w-full max-w-md">
            <h1 class="text-3xl font-bold mb-6">Create Course</h1>

            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Course Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-3 py-2 leading-tight focus:outline-none focus:shadow-outline border rounded-md">
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Create</button>
            </form>
        </div>
    </div>


</x-app-layout>