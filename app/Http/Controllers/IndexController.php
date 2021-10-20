<?php

namespace App\Http\Controllers;
use App\Models\Admin_user;
use App\Models\admission;
use App\Models\blog;
use App\Models\course;
use App\Models\coursecat;
use App\Models\event;
use App\Models\files;
use App\Models\gallery;
use App\Models\message;
use App\Models\news;
use App\Models\notice;
use App\Models\result;
use App\Models\siteconfig;
use App\Models\slider;
use App\Models\teacher;
use App\Models\whychooseus;
use Faker\Core\Blood;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
 $categories = Coursecat::all();
        $whychooseus = WhyChooseUs::all();

        $events = event::paginate(6);
        $blogs=Blog::all();

        $newses = News::all();
        $sites = SiteConfig::all();

        return view('index', compact('sliders', 'whychooseus', 'events', 'newses', 'sites','categories','blogs'));
    }



    public function about_us()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('aboutus', compact('sites','categories'));
    }


    public function messages()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('message', compact('sites','categories'));
    }


    public function planning()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        $courses=Course::all();
        return view('planning', compact('sites','categories','courses'));
    }


    public function notice()
    {
         $categories = Coursecat::all();
         $sites = SiteConfig::all();
        $notices = Notice::paginate(9);
        return view('notice', compact('notices','sites','categories'));
    }


    public function notice_details($id)
    {
        $notice_details = Notice::find($id);
         $categories = Coursecat::all();
 $sites = SiteConfig::all();
 $notices=Notice::all();
        return view('notice_details', compact('notice_details','sites','categories','notices'));
    }


    public function results()
    {
        $results = result::paginate(8);
         $sites = SiteConfig::all();
          $categories = Coursecat::all();
        return view('result', compact('results','sites','categories'));

    }


    public function course($id)
    {
// $id=request()->segment(1);
       //$courses = Course::find($id);
        $categories = Coursecat::all();
       // return $courses;
$course=Course::where('c_id',$id)->paginate(12);
 $sites = SiteConfig::all();

        return view('course', compact('course', 'categories','sites'));
    }

        public function course_details($id)
    {
        // $course_detail=Course::where('status',1)->get();
        $course_detail = Course::find($id);
$courses= Course::all();
         $categories = Coursecat::all();
         $sites = SiteConfig::all();

        return view('course_details', compact('course_detail','sites','categories','courses'));
    }


    public function teacher()
    {
        $teachers = Teacher::paginate(12);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('teacher', compact('teachers','sites','categories'));
    }

      public function teacher_details($id)
    {
        $teacher_detail = Teacher::find($id);
 $sites = SiteConfig::all();
 $categories = Coursecat::all();
 $courses= Course::all();
        return view('teacher_details', compact('teacher_detail','sites','categories','courses'));
    }


    public function news()
    {
        $newses = News::paginate(6);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('news', compact('newses','sites','categories'));
    }


    public function gallery()
    {
        $galleries = gallery::paginate(12);
         $categories = Coursecat::all();
 $sites = SiteConfig::all();
        return view('gallery', compact('galleries','sites','categories'));
    }


    public function event()
    {
        $Events = Event::paginate(9);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('event', compact('Events','sites','categories'));
    }


    public function event_details($id)
    {
        $event_details = Event::find($id);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
      $event = Event::all();
        return view('event_details', compact('event_details','sites','categories','event'));
    }

      public function news_details($id)
    {
        $news_details = News::find($id);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $newses=News::all();
        return view('news_details', compact('news_details','sites','categories','newses'));
    }


    public function blog()
    {
        $blogs = Blog::paginate(3);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('blog', compact('blogs','sites','categories'));
    }


      public function blog_details($id)
    {
        $blog_details = Blog::find($id);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $blogs=blog::all();
        return view('blog_details', compact('blog_details','sites','categories','blogs'));
    }


    public function contacts()
    {
$sites = SiteConfig::all();
 $categories = Coursecat::all();
        return view('contact', compact('sites','categories'));
    }

    public function admission()
    {
$sites = SiteConfig::all();
 $categories = Coursecat::all();
        return view('admission', compact('sites','categories'));
    }


    public function whychooseus()
    {
        $whychooseus = WhyChooseUs::where('status', 1)->orderBy('id', 'asc')->limit(1)->get();

        return view('whychooseus', compact('whychooseus'));
    }


}
