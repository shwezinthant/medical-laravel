<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Comment;
use App\Models\PostProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //
    protected function createpost(){
        // dd("hello");
        return view('postpage.create_post');
    }
    protected function showpost(){
        $showposts = PostProduct::all();
        return view('postpage.post_list',compact('showposts'));
    }
    protected function storepost(Request $request){
        // dd($request->all());
        

			
	
			

		
        $validator = Validator::make($request->all(), [
            'posttitle' => 'required',
            'short' => 'required',
            'long' => 'required',
            'mainphoto' => 'required',
            
            'postby' => 'required',
            
            ]);

            if ($request->hasfile('postmainphoto')) {

                $image = $request->file('postmainphoto');
    
                $name = $image->getClientOriginalName();
    
                $mainphoto =  time()."-".$name;
    
                $image->move(public_path() . '/postphoto/', $mainphoto);
            }
            else{
    
                $photo_path = "default.jpg";
    
            }

       

            $post = PostProduct::create([
                'post_title'=> $request->posttitle, 
                'short_description' => $request->short,
                'long_description' => $request->long,
                'posted_by' => $request->postby,
                'main_photo_path' => $mainphoto,
            ]);
            return back();
    }
    protected function showpostui(){
        // $date = Carbon::now();
        // dd($date->toRfc850String());
        $posts = PostProduct::all();
        $arrayid = [];
        foreach($posts as $postarray){
            array_push($arrayid,$postarray->id);
        }
        
        $strid = json_encode($arrayid);
        //  dd($strid);
        foreach($posts as $post)
        // dd($post->sub_photo_path);
        // dd($post->post_title);
        $postinone = json_decode($post->sub_photo_path);
        //   dd($postinone);
        $comments = Comment::all();
        $replies = Reply::all();
        $rearray = [];
        foreach($comments as $repcom)
        {
            array_push($rearray,$repcom->id);
        }
        $strcomid = json_encode($rearray);
        $arraycom = [];
        foreach($comments as $commm)
        array_push($arraycom,$commm->id);
        $strcom = json_encode($arraycom);
        $Date = $post->created_at->toDateString();
       
        return view('postpage.postUI',compact('posts','postinone','comments','strcomid','arrayid','Date','strid','replies','arraycom','strcom'));
    }
    protected function storecomment(Request $request)
    {
        // dd($request->all());
      
            $post = Comment::create([
                'name'=> $request->uname, 
                'post_id' => $request->postID,
                'phone_no' => $request->phno,
                'email' => $request->email,
                'comment_description' => $request->comment_des,
                
            ]);
            
            $co = Comment::all();
                return back();
                
          
          
            

    }
    protected function storereply(Request $request)
    {
        // dd($request->all());
        $post = Reply::create([
            'comment_id'=> $request->CID, 
            'reply_by' => "Admin",
            
            'reply_description' => $request->reply,
            
        ]);
        return back();
    }
    public function updatePost($id)
    {
        $oldpost = PostProduct::find($id);
        return view('postpage.update_post',compact('oldpost'));
    }
    public function storeupdatePost(Request $request,$id)
    {
        $storeupPost = PostProduct::findOrFail($id);
        // dd($request->newphoto);
        $storeupPost->post_title = $request->title;
        $storeupPost->short_description = $request->short;
        $storeupPost->long_description = $request->long;
        $storeupPost->posted_by = $request->postby;
        
        if($request->newphoto != null){
        //    dd("hello");

                $image = $request->file('newphoto');
    
                $name = $image->getClientOriginalName();
    
                $mainphoto =  time()."-".$name;
    
                $image->move(public_path() . '/postphoto/', $mainphoto);
           
          
            $storeupPost->main_photo_path = $mainphoto;
        }
        
        
        
        $storeupPost->save();
        $showposts = PostProduct::all();
        return redirect('showpost')->with(compact('showposts'));
        
    }
    public function deletePost(Request $request){
        // dd("hello");
        $postID = $request->post_id;
        $deletepost = PostProduct::find($postID);
        // dd($deletepost);

        $deletepost->delete();
        
        return response()->json($deletepost);
    }
}
