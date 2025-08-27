<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index()
    {
        // $posts = [
        //     (object)[
        //         'id' => 1,
        //         'photo' => 'https://images.pexels.com/photos/1743227/pexels-photo-1743227.jpeg',
        //         'availability' => 'Available',
        //         'name' => 'Arman Khan',
        //         'rentAmount' => 500,
        //         'title' => 'Beautiful Family Apartment in City Center',
        //         'location' => 'Dhaka, Bangladesh',
        //         'preferences' => 'Family only, No pets',
        //     ],
        //     (object)[
        //         'id' => 2,
        //         'photo' => 'https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg',
        //         'availability' => 'Not Available',
        //         'name' => 'John Doe',
        //         'rentAmount' => 750,
        //         'title' => 'Modern Flat with Balcony',
        //         'location' => 'Chittagong, Bangladesh',
        //         'preferences' => 'Bachelor, Students',
        //     ],
        //     (object)[
        //         'id' => 3,
        //         'photo' => 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg',
        //         'availability' => 'Available',
        //         'name' => 'Fatema Akter',
        //         'rentAmount' => 600,
        //         'title' => 'Cozy 2 Bedroom Apartment',
        //         'location' => 'Mymensingh, Bangladesh',
        //         'preferences' => 'Family / Students',
        //     ],
        //     (object)[
        //         'id' => 1,
        //         'photo' => 'https://images.pexels.com/photos/1743227/pexels-photo-1743227.jpeg',
        //         'availability' => 'Available',
        //         'name' => 'Arman Khan',
        //         'rentAmount' => 500,
        //         'title' => 'Beautiful Family Apartment in City Center',
        //         'location' => 'Dhaka, Bangladesh',
        //         'preferences' => 'Family only, No pets',
        //     ],
        //     (object)[
        //         'id' => 2,
        //         'photo' => 'https://images.pexels.com/photos/1457842/pexels-photo-1457842.jpeg',
        //         'availability' => 'Not Available',
        //         'name' => 'John Doe',
        //         'rentAmount' => 750,
        //         'title' => 'Modern Flat with Balcony',
        //         'location' => 'Chittagong, Bangladesh',
        //         'preferences' => 'Bachelor, Students',
        //     ],
        //     (object)[
        //         'id' => 3,
        //         'photo' => 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg',
        //         'availability' => 'Available',
        //         'name' => 'Fatema Akter',
        //         'rentAmount' => 600,
        //         'title' => 'Cozy 2 Bedroom Apartment',
        //         'location' => 'Mymensingh, Bangladesh',
        //         'preferences' => 'Family / Students',
        //     ],
        // ];

        $posts = Post::with('image')->latest()->paginate(6);

        return view('home', compact('posts'));
    }
}
