<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Cart;
use App\Models\ProductDetail;
use App\Models\Category;
use App\Models\PostCate;
use App\Models\InforContact;

class CartController extends Controller
{
    public function checkSaveCart($value,$message)
    {
        if(empty($value))
        {
            return response()->json([
                'error'=> true,
                'message'=>"Không tìm thấy ".$message,
                'data'=>null,
            ]);
        }
    }

    public function save_cart(Request $request){
        //Validate
        $product_id = $request->product_id;
        $color_id = $request->color;
        $size_id = $request->size;
        $quantity = $request->quantity;
        
        $this->checkSaveCart($product_id,'sản phẩm');
        $this->checkSaveCart($color_id,'màu sắc');
        $this->checkSaveCart($size_id,'kích thước');

        if(empty($quantity))
        {
            return response()->json([
                'error'=> true,
                'message'=>"Vui lòng nhập số lượng",
                'data'=>null,
            ]);
        }

        //Get item product
        $product = ProductDetail::where('deleted_at')
                                ->where('size_id',$size_id)
                                ->where('color_id',$color_id)
                                ->where('product_id',$product_id)
                                ->with(['product','color','size'])
                                ->first();
        //Check product
        if(empty($product))
        {
            return response()->json([
                'error'=> true,
                'message'=>"Không tìm thấy sản phẩm",
                'data'=>null,
            ]);
        }

        $data = [
            'id' => $product->id,
            'product'=>$product->product_id,
            'name' => $product->product->name,
            'qty' => $quantity,
            'price' => $product->product->price, 
            // 'weight' => 0,
            'options' => [ 
                'size' => [
                    'id' => $product->size->id,
                    'name'=>$product->size->name,
                ],
                'color' => [
                    'id' => $product->color->id,
                    'name'=>$product->color->name,
                ],
            ]    
        ];
        // Session::forget('cart');
        $session_cart = Session::get('cart');
        $array_product = [];
        $flag = false;

        if(!Session::has('cart') || count(Session::get('cart')) == 0)
        {
            $product_detail = ProductDetail::find($data['id']);

            if(!empty($product_detail))
            {
                if($product_detail->quantity < $data['qty'])
                {
                    return response()->json([
                        'error'=> true,
                        'message'=>"Còn ".$product_detail->quantity." sản phẩm",
                        'data'=> Session::get('cart'),
                    ]);
                }
            }
            
            array_push($array_product,$data);
            Session::put('cart',$array_product);

            return response()->json([
                'error'=> false,
                'message'=>"Thêm vào giỏ hàng thành công",
                'data'=> Session::get('cart'),
            ]);
        }
        
        if(count($session_cart) > 0 )
        {
            foreach( $session_cart as $key=>$cart)
            {
                if($cart["id"] == $data["id"] && $cart['options']['size']['id'] == $data['options']['size']['id'] && $cart['options']['color']['id'] == $data['options']['color']['id'])
                {
                    $session_cart[$key]['qty'] = $data['qty'];

                    $product_detail = ProductDetail::find($data['id']);

                    if(!empty($product_detail))
                    {
                        if($product_detail->quantity < $session_cart[$key]['qty'])
                        {
                            return response()->json([
                                'error'=> true,
                                'message'=>"Còn ".$product_detail->quantity." sản phẩm",
                                'data'=> Session::get('cart'),
                            ]);
                        }
                    }
                    $flag = true;
                }
            }
            if(!$flag)
            {
                $product_detail = ProductDetail::find($data['id']);

                if(!empty($product_detail))
                {
                    if($product_detail->quantity < $data['qty'])
                    {
                        return response()->json([
                            'error'=> true,
                            'message'=>"Còn ".$product_detail->quantity." sản phẩm",
                            'data'=> Session::get('cart'),
                        ]);
                    }
                }

                $product_detail = ProductDetail::find($data['id']);

                if(!empty($product_detail))
                {
                    if($product_detail->quantity < $data['qty'])
                    {
                        return response()->json([
                            'error'=> true,
                            'message'=>"Còn ".$product_detail->quantity." sản phẩm",
                            'data'=> Session::get('cart'),
                        ]);
                    }
                }
                array_push($session_cart,$data);
            }

            Session::put('cart',$session_cart);
        }
        
        return response()->json([
            'error'=> false,
            'message'=>"Thêm vào giỏ hàng thành công",
            'data'=> Session::get('cart'),
        ]);

        // $cart = Session::get('cart');
        // $array_cart = [];

        // if(count($cart) > 0)
        // {
        //     foreach($cart as $item)
        //     {
        //         if($item['id'] == $data['id'] && $item['id_color'] == $data['id_size'] && $item['id_color'] == $data['id_color'])
        //         array_push($array_cart,$item);
        //     }
        // }
        
        // array_push($array_cart,$data);
        
        // if(!empty($array_cart))
        // {
        //     Session::put('cart',$array_cart);
        //     return response()->json([
        //         'error'=> true,
        //         'message'=>"Thêm thành cônf",
        //         'data'=>null,
        //     ]);
        // }
        
        // foreach(Cart::content() as $item)
        // {
        //     // dd($item->id,$item->options->size['id'],$item->options->color['id']);
        // }
        
    
       

        // Session::put($data['product']['id'], $data);
        // dd(Session::get('cart'));
        // $quantity = $request->quantity;
        // $product_info = DB::table('products')->where('id', $product_id)->first();
        
        // if(isset($_SESSION["total_qty"][$product_id])){
        //     $_SESSION["total_qty"][$product_id] += $quantity;
        // }

        // $data['id'] = $product_info->id;
        // $data['qty'] = $quantity;
        // $data['name'] = $product_info->name;
        // $data['price'] = $product_info->price;
        // Cart::add($data);
        // return Redirect::to('/cart');
    }
    
