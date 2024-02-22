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
use App\Models\Team;
use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function index()
    {
        $research = Research::orderBy('created_at', 'DESC')->take(3)->get();
        $gallery = Gallery::orderBy('created_at', 'DESC')->take(8)->get();
        $team_pi = Team::where('team_category', 'Co-P.I')
              ->orWhere('team_category', 'P.I')
              ->get();
        return view('frontend.index', compact(['research', 'gallery', 'team_pi']));
    }

    public function aboutus()
    {
        $aboutData = About::all();
        $team_pi = Team::where('team_category', 'P.I')->get();
        $team_copi = Team::where('team_category', 'Co-P.I')->get();
        $team_sub = Team::where('team_category', 'Research Assistants')->get();
        $team_assistant = Team::where('team_category', 'Sub-Team Members')->get();
        return view('frontend.aboutus', compact(['aboutData', 'team_pi', 'team_copi', 'team_sub', 'team_assistant']));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        $galleryname = Gallery::select('name', DB::raw('MAX(image) as image, MAX(id) as id'))->groupBy('name')->get();
        return view('frontend.gallery', compact(['galleryname']));
    }
    public function galleryImages($id)
    {
        $gallery = Gallery::where('name', $id)->orderBy('created_at', 'DESC')->get();
        return view('frontend.gallery_images', compact(['gallery']));
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
