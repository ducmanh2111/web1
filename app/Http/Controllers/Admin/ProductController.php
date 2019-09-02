<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Promotion;
use DB;
class ProductController extends Controller
{
    //
    public function getProduct(){
      $data['products']=DB::table('products') -> join('categories','products.pro_cat_id','=','categories.id') -> orderBy('pro_id','desc') ->get();
      return view('backend.product.index',$data);
    }
    public function getAddProduct(){
      $categories = Categories::all();
      return view('backend.product.add',compact('categories'));
    }
    public function postAddProduct(Request $request){
      $request->validate(
          [
              'pro_name' => 'required|unique:products,pro_name|max:255',
              'pro_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              'pro_price' => 'required',
              'pro_description' => 'required',

          ],
          [
              'pro_name.required' => 'Yêu cầu nhập tên.',
              'pro_name.unique' => 'Tên đã tồn tại.',
              'pro_price.required' => 'Yêu cầu nhập giá',
              'pro_description.required' => 'Yêu cầu nhập mô tả',

              'pro_image.required' => 'Yêu cầu chọn ảnh',
              'pro_image.mimes' => 'Ảnh phải có đuôi là jpeg, png, gif, svg',
          ]
      );
      if ($request->hasFile('pro_image') ){
          $file = $request->pro_image->getClientOriginalName();
          $request->pro_image->storeAs('public',$file);

          $product = Products::create([
              'pro_name' => $request->pro_name,
              'pro_slug' =>str_slug($request->pro_name),
              'pro_price' => $request->pro_price,
              'pro_description' => $request->pro_description,
              'pro_featured' =>$request->pro_featured,
               'pro_image' => $file,
              'pro_cat_id' => $request->category,
              'promotion' => $request->promotion,
          ]);

          return back()->with('status','Create successful.');
      }
    }
    public function getEditProduct($id){

      $data['product'] =  Products::findOrFail($id);
      $data['catlist'] = Categories::all();
      return view('backend.product.edit', $data);
    }
    public function postEditProduct(Request $request,$id){
      $request->validate(
          [
              'pro_name' => 'required|unique:products,pro_name|max:255',
              'pro_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              'pro_price' => 'required',
              'pro_description' => 'required',

          ],
          [
              'pro_name.required' => 'Yêu cầu nhập tên.',
              'pro_name.unique' => 'Tên đã tồn tại.',
              'pro_price.required' => 'Yêu cầu nhập giá',
              'pro_description.required' => 'Yêu cầu nhập mô tả',

              'pro_image.required' => 'Yêu cầu chọn ảnh',
              'pro_image.mimes' => 'Ảnh phải có đuôi là jpeg, png, gif, svg',
          ]
      );
      if ($request->hasFile('pro_image') ){
          $file = $request->pro_image->getClientOriginalName();
          $request->pro_image->storeAs('public',$file);

          $product = Products::where('pro_id', $id)->update([
              'pro_name' => $request->pro_name,
              'pro_slug' =>str_slug($request->pro_name),
              'pro_price' => $request->pro_price,
              'pro_description' => $request->pro_description,
              'pro_image' => $file,
              'pro_featured' =>$request->pro_featured,

              'pro_cat_id' => $request->category,
              'promotion' => $request->promotion,
          ]);

          return back()->with('status','Create successful.');
      }
    }
    public function getdelProduct($id){
      Products::destroy($id);
      return back() ->with('status','xoa thanh cong');
    }
}
