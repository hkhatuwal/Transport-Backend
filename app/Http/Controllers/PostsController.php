<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_data(Request $request)
    {
        $id=$request->id;
        $latitude=$request->latitude;
        $longitude=$request->longitude;
        $start=$request->start;
        $end=$request->end;
        $file=$request->file('image');       
        $image_name=time().'.'.$file->getClientOriginalExtension();
        $file->move('images/',$image_name);
        

        $post=new posts();
        $post->driver_id=$id;
        $post->latitude=$latitude;
        $post->longitude=$longitude;
        $post->end=$end;
        $post->start=$start;
        $post->driver_id=$id;
        $post->image_url='images/'.$image_name;


        
        $res=$post->save();
        return $res;
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function get_post_data()
    {
        $post =new posts();
        $res=$post::orderBy('created_at', 'DESC')->get();
        //
        return $res;
    }
    public function get_post_data_by_id(Request $request)
    {
        $post =new posts();
        $res=$post::orderBy('created_at', 'DESC')->where('driver_id',$request->id)->get();
        $mainArray=[];
        foreach ($res as $item) {
            $item['image_url']=URL::to('/').'/'.$item['image_url'];
            array_push($mainArray,$item);

            # code...
        }
        //
        return $mainArray;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        //
    }
}
