<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
// use Faker\Core\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function showAdminDashboard()
    {
        return view('admin.pages.index');
    }
    public function showBlogForm()
    {
        $category = Category::all();
        return view('admin.pages.AddBlog', compact('category'));
    }

    public function postBlog(Request $request)
    {
        $request->validate([
            'category' => 'required',
            // 'singleBlogImage' => 'required',
            'BlogTitle' => 'required',
            'AuthorName' => 'required',
            'Blog' => 'required|min:50',
            'BlogImage' => 'required'
        ]);


        if ($request->hasFile('BlogImage')) {
            $image = $request->file('BlogImage');
            $postImage = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('BlogImages'), $postImage);
        }

        // if ($request->hasFile('singleBlogImage')) {
        //     $singleBlogImage = $request->file('singleBlogImage');
        //     $postsingleBlogImage = time() . '.' . $singleBlogImage->getClientOriginalExtension();
        //     $singleBlogImage->move(public_path('BlogImages'), $postsingleBlogImage);
        // }

        Blog::create([
            'category_id' => $request->category,
            'BlogTitle' => $request->BlogTitle,
            'AuthorName' => $request->AuthorName,
            'Blog' => $request->Blog,
            'Image' => $postImage,
            // 'singleBlogImage' => $postsingleBlogImage,
        ]);

        return redirect()->back()->with('success', 'Blog Posted');
    }

    public function blogList()
    {
        $blog = Blog::with('category')->get();
        return view('admin.pages.BlogList', compact('blog'));
    }

    public function destroy($encrypedId)
    {
        $id = Crypt::decrypt($encrypedId);
        $blog = Blog::findOrFail($id);

        // Delete the file from the public folder
        $filePath = public_path('BlogImages/' . $blog->Image);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }


        $blog->delete();
        return redirect()->back()->with('success', 'deleted');
    }


    public function showEditPage($id)
    {

        try {
            // $id = Crypt::decrypt($encrypedId);
            $blog = Blog::with('category')->findOrFail($id);
            $categories = Category::all();
            return view('admin.pages.BlogEdit', compact('blog', 'categories'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index.show')->with('error', 'blog page not found');
        }

    }

    public function postEditPage(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'BlogTitle' => 'required',
            'AuthorName' => 'required',
            'Blog' => 'required|min:50',
            'BlogImage' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('BlogImage')) {
            $image = $request->file('BlogImage');
            $postImage = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('BlogImages/'), $postImage);
            $blog->Image = $postImage;
        }
        $blog->category_id = $request->category;
        $blog->BlogTitle = $request->BlogTitle;
        $blog->AuthorName = $request->AuthorName;
        $blog->Blog = $request->Blog;

        $blog->save();

        // return redirect()->route('show.edit.pagee', $blog->id)->with('success', 'Blog updated successfully.');
        return redirect()->back()->with('success', 'Blog updated successfully.');
    }

    ////////////////////////////////////////// WORK FOR USERS SIDE OF blogs //////////////////

    // public function blog()
    // {
    //     $categories = Category::all();
    //     $blogs = Blog::all();
    //     return view('front.pages.BlogShowUser', compact('blogs', 'categories'));
    // }
// YourController.php


    public function blog()
    {
        $categories = Category::has('blogs')->get(); // Fetch categories with at least one blog
        $blogs = Blog::all(); // Fetch all blogs (adjust as per your requirement)
        return view('front.pages.BlogShowUser', compact('categories', 'blogs'));
    }





    // public function blogsByCategory($encrypedId)
    // {
    //     $id = Crypt::decrypt($encrypedId);
    //     $categories = Category::all();
    //     $blogs = Blog::where('category_id', $id)->get();
    //     return view('front.pages.BlogShowUser', compact('blogs', 'categories'));
    // }
    public function blogsByCategory($encryptedId)
    {
        try {
            $id = Crypt::decrypt($encryptedId);
            $categories = Category::has('blogs')->get(); // Fetch categories with at least one blog
            $blogs = Blog::where('category_id', $id)->get(); // Fetch blogs by category ID
            return view('front.pages.BlogShowUser', compact('blogs', 'categories'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index.show');
        }
    }


    // public function singleBlog($encrypedId)
    // {
    //     try {
    //         $id = Crypt::decrypt($encrypedId);
    //         $categories = Category::all();
    //         $blogs = Blog::findOrFail($id);

    //         return view('front.pages.single-blog', compact('blogs', 'categories'));
    //     } catch (ModelNotFoundException $e) {
    //         return redirect()->route('index.show');
    //     }
    // }
    public function singleBlog($encryptedId)
    {
        try {
            $id = Crypt::decrypt($encryptedId);
            $categories = Category::has('blogs')->get(); // Fetch categories with at least one blog
            $blog = Blog::findOrFail($id);

            return view('front.pages.single-blog', compact('blog', 'categories'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('index.show');
        }
    }

}

