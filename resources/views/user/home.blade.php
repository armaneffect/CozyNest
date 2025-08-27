@extends('user.userdeshboard')

@section('content')

<h1 class="text-3xl font-extrabold text-center mb-8 pri-font text-gray-800">My Posts</h1>

<div class="overflow-x-auto">
    <table class="w-full border-collapse bg-white rounded-lg shadow-lg">
        <thead>
            <tr class="bg-gradient-to-r from-rose-400 to-pink-500 text-white">
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Image</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Title</th>
                <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Name</th>
                <th class="px-6 py-3 text-center text-sm font-semibold uppercase">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr class="hover:bg-gray-50 transition duration-200">
                    <td class="px-6 py-4 border-b border-gray-200 font-medium text-gray-800">
                        <img src="{{ asset('storage/'.$post->image?->image_path) }}" alt="{{ $post->title }}" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-6 py-4 border-b border-gray-200 font-medium text-gray-800">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4 border-b border-gray-200 text-gray-600">
                        {{ $post->name }}
                    </td>
                    <td class="px-6 py-4 border-b border-gray-200 text-center space-x-2">
                        <a href="{{ route('posts.show', $post->id) }}"
                           class="inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold py-1 px-3 rounded-md shadow">
                            View
                        </a>
                        <a href="{{ route('posts.edit', $post->id) }}"
                           class="inline-block bg-green-500 hover:bg-green-600 text-white text-sm font-semibold py-1 px-3 rounded-md shadow">
                            Edit
                        </a>
                        <form action="{{ route('user.deletepost', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this post?')"
                                    class="inline-block bg-red-500 hover:bg-red-600 text-white text-sm font-semibold py-1 px-3 rounded-md shadow">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center py-6 text-gray-500">
                        No posts found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
