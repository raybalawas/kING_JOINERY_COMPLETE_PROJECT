<?php

// namespace App\Http\Controllers;

// use App\Models\Category;
// use App\Models\Product;
// use Illuminate\Http\Request;

// class CategoryController extends Controller
// {
//     public function show_Category_Form()
//     {
//         return view('admin.pages.category.categoryForm');
//     }

//     public function post_Category_Form(Request $request)
//     {
//         $request->validate([
//             'category' => 'required',
//         ]);

//         Category::create([
//             'category' => $request->category,
//         ]);
//         return redirect()->back()->with('success', 'category added successfully');
//     }

//     public function show_Category_List()
//     {
//         $categories = Category::all();
//         return view('admin.pages.category.categoryList', compact('categories'));
//     }

//     public function destroy($id)
//     {
//         $category = Category::findOrFail($id)->delete();
//         return redirect()->back()->with('success', 'Category deleted');
//     }

//     public function edit($id)
//     {
//         $category = Category::findOrFail($id);
//         return view('admin.pages.category.categoryEditForm', compact('category'));
//     }

//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'category' => 'required',
//         ]);

//         $category = Category::findOrFail($id);
//         // if ($category) {
//         //     \Log::info('Category found: ' . $category->id);
//         // } else {
//         //     \Log::error('Category not found: ' . $id);
//         // }

//         Category::update([
//             'category' => $request->category,
//         ]);
//         return redirect()->route('show.category.list')->with('success', 'Updated successfully');
//     }


// }
// <?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show_Category_Form()
    {
        return view('admin.pages.category.categoryForm');
    }

    public function post_Category_Form(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);

        Category::create([
            'category' => $request->category,
        ]);
        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function show_Category_List()
    {
        $categories = Category::all();
        return view('admin.pages.category.categoryList', compact('categories'));
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.pages.category.categoryEditForm', compact('category'));
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'category' => 'required',
    //     ]);

    //     $category = Category::findOrFail($id);
    //     $category->update([
    //         'category' => $request->category,
    //     ]);
    //     return redirect()->route('show.category.list')->with('success', 'Updated successfully');
    // }

    public function Update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ]);


        $category = Category::findOrFail($id);

        // $category->update([
        //     'category' => $request->category,
        // ]);
        $category->category = $request->category;
        $category->save();

        return redirect()->route('show.category.list')->with('success', 'Updated successfully');
    }


}
