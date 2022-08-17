<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('index',compact('categories'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function sendMail(MailRequest $request)
    {
        $mailData = [
            'email' => $request->email,
            'body' => $request->message,
            'name' => $request->name,
            'title'=> 'Enquires from Customer'
        ];
        Mail::to('7diamond.anbmyanmar@gmail.com')->send(new ContactMail($mailData));

        return response()->json([
            
            'status'=>1,
        ]);
    }
 
    public function productPage()
    {
        $categories = Category::all();
        // $productsoffirst = Category::first()->products()->paginate(4);        
       return view('product',compact('categories'));
    }
    public function productDetailPage(Product $product)
    {
        $recmdproducts= $product->category->products()->whereNotIn( 'id', [$product->id])->get();
        
        $count=0;
        foreach((array)$recmdproducts as $cont){
            $count+=count($cont);
        }
        $count=ceil($count/4);
        $subtrim = trim( $product->sub_photo_path,'[]');
         $subphoto=  explode(',', $subtrim);
        return view('pdetail',compact('product','subphoto','recmdproducts','count'));
        
    }
    public function event()
    {
        return view('events');
    }
   
}
