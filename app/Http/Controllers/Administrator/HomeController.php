<?php

namespace App\Http\Controllers\Administrator;

use Validator;

use App\Http\Controllers\Controller;

use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
       return view('admin.home.index',compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
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
            'subject'=> ['required', 'string', 'max:255'],
            'job'=> ['required', 'string', 'max:255'],
            'description'=> ['required', 'string', 'max:1255'],
            'link'=> 'required',
            'image'=> 'required',



            
        ])->validate();
        $file = $request->file('image');
        
        if(!empty($file)){
            $image = time().".".$file->getclientOriginalExtension();
            $file->move('admin/images/home',$image);
        }
        Home::create([
            'image'=>$image,
            'title'=>$request->title,
            'subject'=>$request->subject,
            'job'=>$request->job,
            'description'=>$request->description,
            'link'=>$request->link
        ]);
        return redirect()->route('setting.index');
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
       


        $home = Home::findOrFail($id);
        return view('admin.home.edit',compact('home'));
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
            'subject'=> ['required', 'string', 'max:255'],
            'job'=> ['required', 'string', 'max:255'],
            'description'=> ['required', 'string', 'max:1255'],
            'link'=> 'required'
           
            
        ])->validate();

        $home = Home::findOrFail($id);
        $file = $request->file('image');
        if(!empty($file)){
            if(file_exists('admin/images/home/'. $home->image)){
                unlink('admin/images/home/'. $home->image);
            }
            $image = time().".".$file->getClientOriginalExtension();
            $file->move('admin/images/home',$image);
        }else{
            $image = $home->image;
        }
        $home->update([
            'image'=>$image,
            'title'=>$request->title,
            'job'=>$request->job,

            'description'=>$request->description,

            'link'=>$request->link,
            'subject'=>$request->subject

        ]);
        return redirect('home/setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $home = Home::findOrFail($id);
        $home->delete();
        return redirect('home/setting');
    }
}
