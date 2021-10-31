<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class posts extends Controller
{
public function post($id,$name){
//  return view('main.post')->with('id_post',$id);
// keda ana 3mlt function esmaha post bt3ml view lel saf7a eli esmaha post bs fih update 3n el video
//main da esm el folder
//with di 3shan ab3at lel view el parameter $id
//lw 3ayza a3mel return le 2 valiable mn el url lel view bst5dm compact zi eli gaya
return view('main.post',compact('id','name')); //da el update msh fl video

}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
                return "welcome index ".$id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "create";
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
                return "show". $id;
    }
    public function hello()
    {
$name="demi";
$age="30";

               return view('backend.hello',compact('name','age'));
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
    }

public function posts(){
 return view('backend.posts');

}
public function contact(){
 return view('backend.contact_us');

}








}
