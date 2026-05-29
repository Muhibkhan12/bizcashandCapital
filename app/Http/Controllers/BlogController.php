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
            'meta_description'=>'required|string|min:15|max:160',
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
            'meta_description' => $validate_blogs['meta_description'],
            'category' => $validate_blogs['category'],
        ]);

        return redirect()->route('create-blogs')->with('success','Blog Created Successfully');
    }

    public function editBlogPage($id){
        $blog = Blogs::findOrFail($id);
        return view('admin.editBlog',compact('blog'));
    }


    // public function editBlog(Request $request, $id){
    //         $blog = Blogs::findOrFail($id);

    //         $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'slug' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'meta_description' => 'nullable|string|max:160',
    //         'category' => 'required',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
    //     ]);

    //     if ($request->hasFile('image')) {
    //         $validated['image'] = $request->file('image')->store('blogs', 'public');
    //     }

    //     $blog->update($validated);

    //     return redirect()->back()->with('success', 'Blog updated successfully');
    // }

    public function showAllBlogs(){
        $blogs = Blogs::all();
        return view('admin.allBlogs', compact('blogs'));
    }

    public function manageAllBlogs(){
        $blogs = Blogs::all();
        return view('admin.manage-blogs', compact('blogs'));
    }

}
