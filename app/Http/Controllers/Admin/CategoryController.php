<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;
class CategoryController extends Controller
{
    //
    public function getCate(){
      $data['catlist']= Categories::all();
      return view('backend.category.category',$data);

    }
    public function postCate(Request $request){
      $request-> validate(
        [
            'cat_name' => 'required|unique:categories,cat_name|max:255',
        ],
        [
            'cat_name.required' => 'Yêu cầu nhập tên.',
            'cat_name.unique' => 'Tên đã tồn tại.',
          ]
        );
      $category = Categories::create([
        'cat_name' => $request -> cat_name,
        'cat_slug' => str_slug($request->cat_name),
      ]);
      return back() -> with('status' ,'Tao danh muc thanh cong');

    }
    public function geteditCate($id){
      $data['cat']=Categories::findOrFail($id);
        return view('backend.category.edit',$data);
      }
      public function posteditCate(Request $request,$id){
        $request-> validate(
          [
              'cat_name' => 'required|unique:categories,cat_name|max:255',
          ],
          [
              'cat_name.required' => 'Yêu cầu nhập tên.',
              'cat_name.unique' => 'Chua thay doi ten.',
            ]
          );
          $category = Categories::where('id' ,$id)->update([
            'cat_name' => $request -> cat_name,
            'cat_slug' => str_slug($request->cat_name),
          ]);
    return redirect('admin/category') -> with('status' ,'Sua danh muc thanh cong');

  }
  public function getdelCate($id){
    // $data =Categories::where('id',$id)->delete();
    Categories::destroy($id);
    return back() -> with('status','Xoa thanh cong');
  }
    }