    public function show_cart() {
        $categories = Category::whereNull('deleted_at')->get();
        $category_post = PostCate::where('status',1)->get();
        $infor_contact = InforContact::all();
        $data = [
            'categories' => $categories,
            'category_post' => $category_post,
            'infor_contact' => $infor_contact,
            'title' => 'Giỏ hàng',
            'breadcrumbs' => [
                [
                    'name' => 'Trang chủ',
                    'url'  => '/',
                ],
                [
                    'name' => 'Giỏ hàng',
                ],  
            ]
        ];
        $show_cate = DB::table('categories')->get();
        return view('user.show_cart',$data);
    }

    public function deleteCart(Request $request)
    {
        $product_id = $request->product_id;
        $color_id = $request->color_id;
        $size_id = $request->size_id;

        $session_cart = Session::get('cart');

        foreach ($session_cart as $key => $item) {
            if($item['id'] == $product_id && $item['options']['size']['id'] == $size_id && $item['options']['color']['id'] == $color_id) {
                unset($session_cart[$key]);
            }
            else
            {
                $session_cart[$key]['path'] = getImageProduct($item['product']);
            }
        }
        
        Session::put('cart',$session_cart);
        
        return response()->json([
            'error'=> false,
            'message'=>"Xoá sản phẩm khỏi giỏ hàng",
            'data'=> Session::get('cart'),
        ]);
    }

