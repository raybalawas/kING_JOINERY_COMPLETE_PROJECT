<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_Product_form()
    {
        $categories = Category::all();
        return view('admin.pages.products.AddProduct', compact('categories'));
    }

    public function post_Product_form(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'Project_Title' => 'required',
            'Project_Details' => 'required|string',
            'Project_Image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Project_Multiple_Image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $sanitizedContent = strip_tags($validatedData['Project_Details']);

        // Store single image
        if ($request->hasFile('Project_Image')) {
            $image = $request->file('Project_Image');
            $postImage = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productsSingleImage'), $postImage);
        }

        // Store multiple images
        $multipleImages = [];
        if ($request->hasFile('Project_Multiple_Image')) {
            foreach ($request->file('Project_Multiple_Image') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('productsMultipleImages'), $imageName);
                $multipleImages[] = $imageName;
            }
        }

        // Save product to the database
        Product::create([
            'category_id' => $request->category,
            'project_title' => $request->Project_Title,
            'project_details' => $sanitizedContent,
            'project_image' => $postImage,
            'project_multiple_image' => implode(',', $multipleImages), // Adjust this line
        ]);

        return redirect()->back()->with('success', 'Submitted successfully');
    }


    public function show_product_List()
    {
        $Products = Product::with('category')->get();
        return view('admin.pages.products.ProducsList', compact('Products'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (file_exists(public_path('productsSingleImage/' . $product->project_image))) {
            unlink(public_path('productsSingleImage/' . $product->project_image));
        }

        if ($product->project_multiple_image) {
            foreach (explode(',', $product->project_multiple_image) as $image) {
                if (file_exists(public_path('productsMultipleImages/' . $image))) {
                    unlink(public_path('productsMultipleImages/' . $image));
                }
            }
        }

        $product->delete();
        return redirect()->back()->with('success', 'Project deleteed successfully........');
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.pages.products.EditProduct', compact('products', 'categories'));
    }

 

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'Project_Title' => 'required',
            'Project_Details' => 'required',
            'Project_Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Project_Multiple_Image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        // Store single image
        $postImage = $product->project_image;
        if ($request->hasFile('Project_Image')) {
            // Delete old image if exists
            if ($product->project_image && file_exists(public_path('productsSingleImage/' . $product->project_image))) {
                unlink(public_path('productsSingleImage/' . $product->project_image));
            }

            $image = $request->file('Project_Image');
            $postImage = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productsSingleImage'), $postImage);
        }

        // Store multiple images
        $multipleImages = $product->project_multiple_image ? explode(',', $product->project_multiple_image) : [];
        if ($request->hasFile('Project_Multiple_Image')) {
            // Delete old multiple images if exists
            foreach ($multipleImages as $oldImage) {
                if ($oldImage && file_exists(public_path('productsMultipleImages/' . $oldImage))) {
                    unlink(public_path('productsMultipleImages/' . $oldImage));
                }
            }

            // Upload new multiple images
            $newMultipleImages = [];
            foreach ($request->file('Project_Multiple_Image') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('productsMultipleImages'), $imageName);
                $newMultipleImages[] = $imageName;
            }
            $multipleImages = $newMultipleImages;
        }

        // Update product details
        $product->update([
            'category_id' => $request->category,
            'project_title' => $request->Project_Title,
            'project_details' => $request->Project_Details,
            'project_image' => $postImage,
            'project_multiple_image' => implode(',', $multipleImages),
        ]);

        return redirect()->back()->with('success', 'Updated successfully');
    }



    ////////////////////////////////////////// WORK FOR USERS SIDE OF PROJECTS //////////////////


    public function index()
    {
        // $categories = Category::all();
        $categories = Category::with('products')->get()->filter(function ($category){
            return $category->products->isNotEmpty();
        });
        return view('front.pages.project.projects', compact('categories'));
    }

    public function indexx()
    {
        // $categories = Category::all();
        $categories = Category::with('products')->get()->filter(function ($category) {
            return $category->products->isNotEmpty();
        });
        return view('front.pages.index', compact('categories'));
    }

    // public function index()
    // {
    //     // Fetch all categories with their related products and filter out empty categories
    //     $categories = Category::with('products')->get()->filter(function ($category) {
    //         return $category->products->isNotEmpty();
    //     });

    //     // Return the view with the fetched data
    //     return view('front.pages.index', compact('categories'));
    // }
    // public function categoryProjects($id)
    // {
    //     $category = Category::with('products')->findOrFail($id);
    //     return view('front.pages.project.categoryProjects', compact('category'));
    // }

    public function showProductImages($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $images = explode(',', $product->project_multiple_image);
        $category = $product->category;
        return view('front.pages.project.images', compact('product', 'images', 'category'));
    }

}




