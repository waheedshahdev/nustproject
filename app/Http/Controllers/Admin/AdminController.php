<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\About;
use App\Models\Document;
use Illuminate\Support\Facades\File;
use App\Http\Requests\GalleryRequest;
use App\Models\Downloadgroup;
class AdminController extends Controller
{
    public function gallery()
    {
        $galleryData = Gallery::all();
        return view('admin.gallery.gallery', compact('galleryData'));
        // test git origin
    }


    public function addPicture()
    {

        
        return view('admin.gallery.addGallery');
    }

    public function insertPicture(GalleryRequest $request)
    {
        // $request->validate([
        // 'name' => 'required|string|max:255',
        // // 'status' => 'boolean',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example for image upload validation
        // ]);

        $gallery = new Gallery;

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('admin/assets/gallery',$filename);
            $gallery->image = $filename;
        }

        $gallery->name = $request->input('name');
        $gallery->status = $request->input('status') == TRUE ? '1' : '0';
        $gallery->save();
        return redirect('/admin/add-picture')->with('status', 'Picture has been added to Gallery!');


    }

    public function deletePicture($id)
    {
        $gallery = Gallery::find($id);
        if($gallery->image)
        {

        $path = 'admin/assets/gallery/'.$gallery->image.'';

            if(File::exists($path))
            {
                File::delete($path);

            }


        }
        $gallery->delete();
        return redirect('/admin/gallery')->with('status', 'Picture has been Deleted Successfully'); 
    }

    public function aboutus()
    {
        $about = About::all();
        return view('admin.about.about', compact('about'));
    }
    public function addAbout()
    {
        return view('admin.about.addAbout');
    }

        public function insertAbout(Request $request)
    {
        // $request->validate([
        // 'about' => 'required|text|max:255',
        // ]);

        $about = new About;

        $about->about = $request->input('about');
        $about->updated_by = auth()->user()->id;
        $about->save();
        return redirect('/admin/add-about')->with('status', 'About Us page Content has been added to Gallery!');


    }


    public function editAbout($id)
    {

        $aboutinfo = About::find($id);
        return view('admin.about.editAbout', compact('aboutinfo'));

    }


    public function updateAbout(Request $request, $id)
    {
        $about = About::find($id);
        

        $about->about = $request->input('about');
        $about->updated_by = auth()->user()->id;
        $about->update();
        return redirect('/admin/aboutus')->with('status', 'About Us Content has been Updated successfully');
    }



    ///// Downloads Section ////////////
    public function downloads()
    {
        $downloads = Downloadgroup::orderBy('created_at', 'DESC')->get();
        return view('admin.downloads.downloads', compact('downloads'));
    }
 
    public function addGroup()
    {

        $group = Downloadgroup::orderBy('created_at', 'DESC')->get();
        return view('admin.downloads.addGroup', compact(['group']));
    }

    public function insertGroup(Request $request)
    {

        $request->validate([
            'group_name' => 'required|string|max:255',
            'description' => 'required|string|max:50',
        ]);

        $group = new Downloadgroup;

        $group->group_name = $request->input('group_name');
        $group->description = $request->input('description');
        $group->status = $request->input('status') == TRUE ? '1' : '0';
        $group->save();
        return redirect('/admin/download-group')->with('status', 'Group has been added for Downloads!');
    }

    public function editGroup($id)
    {
            $singleGroup = Downloadgroup::find($id);

        return view('admin.downloads.editGroup', compact(['singleGroup']));
    }

    public function updateGroup(Request $request, $id)
    {

        $request->validate([
            'group_name' => 'required|string|max:255',
            'description' => 'required|string|max:50',
        ]);
        $group = Downloadgroup::find($id);

        $group->group_name = $request->input('group_name');
        $group->description = $request->input('description');
        $group->status = $request->input('status') == TRUE ? '1' : '0';
        $group->update();
        return redirect('/admin/download-group')->with('status', 'Group has been updated for Downloads!');
    }

     public function deleteGroup($id)
    {
        $group = Downloadgroup::find($id);
        $group->delete();
        return redirect('/admin/download-group')->with('status', 'Group has been Deleted Successfully'); 
    }


    public function viewDocument($id)
    {
        $document = Document::where('download_group_id', $id)->get();
        return view('admin.downloads.viewGroup', compact(['id', 'document']));
    }
    
    public function uploadDocument(Request $request, $id)
    {

        $request->validate([
            'document_name' => 'required|string|max:255',
            'pdf_file' => 'required|mimes:pdf|max:50000', // Maximum file size of 50 MB (50000 KB)
        ]);

        $document = new Document;

        if($request->hasFile('pdf_file')){

            $file = $request->file('pdf_file');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('documents',$filename);
            $document->pdf_file = $filename;
        }

        $document->download_group_id = $id;
        $document->document_name = $request->input('document_name');
        $document->status = $request->input('status') == TRUE ? '1' : '0';
        $document->save();
        return redirect('/admin/view-document')->with('status', 'Document has been added for Downloads!');
    }

    ///// END Downloads Section ////////////

    //// Seminar Section ////
    public function seminar()
    {
        return view('admin.seminar.seminar');
    }

    public function addSeminar()
    {
        return view('admin.seminar.addSeminar');
    }

    //// End Seminar Section ////







}
