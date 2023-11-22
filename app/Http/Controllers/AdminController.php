<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\AboutUs;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Gallery;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $section1 = Section1::latest()->first();
        $section2 = Section2::latest()->first();
        $section3 = Section3::latest()->first();
        $section4 = Section4::latest()->first();
        // dd($section1);
        return view('Admin.homepagecontent', compact('section1','section2','section3','section4'));
    }    
    public function aboutus()
    {
        $aboutus = AboutUs::latest()->first();
        return view('Admin.aboutus', compact('aboutus'));
    }

    public function teamcreate()
    {
      
        return view('Admin.Creates.teams');
    }
    public function blogcreate()
    {
      
        return view('Admin.Creates.blogs');
    }
    public function gallerycreate()
    {
      
        return view('Admin.Creates.gallery');
    }
    public function testimonialcreate()
    {
      
        
        return view('Admin.Creates.testimonials');
    }

    public function team()
    {
        $teams = Team::all();
        return view('Admin.team', compact('teams'));
    }
    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return view('Admin.testimonials', compact('testimonials'));
    }
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('Admin.gallery', compact('galleries'));
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('Admin.blog', compact('blogs'));
    }

    //edits//
    //section 1
    public function editsection1(Section1 $section1)
    {
        return view('Admin.Edits.section1', compact('section1'));

    }
    public function updatesection1(Request $request, Section1 $section1, $id)
    {
      
        $section1 = Section1::find($id);
        if ($request->hasFile("image1")) {
            if($section1->image1){
                unlink(public_path('images/section1/' . $section1->image1));   
                $file = $request->image1;
                $imageName = time() . " 1"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section1/'), $imageName);
                $section1->image1 = $imageName;
            }
            else{
                $file = $request->image1;
                $imageName = time() . " 1"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section1/'), $imageName);
                $section1->image1 = $imageName;
            }
        }
        if ($request->hasFile("image2")) {
            if($section1->image2){
                unlink(public_path('images/section1/' . $section1->image2));   
                $file = $request->image2;
                $imageName = time() . " 2"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section1/'), $imageName);
                $section1->image2 = $imageName;
            }
            else{
                $file = $request->image2;
                $imageName = time() . " 2"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section1/'), $imageName);
                $section1->image2 = $imageName;
            }
        }
        if ($request->hasFile("image3")) {
		    if($section1->image3){
		        unlink(public_path('images/section1/' . $section1->image3));   
		        $file = $request->image3;
		        $imageName = time() . " 3"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/section1/'), $imageName);
		        $section1->image3 = $imageName;
		    }
		    else{
		        $file = $request->image3;
		        $imageName = time() ." 3". "_" . $file->getClientOriginalName();
		        $file->move(public_path('images/'), $imageName);
		        $section1->image3 = $imageName;
		    }
        }

        if(!$section1->image1){
            $section1->image1="";
        }
        if(!$section1->image2){
            $section1->image2="";
        }
        if(!$section1->image3){
            $section1->image3="";
        }
        
        $section1->update([
            "text1" => $request->text1,
            "text2" => $request->text2,
            "text3" => $request->text3,
            "text4" => $request->text4,
            "image1" => $section1->image1,
            "image2" => $section1->image2,
            "image3" => $section1->image3,
            
            
        ]);
        //redirect user
        return redirect('/admin/dashboard')->with([
            "success" => "Section1 Saved Succesfully"
        ]);
    
   
    

        


    }

    //section 2
    public function editsection2(Section2 $section2)
    {
        return view('Admin.Edits.section2', compact('section2'));

    }
    public function updatesection2(Request $request, Section2 $section2, $id)
    {
      
        $section2 = Section2::find($id);
        if ($request->hasFile("image1")) {
            if($section2->image1){
                unlink(public_path('images/section2/' . $section2->image1));   
                $file = $request->image1;
                $imageName = time() . " 1"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section2/'), $imageName);
                $section2->image1 = $imageName;
            }
            else{
                $file = $request->image1;
                $imageName = time() ." 1". "_" . $file->getClientOriginalName();
                $file->move(public_path('images/section2/'), $imageName);
                $section2->image1 = $imageName;
            }
        }
        if ($request->hasFile("image2")) {
            if($section2->image2){
                unlink(public_path('images/section2/' . $section2->image2));   
                $file = $request->image2;
                $imageName = time() ." 2". "_" . $file->getClientOriginalName();
                $file->move(public_path('images/section2/'), $imageName);
                $section2->image2 = $imageName;
            }
            else{
                $file = $request->image2;
                $imageName = time() . " 2"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section2/'), $imageName);
                $section2->image2 = $imageName;
            }
        }
       
        if(!$section2->image1){
            $section2->image1="";
        }
        if(!$section2->image2){
            $section2->image2="";
        }
        
        $section2->update([
            "text1" => $request->text1,
            "text2" => $request->text2,
            "text3" => $request->text3,
            "mission" => $request->mission,
            "vision" => $request->vision,
            "image1" => $section2->image1,
            "image2" => $section2->image2,
           
            
            
        ]);
        //redirect user
        return redirect('/admin/dashboard')->with([
            "success" => "section2 Saved Succesfully"
        ]);
    
   
    

        


    }


    //section 3
    public function editsection3(section3 $section3)
    {
        return view('Admin.Edits.section3', compact('section3'));

    }
    public function updatesection3(Request $request, section3 $section3, $id)
    {
      
        $section3 = section3::find($id);
        if ($request->hasFile("image1")) {
            if($section3->image1){ 
                 
                unlink(public_path('images/section3/' . $section3->image1));
                $file = $request->image1;
                $imageName = time() ." 1"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section3/'), $imageName);
                $section3->image1 = $imageName;
            }
            else{
                $file = $request->image1;
                $imageName = time() ." 1". "_" . $file->getClientOriginalName();
                $file->move(public_path('images/section3/'), $imageName);
                $section3->image1 = $imageName;
            }
        }
        if ($request->hasFile("image2")) {
            if($section3->image2){
                unlink(public_path('images/section3/' . $section3->image2));   
                $file = $request->image2;
                $imageName = time() ." 2". "_" . $file->getClientOriginalName();
                $file->move(public_path('images/section3/'), $imageName);
                $section3->image2 = $imageName;
            }
            else{
                $file = $request->image2;
                $imageName = time() . " 2"."_" . $file->getClientOriginalName();
                $file->move(public_path('images/section3/'), $imageName);
                $section3->image2 = $imageName;
            }
        }
        if ($request->hasFile("image3")) {
		    if($section3->image3){
		        unlink(public_path('images/section3/' . $section3->image3));   
		        $file = $request->image3;
		        $imageName = time() . " 3"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/section3/'), $imageName);
		        $section3->image3 = $imageName;
		    }
		    else{
		        $file = $request->image3;
		        $imageName = time() ." 3". "_" . $file->getClientOriginalName();
		        $file->move(public_path('images/'), $imageName);
		        $section3->image3 = $imageName;
		    }
        }
        if ($request->hasFile("image4")) {
		    if($section3->image4){
		        unlink(public_path('images/section3/' . $section3->image4)); 
		        $file = $request->image4;
		        $imageName = time() . " 4"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/section3/'), $imageName);
		        $section3->image4 = $imageName;
		    }
		    else{
		        $file = $request->image4;
		        $imageName = time() ." 4". "_" . $file->getClientOriginalName();
		        $file->move(public_path('images/'), $imageName);
		        $section3->image4 = $imageName;
		    }
        }

        if(!$section3->image1){
            $section3->image1="";
        }
        if(!$section3->image2){
            $section3->image2="";
        }
        if(!$section3->image3){
            $section3->image3="";
        }
        if(!$section3->image4){
            $section3->image4="";
        }
        
        $section3->update([
            "details" => $request->details,
            "text1" => $request->text1,
            "text2" => $request->text2,
            "text3" => $request->text3,
            "text4" => $request->text4,
            "heading1" => $request->heading1,
            "heading2" => $request->heading2,
            "heading3" => $request->heading3,
            "heading4" => $request->heading4,
            "image1" => $section3->image1,
            "image2" => $section3->image2,
            "image3" => $section3->image3,
            "image4" => $section3->image4,
            
            
        ]);
        //redirect user
        return redirect('/admin/dashboard')->with([
            "success" => "section3 Saved Succesfully"
        ]);
    
   
    

        


    }

    
    //section 4
    public function editsection4(section4 $section4)
    {
        return view('Admin.Edits.section4', compact('section4'));

    }
    public function updatesection4(Request $request, section4 $section4, $id)
    {
      
        $section4 = section4::find($id);
        
        $section4->update([
            "video" => $request->video,
            "heading" => $request->heading,
            "text" => $request->text,
            "link" => $request->link,
           
            
            
        ]);
        //redirect user
        return redirect('/admin/dashboard')->with([
            "success" => "section4 Saved Succesfully"
        ]);
    
   
    

        


    }
    
    public function editaboutus(AboutUs $aboutus)
    {
        return view('Admin.Edits.aboutus', compact('aboutus'));

    }
    public function updateaboutus(Request $request, AboutUs $aboutus, $id)
    {
      
        $aboutus = AboutUs::find($id);
        
       
        if ($request->hasFile("icon1")) {
		    if($aboutus->icon1){
		        unlink(public_path('images/aboutus/' . $aboutus->icon1));   
		        $file = $request->icon1;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/aboutus/'), $imageName);
		        $aboutus->icon1 = $imageName;
		    }
		    else{
                $file = $request->icon1;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/aboutus/'), $imageName);
		        $aboutus->icon1 = $imageName;
		    }
        }
        if ($request->hasFile("image1")) {
		    if($aboutus->image1){
		        unlink(public_path('images/aboutus/' . $aboutus->image1));   
		        $file = $request->image1;
		        $imageName = time() . " 2"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/aboutus/'), $imageName);
		        $aboutus->image1 = $imageName;
		    }
		    else{
                $file = $request->image1;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/aboutus/'), $imageName);
		        $aboutus->image1 = $imageName;
		    }
        }
        if ($request->hasFile("image2")) {
		    if($aboutus->image2){
		        unlink(public_path('images/aboutus/' . $aboutus->image2));   
		        $file = $request->image2;
		        $imageName = time() . " 3"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/aboutus/'), $imageName);
		        $aboutus->image2 = $imageName;
		    }
		    else{
                $file = $request->image2;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/aboutus/'), $imageName);
		        $aboutus->image2 = $imageName;
		    }
        }

        if(!$aboutus->image1){
            $aboutus->image1="";
        }
        if(!$aboutus->image2){
            $aboutus->image2="";
        }
        if(!$aboutus->icon1){
            $aboutus->icon1="";
        }
     
       
        $aboutus->update([
            "heading1" => $request->heading1,
            "text1" => $request->text1,
            "text2" => $request->text2,
            "text3" => $request->text3,
            "question1" => $request->question1,
            "answer1" => $request->answer1,
            "phone" => $request->phone,
            "image1" => $aboutus->image1,
            "image2" => $aboutus->image2,
            "icon1" => $aboutus->icon1,
           
            
            
        ]);
        //redirect user
        return redirect('/admin/about-us')->with([
            "success" => "section4 Saved Succesfully"
        ]);
    
   
    

        


    }
    public function teamstore(Request $request)
    {
      
      
        
     
        if ($request->hasFile("image")) {
		
            $file = $request->image;
            $imageName = time() ."_" . $file->getClientOriginalName();
            $file->move(public_path('images/teams/'), $imageName);
          
        }
              
        
       
     
       
        Team::create([

            "name" => $request->name,
            "role" => $request->role,
            "description" => $request->description,
            "image" => $imageName,
            "status" => 1,
    
        ]);
        return redirect('/admin/team')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function testimonialstore(Request $request)
    {
      
      
        
     
        if ($request->hasFile("image")) {
		
            $file = $request->image;
            $imageName = time() ."_" . $file->getClientOriginalName();
            $file->move(public_path('images/testimonials/'), $imageName);
          
        }
              
        
       
     
       
        Testimonial::create([

            "name" => $request->name,
            "role" => $request->role,
            "description" => $request->description,
            "image" => $imageName,
            "status" => 1,
    
        ]);
        return redirect('/admin/testimonials')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function editteam(Team $team)
    {
        return view('Admin.Edits.team', compact('team'));

    }
    public function edittestimonial(Testimonial $testimonial)
    {
        return view('Admin.Edits.testimonial', compact('testimonial'));

    }
    public function updateteam(Request $request, Team $team, $id)
    {
      
        $team = Team::find($id);
        
      
        if ($request->hasFile("image")) {
		    if($team->image){
		        unlink(public_path('images/teams/' . $team->image));   
		        $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/teams/'), $imageName);
		        $team->image = $imageName;
		    }
		    else{
                $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/teams/'), $imageName);
		        $team->image = $imageName;
		    }
        }
        
     
       
        $team->update([

            "name" => $request->name,
            "role" => $request->role,
            "description" => $request->description,
            "image" => $team->image,
            "status" => 1,
    
        ]);
        return redirect('/admin/team')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function updatetestimonial(Request $request, Testimonial $testimonial, $id)
    {
      
      
        
        $testimonial= Testimonial::find($id);
          
        if ($request->hasFile("image")) {
		    if($testimonial->image){
		        unlink(public_path('images/testimonials/' . $testimonial->image));   
		        $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/testimonials/'), $imageName);
		        $testimonial->image = $imageName;
		    }
		    else{
                $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/testimonials/'), $imageName);
		        $testimonial->image = $imageName;
		    }
        }
              
        
       
     
       
        $testimonial->update([

            "name" => $request->name,
            "role" => $request->role,
            "description" => $request->description,
            "image" => $testimonial->image,
            "status" => 1,
    
        ]);
        return redirect('/admin/testimonials')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function blogstore(Request $request)
    {
      
      
        
     
        if ($request->hasFile("image")) {
		
            $file = $request->image;
            $imageName = time() ."_" . $file->getClientOriginalName();
            $file->move(public_path('images/blogs/'), $imageName);
          
        }
              
        
       
     
       
        Blog::create([

            "title" => $request->title,
            "description" => $request->description,
            "image" => $imageName,
            "status" => 1,
    
        ]);
        return redirect('/admin/blog')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function gallerystore(Request $request)
    {
      
      
        
     
        if ($request->hasFile("image")) {
		
            $file = $request->image;
            $imageName = time() ."_" . $file->getClientOriginalName();
            $file->move(public_path('images/gallery/'), $imageName);
          
        }
              
        
       
     
       
        Gallery::create([

            "image" => $imageName,
            "status" => 1,
    
        ]);
        return redirect('/admin/gallery')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function editblog(Blog $blog)
    {
        return view('Admin.Edits.blog', compact('blog'));

    }
    public function editgallery(Gallery $gallery)
    {
        return view('Admin.Edits.gallery', compact('gallery'));

    }
    public function updateblog(Request $request, Blog $blog, $id)
    {
      
        $blog = Blog::find($id);
        
      
        if ($request->hasFile("image")) {
		    if($blog->image){
		        unlink(public_path('images/blogs/' . $blog->image));   
		        $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/blogs/'), $imageName);
		        $blog->image = $imageName;
		    }
		    else{
                        $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/blogs/'), $imageName);
		        $blog->image = $imageName;
		    }
        }
              
        
       
     
       
        $blog->update([

            "title" => $request->title,
            "description" => $request->description,
            "image" => $blog->image,
            "status" => 1,
    
        ]);
        return redirect('/admin/blog')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    public function updategallery(Request $request, Gallery $gallery, $id)
    {
      
        $gallery = Gallery::find($id);
        
      
        if ($request->hasFile("image")) {
		    if($gallery->image){
		        unlink(public_path('images/gallery/' . $gallery->image));   
		        $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/gallery/'), $imageName);
		        $gallery->image = $imageName;
		    }
		    else{
                        $file = $request->image;
		        $imageName = time() . " 1"."_" . $file->getClientOriginalName();
		        $file->move(public_path('images/gallery/'), $imageName);
		        $gallery->image = $imageName;
		    }
        }
              
        
       
     
       
        $gallery->update([

            "image" => $gallery->image,
            "status" => 1,
    
        ]);
        return redirect('/admin/gallery')->with([
            "success" => "Details Saved Succesfully"
        ]);
    
   
    

        


    }
    


}
