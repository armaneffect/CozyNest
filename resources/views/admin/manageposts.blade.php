@extends('admin.admindashboard')

@section('content')
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
        <h1 class="text-3xl font-semibold text-gray-800">Manage Posts</h1>
        <p class="text-gray-600 mt-1">Here you can manage all posts.</p>

      <form action="{{ route('admin.manageposts') }}" method="GET" class="mt-4 flex">
    <input 
        type="text" 
        name="search" 
        value="{{ request()->input('search') }}" 
        placeholder="Search posts..."
        class="border w-full md:w-1/3 mx-3 border-gray-300 rounded-md p-2 mt-2"
    >
    <button type="submit" class="bg-blue-500 text-white rounded-md p-2 mt-2">
        Search
    </button>
</form>

@if ($posts->isEmpty())
    <p class="text-gray-600 mt-4">No posts found.</p>
@endif


        <div class="mt-6 overflow-x-scroll">
            <table class="min-w-full text-start bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 text-start px-4 border-b">Image</th>
                        <th class="py-2 text-start px-4 border-b">Title</th>
                        <th class="py-2 text-start px-4 border-b">Author</th>
                        <th class="py-2 text-start px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="py-2 px-4 border-b">
                                <img src="{{ asset('storage/' . $post->image?->image_path) }}" alt="{{ $post->title }}" class="w-16 h-16 object-cover">
                            </td>
                            <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                            <td class="py-2 px-4 border-b">{{ $post->name }}</td>
                            <td class="py-2 px-4 border-b">
                               

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4 flex justify-center z-10">
                {{ $posts->links() }}
            </div>
        </div>
    </main>
@endsection