    public function updateCart(Request $request)
    {
        $product_detail_id = $request->product_id;
        $color_id = $request->color_id;
        $size_id = $request->size_id;
        $quantity = $request->quantity;

        $session_cart = Session::get('cart');

        foreach ($session_cart as $key => $item) {
            if($item["id"] == $product_detail_id && $item['options']['size']['id'] == $size_id && $item['options']['color']['id'] == $color_id)
            {
                $product_detail = ProductDetail::find($product_detail_id);

                if(!empty($product_detail))
                {
                    if($product_detail->quantity < $quantity)
                    {
                        return response()->json([
                            'error'=> true,
                            'message'=>"Còn ".$product_detail->quantity." sản phẩm",
                            'data'=> Session::get('cart'),
                        ]);
                    }
                }
                $session_cart[$key]['qty'] = $quantity;
                $data = $session_cart[$key];
            }
        }

        Session::put('cart',$session_cart);

        return response()->json([
            'error'=> false,
            'message'=>"Cập nhật giỏ hàng thành công",
            'data'=> Session::get('cart'),
            'value'=>$data,
        ]);
    }
    //     public function show_cart_ajax(Request $request){
//         //seo 
//        $meta_desc = "Giỏ hàng của bạn"; 
//        $meta_keywords = "Giỏ hàng Ajax";
//        $meta_title = "Giỏ hàng Ajax";
//        $url_canonical = $request->url();
//        //--seo
//        $cate_product = DB::table('categories')->orderby('id','desc')->get();

//        return view('user.show_cart_ajax')->with('categories',$cate_product)
//        ->with('meta_desc',$meta_desc)
//        ->with('meta_keywords',$meta_keywords)
//        ->with('meta_title',$meta_title)
//        ->with('url_canonical',$url_canonical);
//    }
//     public function add_cart_ajax(Request $request){
//         // return response()->json([
//         //     'data'=>$request->all(),
//         // ]);
//         $data = $request->all();
//         $session_id = substr(md5(microtime()),rand(0,26),5);
//         $cart = Session::get('cart');
//         if($cart==true){
//             $is_avaiable = 0;
//             foreach($cart as $key => $val){
//                 if($val['product_id']==$data['cart_product_id']){
//                     $is_avaiable++;
//                 }
//             }
//             if($is_avaiable == 0){
//                 $cart[] = array(
//                 'session_id' => $session_id,
//                 'product_name' => $data['cart_product_name'],
//                 'product_id' => $data['cart_product_id'],
//                 // 'product_image' => $data['cart_product_image'],
//                 'product_qty' => $data['cart_product_qty'],
//                 'product_price' => $data['cart_product_price'],
//                 );
//                 Session::put('cart',$cart);
//             }
//         }else{
//             $cart[] = array(
//                 'session_id' => $session_id,
//                 'product_name' => $data['cart_product_name'],
//                 'product_id' => $data['cart_product_id'],
//                 // 'product_image' => $data['cart_product_image'],
//                 'product_qty' => $data['cart_product_qty'],
//                 'product_price' => $data['cart_product_price'],

//             );
//             Session::put('cart',$cart);
//         }
//         // Session::save();
//         // {
//             return response()->json([
//                 'error'=> false,
//                 'message'=>"Thêm vào giỏ hàng thành công",
//                 'data'=>Session::get('cart'),
//             ]);
//         // }
//     }
// public function checkQuantity($product_detail_id,$quantity,$cart)
// {
//     $product_detail = ProductDetail::find($product_detail_id);

//     if(!empty($product_detail))
//     {
//         if($product_detail->quantity < $quantity)
//         {
//             return response()->json([
//                 'error'=> true,
//                 'message'=>"Còn ".$product_detail->quantity." sản phẩm",
//                 'data'=>$cart,
//             ]);
//         }
//     }
// }

//     public function delete_product($session_id){
//         $cart = Session::get('cart');
//         if($cart==true){
//             foreach($cart as $key => $val){
//                 if($val['session_id']==$session_id){
//                     unset($cart[$key]);
//                 }
//             }
//             Session::put('cart',$cart);
//             return redirect()->back()->with('message','Xóa sản phẩm thành công');
//         }else{
//             return redirect()->back()->with('message','Xóa sản phẩm thất bại');
//         }
//     }
// public function update_cart(Request $request){
//         $data = $request->all();
//         $cart = Session::get('cart');
//         if($cart==true){
//             foreach($data['cart_qty'] as $key => $qty){
//                 foreach($cart as $session => $val){
//                     if($val['session_id']==$key){
//                         $cart[$session]['product_qty'] = $qty;
//                     }
//                 }
//             }
//             Session::put('cart',$cart);
//             return redirect()->back()->with('message','Cập nhật số lượng thành công');
//         }else{
//             return redirect()->back()->with('message','Cập nhật số lượng thất bại');
//         }
//     }
    // public function delete_all_product(){
    //     $cart = Session::get('cart');
    //     if($cart==true){
    //         // Session::destroy();
    //         Session::forget('cart');
    //         Session::forget('coupon');
    //         return redirect()->back()->with('message','Xóa hết giỏ thành công');
    //     }
    // }
    // public function delete_to_cart($rowId) {
    //     Cart::update($rowId,0);
    //     return Redirect::to('/show-cart');
    // }
    // public function update_cart_quantity(Request $request) {
    //     //chưa kiểm tra $request
    //     $rowId = $request->rowId_cart;
    //     $total_qty = $request->cart_quantity;
    //     $product_id = $request->product_id;


    //     if(isset($_SESSION["total_qty"][$product_id])){
    //         $_SESSION["total_qty"][$product_id] = $total_qty;
    //     }

    //     Cart::update($rowId,$total_qty);
    //     return Redirect::to('/show-cart');
    // }
}
