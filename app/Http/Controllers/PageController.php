<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Slide;
use App\Models\Categories;
use DB;
use Auth;

class PageController extends Controller
{
  //
  public function getHome() {
    $new_product = Products::orderBy('pro_id', 'DESC')->offset(0)->limit(8)->get();
    $featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(8)->get();
    $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();
    $slides  = Slide::all();
    $categories = Categories::all();
    $cat_products = DB::table('products') -> join('categories','products.pro_cat_id','=','categories.id') -> orderBy('pro_id','desc') ->get();
    $head_sale_products=Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(3)->get();
      // $product_detail = DB::table('products') -> join('categories','products.pro_cat_id','=','categories.id')->where('pro_id', $id)->first();
    return view('frontend.index',compact('new_product','featured_products','slides','categories','cat_products'
    ,'head_featured_products','head_sale_products','product_detail'));
  }
  public function getOurstory(){
    $categories = Categories::all();
    $head_sale_products=Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(3)->get();;
    $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();

    return view ('frontend.our-story',compact('categories','head_sale_products','head_featured_products'));
  }

  public function getList($id)
  {
    $cat_products= Products::where('pro_cat_id', $id)->paginate(6);
    $categories = Categories::all();
    $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();
    $head_sale_products= Products::where('promotion','<>','0')->orderBy('pro_id','desc')->take(3)->get();
    return view('frontend.shop',compact('cat_products','categories','head_featured_products','head_sale_products'));
  }
  public function getSearch(Request $request){
    $key = str_replace(' ', '%', $request->s);
    $search_product = Products::where('pro_name', 'like', '%'. $key.'%')->paginate(9);
    $categories = Categories::all();
    $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();
    $head_sale_products= Products::where('promotion','<>','0')->orderBy('pro_id','desc')->take(3)->get();
    return view('frontend.search', compact(
      'search_product',
      'categories','head_featured_products','head_sale_products'
    ));
  }

  public function getProductDetail($id)
  {
    $product_detail = DB::table('products') -> join('categories','products.pro_cat_id','=','categories.id')->where('pro_id', $id)->first();
    $related_product = Products::where('pro_id', '<>', $id)
    ->where('pro_cat_id', '=', $product_detail->pro_cat_id)
    ->take(3)
    ->get();
    $categories = Categories::all();
    $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();
    $head_sale_products= Products::where('promotion','<>','0')->orderBy('pro_id','desc')->take(3)->get();
    // $image_detail = FoodDetail::where('food_id', $id)->get();
    // $comment = Comment::where('pro_id', $id)->get();
    // $reviews = Review::where('pro_id', $id)->get();
    // $rating = count($reviews);
    // $total = 0;
    // $rate = " ";
    // if($rating != 0) {
    //   foreach($reviews as $review) {
    //     $total += $review->rating;
    //   }
    //   $rate = round($total/$rating, 2)*100/5;
    //   $foods = Food::where('id', $id)->select('rating')->update([
    //     'rating' => $rate,
    //   ]);
    // }
    // $rate = (float)$rate;
    return view('frontend.shop-detail', compact(
      'product_detail',
      'related_product',
      'categories','head_featured_products','head_sale_products'
    ));
  }
  public function getRegister()
  {           $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();


      $categories = Categories::all();

      $head_sale_products=Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(3)->get();

      return view('frontend.register',compact('head_featured_products','categories','head_sale_products'));
  }

  public function postRegister(Request $request)
  {
      $request->validate(
          [
              'name' => 'required|max:255',
              'email' => 'required|email|unique:users,email',
              'password' => 'required|min:6|max:20',
          ],
          [
              'name.required' => 'Yêu cầu nhập tên.',
              'email.required' => 'Yêu cầu nhập email',
              'email.unique' => 'Email đã tồn tại',
              'password.required' => 'Yêu cầu nhập mật khẩu',
              'password.min' => 'Mật khẩu quá ngắn',
          ]
      );
      $users = User::create([
          'name' => $request->name,
          'password' => bcrypt($request->password),
          'email' => $request->email,
          'level' => 3,
      ]);
      return redirect()->route('user.getLogin')->with('status', 'Create successful');
  }

  public function getLogin()
  {
    $head_featured_products =Products::where('pro_featured',1)->orderBy('pro_id','desc')->take(3)->get();


     $categories = Categories::all();

     $head_sale_products=Products::where('promotion','<>','0')->orderBy('promotion','desc')->take(3)->get();
      return view('frontend.login',compact('head_featured_products','categories','head_sale_products'));
  }

  public function postLogin(Request $request)
  {
      $request->validate(
          [
              'email' => 'required|email',
              'password' => 'required|min:6|max:20',
          ],
          [
              'email.required' => 'Yêu cầu nhập email',
              'email.email' => 'Email không đúng định dạng',
              'password.required' => 'Yêu cầu nhập mật khẩu',
          ]
      );
      $login = array('email' => $request->email, 'password' => $request->password);
      if(Auth::attempt($login)) {
          return redirect('home');
      } else {
          return back()->with(['flag' => 'danger', 'notice' => 'Login unsuccessful!']);
      }
  }

  public function getLogout()
  {
      Auth::logout();
      return redirect()->route('home');
  }


}
