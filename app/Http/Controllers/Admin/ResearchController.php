<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use App\Models\Research;

class ResearchController extends Controller
{
    public function researchCategories()
    {
        $category = Category::all();
        return view('admin.research.category', compact('category'));
    }

    public function addCategory()
    {


        return view('admin.research.addCategory');
    }

    public function addCat(Request $request)
    {

        $category = new Category;

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/category',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->save();
        return redirect('/admin/research-categories')->with('status', 'Category has been added successfully');


    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.research.editCategory', compact('category'));
    }
    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image'))
        {
            $path = 'admin/assets/category'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/category',$filename);
            $category->image = $filename;


        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? '1' : '0';
        $category->popular = $request->input('popular') == TRUE ? '1' : '0';
        $category->update();
        return redirect('/admin/research-categories')->with('status', 'Category has been Updated successfully');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if($category->image)
        {

        $path = 'admin/assets/category'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            

        }
        $category->delete();
        return redirect('categories')->with('status', 'Category has been Deleted Successfully'); 
    }



    // Research Section

    public function research()
    {
        $researches = Research::orderBy('created_at', 'DESC')->get();
        return view('admin.research.research', compact('researches'));
    }

    public function addResearch()
    {
        $category = Category::orderBy('created_at','DESC')->get();
        return view('admin.research.addResearch',compact('category'));
    }

    public function insertResearch(Request $request)
    {

       $request->validate([
            'research_name' => 'required|string|max:255',
            'category_id' => 'required|string|max:50',
            'research_date' => 'required|string|max:255',
            'small_description' => 'required|string|max:255',
            'image' => 'required'
        ]);




        $research = new Research;

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/research',$filename);
            $research->image = $filename;
        }

        $research->research_name = $request->input('research_name');
        $research->category_id = $request->input('category_id');
        $research->research_date = $request->input('research_date');
        $research->small_description = $request->input('small_description');
        $research->status = $request->input('status') == TRUE ? '1' : '0';
        $research->research_text = $request->input('research_text');
        $research->save();
        return redirect('/admin/research')->with('status', 'Research has been added successfully');


    }

    public function deleteResearch($id)
    {
        $research = Research::find($id);
        if($research->image)
        {

        $path = 'admin/assets/research'.$research->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            

        }
        $research->delete();
        return redirect('/admin/research')->with('status', 'Research has been Deleted Successfully'); 
    }

    public function researchDetail($id)
    {
        $researchDetail = Research::find($id);
        return view('admin.research.researchDetail', compact('researchDetail'));
    }


    public function editResearch($id)
    {

        $researchInfo = Research::find($id);
        $category = Category::orderBy('created_at','DESC')->get();
        return view('admin.research.editResearch', compact(['researchInfo','category']));

    }

    public function updateResearch(Request $request, $id)
    {
        $research = Research::find($id);
        if($request->hasFile('image'))
        {
            $path = 'admin/assets/research'.$research->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/research',$filename);
            $research->image = $filename;


        }

        if($request->hasFile('thumbnil'))
        {
            $path = 'admin/assets/research'.$research->thumbnil;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('thumbnil');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/research',$filename);
            $research->thumbnil = $filename;


        }

        $research->research_name = $request->input('research_name');
        $research->category_id = $request->input('category_id');
        $research->research_date = $request->input('research_date');
        $research->small_description = $request->input('small_description');
        $research->status = $request->input('status') == TRUE ? '1' : '0';
        $research->research_text = $request->input('research_text');
        $research->update();
        return redirect('/admin/research')->with('status', 'Research has been Updated successfully');
    }


    // END Research section
}
