<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stichoza\GoogleTranslate\GoogleTranslate;
class AdminController extends Controller
{
    public function onlineTrans(Request $request){
        echo GoogleTranslate::trans($request->header_uz, 'ru', 'uz')."=>".GoogleTranslate::trans($request->full_uz, 'ru', 'uz')."<>".GoogleTranslate::trans($request->header_uz, 'en', 'uz')."=>".GoogleTranslate::trans($request->full_uz, 'en', 'uz');
    }
    //
    public function index(){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.index')->with('order_count',$order_count);
    }
//    Product
    public function product(){
        $active = DB::table('information')->where('count','>','0')->where('disabled','false')->get();
        foreach($active as $val){
                $val->name = $val->name_uz;
        }
        $disactive = DB::table('information')->where('disabled','true')->get();
        foreach($disactive as $val){
                $val->name = $val->name_uz;
        }
        $noll = DB::table('information')->where('count','0')->where('disabled','false')->get();
        foreach($noll as $val){
                $val->name = $val->name_uz;
        }
        $type = DB::table('information')->get();
        $type_arrays=[];
        foreach($type as $val){
            $val_type = $val->img_url;
            if(strpos($val_type,"mp4")!=""){
                array_push($type_arrays,"mp4");
            }else{
                array_push($type_arrays,"image");
            }
        }
        // dd($active);
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        // ECHO $order_count;
        return view('admin.product')->with(['active'=>$active,'noll'=>$noll,'dis'=>$disactive,'order_count'=>$order_count,'type_arrays'=>$type_arrays]);
    }
    public function product_noll(){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        
        return view('admin.product')->with('order_count',$order_count);
    }
    public function product_dis($id=0){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        
        if($id==0){
            return view('admin.product');
        }else{
        $result = DB::table('information')->where('id',$id)->update(['disabled'=>'true']);
//
            if($result!=""){
                return redirect('admin/product')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
            }
        }
    }
    public function product_active($id=0){
        if($id==0){
            return view('admin.product');
        }else{
            $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
            
            $result = DB::table('information')->where('id',$id)->update(['disabled'=>'false']);
//
            if($result!=""){
                return redirect('admin/product')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
            }
        }
    }
    public function product_add(){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.product_add')->with('order_count',$order_count);
    }
    public function add_info_logic(Request $request){
        if(
            (isset($request['name_uz']) && !empty($request['name_uz'])) ||
            (isset($request['description_uz']) && !empty($request['description_uz'])) ||
            (isset($request['price']) && !empty($request['price'])) ||
            (isset($request['kurs']) && !empty($request['kurs'])) ||
            (isset($request['count']) && !empty($request['count'])) ||
            (isset($request['img']) && !empty($request['img']))
        ){
            $request->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
//
            $imageName = time().'.'.$request->img->extension();
            $request->img->move(public_path('media'), $imageName);
//           end image
            $data=array(
                'name_uz'=>$request['name_uz'],
                'name_ru'=>$request['name_ru'],
                'name_en'=>$request['name_en'],
                'discription_uz'=>$request['description_uz'],
                'discription_ru'=>$request['description_ru'],
                'discription_en'=>$request['description_en'],
                'price'=>$request['price'],
                'kurs'=>$request['kurs'],
                'type'=>"t",
                'order_3'=>$request['order_3'],
                'order_6'=>$request['order_6'],
                'order_9'=>$request['order_9'],
                'order_12'=>$request['order_12'],
                'count'=>$request['count'],
                'skidka_price'=>$request['skidka'],
                'img_url'=>$imageName
                );
            $result = DB::table('information')->insert($data);
            $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
            if($result!=""){
                return redirect('admin/product')->with('status', 'Ma`lumotlar kiritildi!')->with('order_count',$order_count);
            }
        }
    }
    public function edit_info_logic(Request $request){
        if(
            (isset($request['name_uz']) && !empty($request['name_uz'])) ||
            (isset($request['description_uz']) && !empty($request['description_uz'])) ||
            (isset($request['price']) && !empty($request['price'])) ||
            (isset($request['kurs']) && !empty($request['kurs'])) ||
            (isset($request['count']) && !empty($request['count'])) ||
            (isset($request['skidka']) && !empty($request['skidka'])) ||
            (isset($request['img']) && !empty($request['img'])) ||
            (isset($request['order_3']) && !empty($request['order_3'])) ||
            (isset($request['order_6']) && !empty($request['order_6'])) ||
            (isset($request['order_9']) && !empty($request['order_9'])) ||
            (isset($request['order_12']) && !empty($request['order_12']))
        ){
            // echo "buladi inshoolloh".$request['img'];
            // echo "<br/>".dd($request['img']);
        
            if(isset($request['img']) && !empty($request['img'])) {
                // $request->validate([
                //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // ]);
//////
                $imageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('media'), $imageName);
            }else{
                $imageName = $request['last_img'];
            }
//           end image
            $data=array(
                'name_uz'=>$request['name_uz'],
                'name_ru'=>$request['name_ru'],
                'name_en'=>$request['name_en'],
                'discription_uz'=>$request['description_uz'],
                'discription_ru'=>$request['description_ru'],
                'discription_en'=>$request['description_en'],
                'price'=>$request['price'],
                'kurs'=>$request['kurs'],
                'type'=>"t",
                'order_3'=>$request['order_3'],
                'order_6'=>$request['order_6'],
                'order_9'=>$request['order_9'],
                'order_12'=>$request['order_12'],
                'count'=>$request['count'],
                'skidka_price'=>$request['skidka'],
                'img_url'=>$imageName
            );
            $result = DB::table('information')->where('id',$request['info_id'])->update($data);
//
$order_count = DB::table('order_kash')->where('finish_ok','no')->count();
            if($result!=""){
                $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
                return redirect('admin/product')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
            }else{
                // echo $request['info_id'];
                dd($data);
            }
        
        }else{
            echo "bulmadi";
        }
    }
    public function product_del($id){
        $result = DB::table('information')->where('id', $id)->delete();
        if($result!=""){
            $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
            return redirect('admin/product')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
        }
    }
    public function del_sub_menu(Request $request){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        $result = DB::table('menu_sub_sub')->where('id', $request['id'])->delete();
        if($result!=""){
            echo "success";
        }else{
            echo "error";
        }
    }
    public function header_menu_del($id){
        $result = DB::table('menu_head')->where('id', $id)->delete();
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        if($result!=""){
            return redirect('admin/connect')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
        }
    }
    public function header_menu_sub_del($id,$hid){
        $result = DB::table('menu_head_sub')->where('id', $id)->delete();
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        if($result!=""){
            return redirect('http://market/admin/connect/view_header_menu/'.$hid)->with('order_count',$order_count);
        }
    }
    public function product_edit($id){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        $active = DB::table('information')->where('disabled','false')->where('id', $id)->first();
        return view('admin.product_edit')->with('datas',$active)->with('order_count',$order_count);

    }
