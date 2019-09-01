<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Gallary;
Use App\Photo;

class AdminGallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallary = Gallary::all();

        return view('admin.gallary.index',compact('gallary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/gallary/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gallary = $request->all();
        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $gallary['photo_id']=$photo->id;
        }
        Gallary::create($gallary);
        return redirect('/admin/gallary');
    
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
        //
        $gallary = Gallary::findOrFail($id);
        return view('admin.gallary.edit', compact('gallary'));
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
        //
        $gallary=Gallary::findOrFail($id);
        $input=$request->all();

        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo=Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;

        }
        $gallary->update($input);
        return redirect('/admin/gallary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallary=Gallary::findOrFail($id);
        unlink(public_path() . $gallary->photo->file);
        $gallary->delete();
        return redirect('/admin/gallary');
    }
}
