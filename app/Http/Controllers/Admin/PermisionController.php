<?php

namespace App\Http\Controllers\Admin;

use App\Model\admin\Permision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $permisions = Permision::all();
        return view('admin.permission.show',compact('permisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50|unique:permisions',
            'for'  => 'required'
            ]);
        $permision = new Permision;
        $permision->name = $request->name;
        $permision->for = $request->for;
        $permision->save();
        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\admin\Permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function show(Permision $permision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\admin\Permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permision = Permision::find($id);
        return view('admin.permission.edit',compact('permision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\admin\Permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, 
        [
            'name' => 'required|max:50',
            'for'  => 'required'
        ]);

        $permision = Permision::find($id);
        $permision->name = $request->name;
        $permision->for = $request->for;
        $permision->save();
        return redirect(route('permission.index'))->with('message','Permission Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\admin\Permision  $permision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permision::where('id',$id)->delete();
        return redirect()->back()->with('message','Permission Deleted');
    }
}
