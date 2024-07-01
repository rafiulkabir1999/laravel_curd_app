<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        // $blogs = Blog::with(['user' => function($query){
        //     $query->where('email','random@gmail.com');
        // }])
        // ->where('email', 'random@gmail.com') // Replace with your actual where condition
        //->get();
        $blogs = Blog::where('user_id',$user->id)->get();
        //return $blogs;
        return view('blog.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //   dd(Auth::user()->id);
        $request->validate([
            //'title'=>'required|min:10|max:30',
            //'description'=>'required|min:50|max:100',
            //'image'=>"required|image|mimes:jpeg,png,jpg|max:2048"
        ]);
        
        $filename = time().'.'.$request->image->extension();

        if ($request->hasFile('image')) {
            // $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $filename); 
            
            $blog  = new Blog();
            $blog->user_id = Auth::user()->id;
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->img = $filename;
            $blog->save();
            
            return redirect()->route('blog.index')->with('file upload','sussessfully file uploaded');
        } else {
   
            redirect()->back()->withErrors(['message' => 'Please upload an image file.']);
        }

            // $request->image->move(public_path('uploads',$filename));
            
           
           
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
