<?php

namespace App\Http\Controllers;
Use App\Http\Requests\UsersRequest;
Use App\Http\Requests\UsersEditRequest;
Use App\User;
Use App\Role;
Use App\Photo;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles=Role::pluck('name','id')->all();

        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        // User::create($request->all());
        // return redirect('/admin/users');
        // //return $request->all();
        if(trim($request->password)==''){
            $input=$request->except('password');
        }else{
            $input=$request->all();
            $input['password']=bcrypt($request->password);
        }
        
        if($file = $request->file('photo_id'))
        {
            $name=time() . $file->getClientOriginalName();

            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        
        User::create($input);
        return redirect('/admin/users');
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
        return view('admin.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // die('123');
        //
        $user = User::findOrFail($id);
        $roles=Role::pluck('name','id')->all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        $user = User::findOrFail($id);

        if(trim($request->password)==''){
            $input=$request->except('password');
        }else{
            $input=$request->all();
            $input['password']=bcrypt($request->password);
        }
        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;

        }
        $user->update($input);
        return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       $user= User::findOrFail($id);
       unlink(public_path() . $user->photo->file);
       $user->delete();
        return redirect('/admin/users');

    }
}
