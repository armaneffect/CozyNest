<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //browse posts
    public function index(Request $request)
    {

        $posts = Post::with('image')->when($request->input("category"), function ($query, $category) {
            return $query->where('roomType', $category);
        })->when($request->input("sort"), function ($query, $sort) {
            return $query->orderBy('rentAmount', $sort);
        })->when($request->input('search'), function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        })->latest()
            ->paginate(10);

        //return response()->json($posts);
        return view('browseposts', compact('posts'));
    }



    public function show($id)
    {
        $post = Post::with('image')->findOrFail($id);
        // return response()->json($post);
        return view('post', compact('post'));
    }

    public function create()
    {
        return view('user.createpost');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'roomType' => 'required|string|max:100',
            'rentAmount' => 'required|integer',
            'availability' => 'required|string|max:100',
            'contactInfo' => 'required|string|size:11',
            'email' => 'required|email|max:100',
            'details' => 'required|string',
            'preferences' => 'required|string|max:100',
            'image' => 'required|image|max:2048',
        ]);




        $post = new Post();
        $post->title = $validated['title'];
        $post->name = $validated['name'];
        $post->location = $validated['location'];
        $post->roomType = $validated['roomType'];
        $post->rentAmount = $validated['rentAmount'];
        $post->availability = $validated['availability'];
        $post->contactInfo = $validated['contactInfo'];
        $post->email = $validated['email'];
        $post->details = $validated['details'];
        $post->preferences = $validated['preferences'];
        $post->user_id = Auth::id();
        $post->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $imagetable = new Image();
            $imagetable->image_path = $imagePath;
            $imagetable->post_id = $post->id;
            $imagetable->save();
        }


        return redirect()->route('dashboard')->with('success', 'Post created successfully.');
    }


    public function dashboard()

    {
        return view('user.home');
    }


    public function userDashboardHome(Request $request)
    {
        $posts = Post::with('image')->where('user_id', Auth::id())->when($request->input('search'), function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('name', 'like', '%' . $search . '%');
        })
            ->paginate(20);
        //return response()->json($posts);
        return view('user.home', compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            return redirect()->route('user.dashboard')->with('error', 'You are not authorized to delete this post.');
        }

        $image = Image::where('post_id', $id)->first();

        if ($image) {
        
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }
        
            $image->delete();
        }


        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully.');
    }

}
