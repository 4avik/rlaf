<x-app-layout>
    <div class="max-w-5xl mx-auto py-6 px-2">
        <h1 class="text-2xl font-semibold">Create New Post</h1>

        <form action="{{ route('posts.store') }}" method="post" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <textarea name="body" id="body" rows="10" class="mt-1 block w-full" required></textarea>
            </div>

            <x-primary-button type="submit">Create</x-primary-button>
        </form>
    </div>
</x-app-layout>
