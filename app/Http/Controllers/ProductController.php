<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;



class ProductController extends Controller
{
    //
    protected function showTable()
    {
        $showproduct = Product::all();
        // dd($showproduct);
        return view('admin2.tables',compact('showproduct'));
    }
    protected function createproduct()
    {
        $all_categories= Category::all();
        return view('product.create_product',compact('all_categories'));
    }
    protected function storeProducts(Request $request)
    {
        //  dd($request->all());
        //  $mainphotos = $request->file('mainphoto')->getClientOriginalName();
        //  $mainpath
       
        //  dd($mainphotos);
        $validator = Validator::make($request->all(), [
        'name'=> 'required', 
        'category_id' => 'required',
        'mainphoto' => 'required',
        'composition' => 'required',
        ]);
        //    if ($validator->fails()) {

        //     return redirect()->back();
        // }
            
            
            
            
            

        // subphoto
        if($request->images){
            $subArray = [];
            foreach($request->images as $photosub)
            {
               
                
                $name = $photosub->getClientOriginalName();
                $subimage =  time()."-".$name;
                array_push($subArray,$subimage);
                $photosub->move(public_path() . '/photo/', $subimage);
            }
            $subString = json_encode($subArray);

        }
        else{
            $subString = $request->images;

        }
       
       
       
    //    dd($subString);
    //    dd($subArray);
       
        //  end
        if ($request->hasfile('mainphoto')) {

			$image = $request->file('mainphoto');

			$name = $image->getClientOriginalName();

			$mainphoto =  time()."-".$name;

			$image->move(public_path() . '/photo/', $mainphoto);
		}
		else{

			$photo_path = "default.jpg";

		}
        // dd($mainphoto);

        $products = Product::create([
            'name'=> $request->name, 
            'sub_name' =>$request->sub,   
            'brand_name' => $request->brand, 
            'category_id' => $request->categoryID, 
            'type' => $request->type, 
            'main_photo_path' => $mainphoto,
            'sub_photo_path' => $subString,
            'composition' => $request->composation, 
            'medication' => $request->medication, 
            'usage' => $request->usage, 
            'instock_qty' => $request->instock_qty,
            'purchase_price' => $request->purprice,  
            'selling_price' => $request->sellprice, 
            'country_of_origin' => 	$request->coo, 							
        ]);
        return back();
    }
    protected function createcategory()
    {
        
        return view('Category.create_category');
    }
    protected function storecategory(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name'=> 'required', 
            
            'catphoto' => 'required', 
            'description' => 'required',
            
            ]);
        
            if ($request->hasfile('catphoto')) {

                $image = $request->file('catphoto');
    
                $name = $image->getClientOriginalName();
    
                $catphoto =  time()."-".$name;
    
                $image->move(public_path() . '/category/', $catphoto);

            
            }
            else{
    
                $photo_path = "default.jpg";
    
            }
			
        
        $storecate = Category::create([
            'name' => $request->name,
            'photo' => $catphoto,
            'description' => $request->description, 										
        ]);
        return back();
    }
    public function DetailProducts(Request $request)
    {
        // dd($request->all());
        $productdetail = Product::Find($request->pid);
         
         
         
        return view('product.product_detail',compact('productdetail'));
    }
  
    public function showCategoryProduct(Request $request)
    {

        $products = Product::where('category_id',$request->category_id)->get();

        return response()->json([
            $products,$request->category_id
        ]);
    }
    public function showlessCategoryProduct(Request $request)
    {

        $products = Product::where('category_id',$request->category_id)->take(4)->get();

        return response()->json([
            $products,$request->category_id
        ]);
    }
    public function deleteProduct(Request $request){
        // dd($request->product_id);
        $productID = $request->product_id;
        $deleteproducts = Product::find($productID);

        $deleteproducts->delete();
        
        return response()->json($deleteproducts);
    }
    public function updateProduct($id){
        // dd($id);
        $all_categories = Category::all();
        $productupdate = Product::find($id);
        // dd($productupdate);
        $subold = json_decode($productupdate->sub_photo_path);
        // dd($subold);
        // $subone = $subold[0];
        // $subtwo = $subold[1];
        // $subthree = $subold[2];
        $catego = Category::find($productupdate->category_id);
        // dd($productupdate);
        
        return view('product.update_product',compact('productupdate','all_categories','catego','subold','id'));

    }
    protected function updateStoreProduct(Request $request,$id)
    {
        // dd($id);
        // dd($request->all());
        
        $storeupProduct = Product::findOrFail($id);
        // dd($storeupProduct);
        $storeupProduct->name = $request->name;
        $storeupProduct->sub_name = $request->sub;
        $storeupProduct->category_id = $request->categoryID;
        $storeupProduct->type = $request->type;
        $storeupProduct->brand_name = $request->brand;
        if($request->newmainphoto != null){
        //    dd("hello");

                $image = $request->file('newmainphoto');
    
                $name = $image->getClientOriginalName();
    
                $mainphoto =  time()."-".$name;
    
                $image->move(public_path() . '/photo/', $mainphoto);
           
          
            $storeupProduct->main_photo_path = $mainphoto;
        }
        
        if($request->newimages != null)
        {
            $subArray = [];
            foreach($request->newimages as $photosub)
            {
               
                
                $name = $photosub->getClientOriginalName();
                $subimage =  time()."-".$name;
                array_push($subArray,$subimage);
                $photosub->move(public_path() . '/photo/', $subimage);
            }
            
            $subString = json_encode($subArray);
            // dd($subString);
            $storeupProduct->sub_photo_path = $subString;
            // dd($storeupProduct->sub_photo_path);
        }
        $storeupProduct->composition = $request->composation;
        $storeupProduct->medication = $request->medication;
        $storeupProduct->usage= $request->usage;
        $storeupProduct->country_of_origin = $request->coo;
        $storeupProduct->purchase_price = $request->purprice;
        $storeupProduct->instock_qty = $request->instock_qty;
        $storeupProduct->selling_price = $request->sellprice;
        $storeupProduct->save();
        $showproduct = Product::all();
        return redirect('showingTable')->with(compact('showproduct'));
    }
    public function showproductui()
    {
        $productone = Product::find(17);
        $arraysub = json_decode($productone->sub_photo_path);
    
        $photo1 = $arraysub[0];
        $photo2 = $arraysub[1];
        $photo3 = $arraysub[2];
        $photo4 = $arraysub[3];
        return view('product.product_detail',compact('productone','arraysub','photo1','photo2','photo3','photo4'));
    }
    public function productlist()
    {
        return view('product.product_continue');
    }
    public function productui()
    {
       
        // dd($productone);
        return view('product.product_detail');
    }
    public function showCate()
    {
        $showcategory = Category::all();
        // dd($showproduct);
        return view('Category.category_list',compact('showcategory'));
    }
    public function updateCategory($id)
    {
        $oldcate = Category::find($id);
        return view('Category.update_category',compact('oldcate'));
    }
    public function storeupdateCategory(Request $request,$id)
    {
        $storeupcate = Category::findOrFail($id);
        // dd($request->newphoto);
        $storeupcate->name = $request->name;
        $storeupcate->description = $request->long;
        
        
        
        if($request->newphoto != null){
        //    dd("hello");

                $image = $request->file('newphoto');
    
                $name = $image->getClientOriginalName();
    
                $mainphoto =  time()."-".$name;
    
                $image->move(public_path() . '/photo/', $mainphoto);
           
          
            $storeupcate->photo = $mainphoto;
        }
        
        
        
        $storeupcate->save();
        $showcategory = Category::all();
        return redirect('showcate')->with(compact('showcategory'));
    }

    public function deleteCate(Request $request)
    {
        $cateID = $request->cate_id;
        $deletecate = Category::find($cateID);

        $deletecate->delete();
        
        return response()->json($deletecate);
    }

   

}
