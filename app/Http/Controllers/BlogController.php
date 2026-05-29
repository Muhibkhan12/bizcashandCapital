<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Faker\Guesser\Name;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlogs(Request $request){
        $validate_blogs = $request->validate([
            'title'=>'required|string|min:5|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'content'=>'required|string|min:100',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'category'=> 'required|in:Business,Finance,Loans,SBA,TipsnAdvice',
        ]);
        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('blogs','public');
        };

        $blogs = Blogs::create([
            'title' => $validate_blogs['title'],
            'slug' => $validate_blogs['slug'],
            'content' => $validate_blogs['content'],
            'image' => $imagePath,
            'category' => $validate_blogs['category'],
        ]);

        return redirect()->route('create-blogs')->with('success','Blog Created Successfully');
    }

    public function showAllBlogs(){
        $blogs = Blogs::all();
        return view('admin.allBlogs', compact('blogs'));
    }   
    


}