//   end Product
    public function users_orders(){
        return view('admin.users_orders');
    }
    public function zakaz($id=0){
        $order_kash = DB::table('order_kash')->where('finish_ok','no')->orderByDesc('id')->get();
        $order_kash1 = DB::table('order_kash')->where('finish_ok','yes')->orderByDesc('id')->get();
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        $product = DB::table('information')->where('disabled','false')->get();
        foreach($product as $val){
            $val->name = $val->name_uz;
        }
        foreach($order_kash as $val){
            if(strstr($val->adress,'Mobile=>')){
                $locat = explode("Mobile=>",$val->adress);
                $locat = explode(",",$locat[1]);
                
                $lon = $locat[0];
                $lon = explode(":",$lon);
                $lon =$lon[1];
                // echo $lon."<br/>";
                $lat = $locat[1];
                $lat = explode(":",$lat);
                $lat =$lat[1];
                // echo $lat."<br/>";
                
                $val->typemodel = "true";
                
                $order_kash->adress_lon = $lon;
                $order_kash->adress_lat = $lat;
            }else{
                $val->typemodel = "false";
                
                $order_kash->adress_lon = "none";
                $order_kash->adress_lat = "none";
            }
        }
        
        foreach($order_kash1 as $val){
            if(strstr($val->adress,'Mobile=>')){
                $locat = explode("Mobile=>",$val->adress);
                $locat = explode(",",$locat[1]);
                
                $lon = $locat[0];
                $lon = explode(":",$lon);
                $lon =$lon[1];
                // echo $lon."<br/>";
                $lat = $locat[1];
                $lat = explode(":",$lat);
                $lat =$lat[1];
                // echo $lat."<br/>";
                $val->typemodel = "true";
                
                $order_kash->adress_lon = $lon;
                $order_kash->adress_lat = $lat;
            }else{
                $val->typemodel = false;
                
                $order_kash->adress_lon = "none";
                $order_kash->adress_lat = "none";
            }
        }
        // dd($order_kash1);
        return view('admin.zakaz')->with('orders',$order_kash)->with('orders1',$order_kash1)->with('order_count',$order_count)->with('products',$product)->with('product_id',$id);
        // return view('admin.zakaz')->with('orders',$order_kash);
    }
    public function rasrochka(){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.rasrochka')->with('order_count',$order_count);
    }
    public function connect(){
        $menu_head = DB::table('menu_head')->get();
        $menu_head_sub = DB::table('menu_head_sub')->where('id',0)->get();
        $sub_sub = DB::table('menu_sub_sub')->where('id',0)->get();
        
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        
        $data=array(
            'menu_head'=>$menu_head,
            'menu_head_sub'=>$menu_head_sub,
            'sub_sub'=>$sub_sub,
            'id'=>0,
            'hsid'=>0
        );
        return view('admin.connect')->with($data)->with('order_count',$order_count);
    }
    public function view_header_menu($id,$sid=0){
        $menu_head = DB::table('menu_head')->get();
        $menu_head_sub = DB::table('menu_head_sub')->where('head_id',$id)->get();
        $sub_sub = DB::table('menu_sub_sub')->where('id',0)->get();
        
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        $data=array(
            'menu_head'=>$menu_head,
            'menu_head_sub'=>$menu_head_sub,
            'sub_sub'=>$sub_sub,
            'id'=>$id,
            'hsid'=>0,
        );
        return view('admin.connect')->with($data)->with('order_count',$order_count);
    }
    public function view_header_sub_menu($mid,$id){
        
        $menu_head = DB::table('menu_head')->get();
        $menu_head_sub = DB::table('menu_head_sub')->where('head_id',$mid)->get();
        $sub_sub = DB::table('menu_sub_sub')->where('head_sub_id',$id)->get();
        $data=array(
            'menu_head'=>$menu_head,
            'menu_head_sub'=>$menu_head_sub,
            'sub_sub'=>$sub_sub,
            'id'=>$mid,
            'hsid'=>$id,
        );
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.connect')->with($data)->with('order_count',$order_count);
    }
    public function header_menu_add(Request $request){
        if(isset($request['head_menu']) && !empty($request['head_menu'])){
            $result = DB::table('menu_head')->insert(['name' => $request['head_menu']]);
        }
        $menu_head = DB::table('menu_head')->get();
        $menu_head_sub = DB::table('menu_head_sub')->where('id',1)->get();
        $sub_sub = DB::table('menu_sub_sub')->where('id',1)->get();
        $data=array(
            'menu_head'=>$menu_head,
            'menu_head_sub'=>$menu_head_sub,
            'sub_sub'=>$sub_sub,
            'id'=>0,
            'hsid'=>0
        );
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.connect')->with($data)->with('order_count',$order_count);
    }
    public function sub_sub_add(Request $request){
        if(isset($request['name']) && !empty($request['name'])){
            if($request['update']=="false"){
                $result = DB::table('menu_sub_sub')->insert(['name' => $request['name'],'head_sub_id' => $request['menu_sub_id']]);
            }else{
                $result = DB::table('menu_sub_sub')->where('id',$request['update'])->update(['name'=>$request['name']]);
            }
        }
        $menu_head = DB::table('menu_head')->get();
        $menu_head_sub = DB::table('menu_head_sub')->where('id',1)->get();
        $sub_sub = DB::table('menu_sub_sub')->where('id',1)->get();
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        $data=array(
            'menu_head'=>$menu_head,
            'menu_head_sub'=>$menu_head_sub,
            'sub_sub'=>$sub_sub,
            'id'=>0,
            'hsid'=>0
        );
        return redirect('/admin/connect/view_header_sub_menu/'.$request['id'].'/'.$request['menu_sub_id'])->with('order_count',$order_count);
    }
    public function header_sub_menu_add(Request $request){
        if(isset($request['head_sub_menu']) && !empty($request['head_sub_menu'])){
            $result = DB::table('menu_head_sub')->insert(['name' => $request['head_sub_menu'],'head_id' => $request['header_menus_id']]);
        }
        return redirect("http://market/admin/connect/view_header_menu/".$request['header_menus_id'])->with('order_count',$order_count);
    }
    public function header_menu_edit(Request $request){
        if(
            isset($request['val']) && !empty($request['val'])||
            isset($request['_token']) && !empty($request['_token'])||
            isset($request['id']) && !empty($request['id'])
        ){
            $result = DB::table('menu_head')->where('id',$request['id'])->update(['name'=>$request['val']]);
        }
    }
    public function header_sub_menu_edit(Request $request){
        if(
            isset($request['val']) && !empty($request['val'])||
            isset($request['_token']) && !empty($request['_token'])||
            isset($request['id']) && !empty($request['id'])
        ){
            $result = DB::table('menu_head_sub')->where('id',$request['id'])->where('head_id',$request['header_sub_id'])->update(['name'=>$request['val']]);
        }
    }
    public function add_product_menu(Request $request){
        if(
            isset($request['val']) && !empty($request['val'])||
            isset($request['_token']) && !empty($request['_token'])||
            isset($request['header_sub_id']) && !empty($request['header_sub_id'])||
            isset($request['visual']) && !empty($request['visual'])
        ){
            $result = DB::table('information')->where('id',$request['val'])->update(['ssm_id'=>$request['visual']]);
        }
    }
    public function view_sub_sub($id){
        $select = DB::table('information')->where('disabled','false')->where('ssm_id',$id)->get();
        $inf = DB::table('information')->where('disabled','false')->where('ssm_id','!=',$id)->get();
        foreach($inf as $val){
            $val->name = $val->name_uz;
        }
        foreach($select as $val){
            $val->name = $val->name_uz;
        }
        $sub = DB::table('menu_sub_sub')->where('id',$id)->first();

        $data=array(
            'inf'=>$inf,
            'id'=>$id,
            'select'=>$select,
            'sub'=>$sub->name
        );
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.visual')->with($data)->with('order_count',$order_count);
    }
    public function expload(){
//        $users = DB::table('information')


//            ->join('contacts', 'users.id', '=', 'contacts.user_id')
//            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->select('users.*', 'contacts.phone', 'orders.price')
//            ->get();
        echo GoogleTranslate::trans("cохранить", 'uz', 'ru');
    }
    public function disable_zakaz($id){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        // send to telegram  
    $botToken = "1282121079:AAEy7YIGsqu1Bz8vVz2v20Sk8u_bx-S-0s0";
    $chat_id = "@market7seven";
    $message = "Zakaz ko`rildi! \nZakaz nomeri: ".$id."\n"."Zakazni ko`rish:\n https://7market.uz/admin/zakaz/$id";
    $bot_url    = "https://api.telegram.org/bot$botToken/";//https://t.me/joinchat/AAAAAE_IUCz6y8o1-M_7Eg
    $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
    file_get_contents($url);
    // end send to telegram
        $result = DB::table('order_kash')->where('id',$id)->update(['finish_ok'=>'yes']);
        
            if($result!=""){
                return redirect('admin/zakaz')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
            }        
    }
    public function active_zakaz($id){
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        $result = DB::table('order_kash')->where('id',$id)->update(['finish_ok'=>'no']);
            if($result!=""){
                return redirect('admin/zakaz')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);
            }        
    }
    public function localiz(){
        $local = DB::table('fronted')->get();
        $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
        return view('admin.local')->with('order_count',$order_count)->with('local',$local);        
    }
    public function changeLoc(Request $request){
        $result = DB::table('fronted')->where('id',$request['id'])->update([$request['type']=>$request['val']]);
    }
    public function addLoc(Request $request){
         $data=array(
                'var'=>$request['add_var'],
                'en'=>$request['add_en'],
                'ru'=>$request['add_ru'],
                'uz'=>$request['add_uz']
            );
        $id = DB::table('fronted')->insertGetId($data);
        // if($result!=""){
            echo $id;
        // }
        
    }
    public function loc_del($id){
        $result = DB::table('fronted')->where('id', $id)->delete();
        if($result!=""){
            $order_count = DB::table('order_kash')->where('finish_ok','no')->count();
            return redirect('admin/localiz')->with('status', 'Ma`lumotlar Uzgartirildi!')->with('order_count',$order_count);                
        }
    }
    
}