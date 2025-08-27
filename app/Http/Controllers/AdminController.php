<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function managePosts(Request $request)
    {
        $posts = Post::with('image')->when(request()->input('search'), function ($qu, $search) {
            return $qu->where('title', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%');
        })

            ->paginate(20);
        return view('admin.manageposts', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.manageposts')->with('success', 'Post deleted successfully.');
    }

        public function manageUsers(Request $request)
    {
        $users = User::when($request->input('search'), function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%');
        })
            ->paginate(20);
        return view('admin.manageusers', compact('users'));
    }

      public function adminDashboard()
    {
        $posts = Post::all();

        $postCount = $posts->count();
        $userCount = User::count();

        // return response()->json([
        //     'posts' => $posts,
        //     'postCount' => $postCount,
        //     'userCount' => $userCount
        // ]);

        return view('admin.dashboard', compact('posts', 'postCount', 'userCount'));
    }

   


}
