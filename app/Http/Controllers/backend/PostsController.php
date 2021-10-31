<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Postings;
use Auth;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Myposting=Postings::all();
          return view('backend.posts.index',compact('Myposting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//$data = request()->validate([
            //'new_file' => 'required',
        //]);
$this->validate($request,[
'title'=>'required|max:250',
'content'=>'required|max:2500',
'photo'=>'required|mimes:jpeg,jpg,png,gif',
]);

      if($request->hasFile('photo')){

$file = $request->photo;
$new_file=time().$file->getClientOriginalName();
$file->move('storage/post',$new_file);

    }

      //by this function we store info we get from the user by the function create (including form in the front end)
      //dd($request->all());
      Postings::create([
"title"=>$request->title,
"content"=>$request->content,
"photo"=>'storage/post/'.$new_file,
"user_id"=> Auth::id(),

]);



return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show data from the DB
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
        $Myposting=Postings::find($id);
          return view('backend.posts.edit',compact('Myposting'));
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
        $Myposting=Postings::find($id);
        if($request->hasFile('photo')){

  $file = $request->photo;
  $new_file=time().$file->getClientOriginalName();
  $file->move('storage/post',$new_file);
  $Myposting->photo = 'storage/post/'.$new_file;

      }


          $Myposting->title = $request->title;
          $Myposting->content = $request->content;
          $Myposting->update();
            return redirect()->route('posts.index');
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
          $Myposting=Postings::find($id);
          $Myposting->destroy($id);
          return redirect()->route('posts.index');
    }
}
