<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\About;
use App\Models\Research;
use App\Models\Category;
use App\Models\Downloadgroup;
use App\Models\Seminar;
use App\Models\Seminargroup;
class FrontendController extends Controller
{
    public function index()
    {
        $research = Research::orderBy('created_at', 'DESC')->get();
        $gallery = Gallery::orderBy('created_at', 'DESC')->take(8)->get();
        return view('frontend.index', compact(['research', 'gallery']));
    }

    public function aboutus()
    {
        $aboutData = About::all();
        return view('frontend.aboutus', compact('aboutData'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        $gallery = Gallery::orderBy('created_at', 'DESC')->get();

        return view('frontend.gallery', compact('gallery'));
    }
    public function categories()
    {
        $categories = Category::orderBy('created_at', 'ASC')->get();
        return $categories;
    }

    public function research()
    {
        $research = Research::orderBy('created_at', 'DESC')->get();
        $categories = $this->categories();
        return view('frontend.research', compact(['research', 'categories']));
    }
    public function researchDetail($id)
    {
        $researchDetail = Research::find($id);
        $categories = $categories = $this->categories();
        return view('frontend.researchDetail', compact(['researchDetail', 'categories']));
    }

    public function researchArea($id)
    {
        $researchArea = Research::where('category_id', $id)->get();
        $categories = $categories = $this->categories();
        return view('frontend.researchArea', compact(['researchArea']));
    }

    public function researchGroup()
    {
        $categories = $categories = $this->categories();
        return view('frontend.researchGroup', compact('categories'));
    }

    public function downloads()
    {
        $downloadGroup = Downloadgroup::orderBy('created_at', 'DESC')->get();
        return view('frontend.downloads', compact(['downloadGroup']));
    }

    public function seminar()
    {
        $seminar = Seminar::orderBy('created_at', 'DESC')->get();
        $seminargroup = Seminargroup::orderBy('id', 'ASC')->get();
        return view('frontend.seminar', compact(['seminar', 'seminargroup']));
    }

    public function seminarDetail($id)
    {
        $seminarDetail = Seminar::find($id);
        return view('frontend.seminarDetail', compact('seminarDetail'));
    }

    public function seminarGroup($id)
    {
        $groupName = Seminargroup::find($id);
        $seminar = Seminar::where('seminar_group_id', $id)->get();
        $seminargroup = Seminargroup::orderBy('id', 'ASC')->get();
        return view('frontend.seminarGroup', compact(['seminar', 'seminargroup', 'groupName']));
    }


}
