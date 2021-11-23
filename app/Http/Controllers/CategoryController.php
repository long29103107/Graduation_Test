<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Models\Category;
use App\Models\Postcate;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Slide;
use App\Models\InforContact;

class CategoryController extends Controller
{
    // public function show_category_product($id){
    //     //chưa kiểm tra id
    //     $category_product = DB::table('categories')->orderBy('id','desc')->get();
    //     //$brand_product = DB::table('brand_product')->where('brand_status','1')->orderBy('brand_id','desc')->get();
    //     $category_by_id = DB::table('categories')
    //     ->join('products','products.category_id','=','categories.id')->where('categories.id','=',$id)->where('status','1')->get();
    //     $category_name = DB::table('categories')->where('id','=',$id)->limit(1)->get();//mặc định nó kiểm tra = nên không cẫn thêm = vào
    //     return view('user.show_category')->with('categories',$category_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name);
    //     // $category_product = DB::table('categories')->orderBy('id','desc')->get();
    //     // return view('user.show_category')->with('categories',$category_product);
    // }
    public function checkCategory($id)
    {
        if(empty($id))
        {
            abort(404);
        }
        $category = Category::whereNull('deleted_at')->where('id',$id)->first();
        if(empty($category))
        {
            abort(404);
        }
        return $category;
    }
    public function show_category_product(Request $request, $id){
        $row = $this->checkCategory($id);

        $list_id_product = array_unique(ProductDetail::whereNull('deleted_at')->get()->pluck('product_id')->toArray());
        $categories = Category::whereNull('deleted_at')->get();
        $category_post = PostCate::where('status',1)->get();
        $infor_contact = InforContact::all();

        $query = Product::whereNull('deleted_at')->whereIn('id',$list_id_product)->where('category_id',$id);
        $min_price = Product::min('price');
        $max_price = Product::max('price');

        if(!empty($sort = $request->sort))
        {
            switch($sort) {
                case 'az': 
                    $query->orderBy('name', 'asc');
                    break;
                case 'za': 
                    $query->orderBy('name', 'desc');
                    break;
                case 'asc': 
                    $query->orderBy('price', 'asc');
                    break;
                case 'desc': 
                    $query->orderBy('price', 'desc');
                    break;
                case 'new': 
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'old': 
                    $query->orderBy('created_at', 'asc');
                    break;
            };            
        }   
        $products = $query->paginate(12);
        
        $slides = Slide::whereNull('deleted_at')->orderBy('created_at','desc')->offset(0)->limit(4)->get();   
        $title = $row->name;
        $breadcrumbs = [
            [
                'name' => 'Trang chủ',
                'url'  => '/',
            ],
            [
                'name' => 'Danh mục',
            ],
            [
                'name' => $row->name,
            ],
        ];

        $display = 'grid';
        if(!empty($request->display))
        {   
           $display = $request->display; 
        }

        // if(isset ($_GET['sort_by'])){
        //     $sort_by = $_GET['sort_by'];
        //     if($sort_by=='giam_dan'){
        //         $category_by_id = DB::table('products')->join('categories','categories.id','products.category_id')->where('products.category_id',$id)->orderBy('price','DESC')->paginate(12);
        //     }elseif($sort_by=='tang_dan'){
        //         $category_by_id = DB::table('products')->join('categories','categories.id','products.category_id')->where('products.category_id',$id)->orderBy('price','ASC')->paginate(12);
        //     }elseif($sort_by=='kytu_za'){
        //         $category_by_id = DB::table('products')->join('categories','categories.id','products.category_id')->where('products.category_id',$id)->orderBy('name','DESC')->paginate(12);
        //     }elseif($sort_by=='kytu_az'){
        //         $category_by_id = DB::table('products')->join('categories','categories.id','products.category_id')->where('products.category_id',$id)->orderBy('name','ASC')->paginate(12);
        //     }
        // }else{
        //     $category_by_id = DB::table('products')->join('categories','categories.id','products.category_id')->where('products.category_id',$id)->orderBy('products.id','DESC')->paginate(12);
        // }
        // if(isset($_GET['start_price']) && $_GET['end_price']){
        //     $min_price = $_GET['start_price'];
        //     $max_price = $_GET['end_price'];

        //     $products= Product::whereBetween('price', [$min_price, $max_price])->orderBy('name','ASC')->paginate(12);
        // }
        
        return view('user.category.index', compact('display','categories','products','slides','title','breadcrumbs', 'category_post', 'id', 'infor_contact'));
    }
    // public function product_tabs(Request $request){
    //     $data = $request->all(); // lấy tất cả dữ liệ mà layout gửi qua
    //     $output = '';
    //     $product = Product::where('category_id', $data['cate_id'])->orderBy('id','DESC')->get();
    //     $product_count = $product->count();
    //     if($product_count>0){
    //         $output.= '
    //         <div class="tab-content">
    //                     <div class="tab-pane fade active in" id="tshirt" >
    //                         <div class="col-sm-3">
    //                             <div class="product-image-wrapper">
    //                                 <div class="single-products">
    //                                     <div class="productinfo text-center">
    //                                         <img src="images/home/gallery1.jpg" alt="" />
    //                                         <h2>$56</h2>
    //                                         <p>Easy Polo Black Edition</p>
    //                                         <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
    //                                     </div>
                                        
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>
    //         ';  
    //     }
        
    //     echo $ouput;
    // }
    // public function wrap_product(Request $request){
    //     Session::put('wrap-product', $request->wrap);
    //     echo json_encode(1);
    // }
}
