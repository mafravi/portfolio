<?php

namespace App\Http\Controllers\Administrator;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        validator::make($request->all(),[
            'title'=> ['required', 'string', 'max:255'],
           
            'description'=> ['required', 'string', 'max:1255'],
            'link'=>['required']
           
            
        ])->validate();
        About::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'link'=>$request->link

        ]);
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $about = About::findorFail($id);
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        validator::make($request->all(),[
            'title'=> ['required', 'string', 'max:255'],
           
            'description'=> ['required', 'string', 'max:1255'],
            'link'=>['required']
           
            
        ])->validate();

        $about= About::findOrFail($id);
        $about->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'link'=>$request->link

        ]);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $home = About::findOrFail($id);
        $home->delete($id);
        return redirect('home/about');
    }
}
