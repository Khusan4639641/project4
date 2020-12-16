<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function telegram($lang='ru'){
    $botToken = "1282121079:AAEy7YIGsqu1Bz8vVz2v20Sk8u_bx-S-0s0";
    $chat_id = "@market7seven";
    $message = "<a href='https://7market.uz/telegram'>your message</a>";
    $bot_url    = "https://api.telegram.org/bot$botToken/";//https://t.me/joinchat/AAAAAE_IUCz6y8o1-M_7Eg
    $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
    file_get_contents($url);
    }
    
    public function isMobile($lang='ru') {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }
    public function map($lang='ru'){
        return view('map');
    }
    
    public function load($lang='ru'){
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
        
        $result1 = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[4,5,6])->get();
        foreach($result1 as $val){
                $val->name = $val->name_uz;
        }
        $result2 = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[8,9])->get();
        foreach($result2 as $val){
                $val->name = $val->name_uz;
        }
        $result3 = DB::table('information')->where('disabled','false')->where('ssm_id',6)->get();
        foreach($result3 as $val){
                $val->name = $val->name_uz;
        }
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        // lacalisation
        // 
        // 
        
         
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        return view('welcome')->with(['result1'=>$result1,'result2'=>$result2,'result3'=>$result3,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals);
    }    
    public function search(Request $request){
        $char  = $request->searching;
        $search = DB::table('information')->where('disabled','false')->where('name_ru','like','%'.$char.'%')->orWhere('discription_ru','like','%'.$char.'%')->orWhere('name_uz','like','%'.$char.'%')->orWhere('discription_uz','like','%'.$char.'%')->orWhere('name_en','like','%'.$char.'%')->orWhere('discription_en','like','%'.$char.'%')->get();
        // if(count($search)==0){
        //     dd($search);   
        // }
        $url = url()->current();
        $url = explode("/",$url);
        $lang = $url[3];
        foreach($search as $val){
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
        
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        return view('welcome')->with(['search'=>$search,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'type'=>$type_arrays])->with('local',$locals)->with('lang',$lang);
    }
    public function view_product($lang='ru',$id){
        $info = DB::table('information')->where('disabled','false')->where('id',$id)->first();
        // foreach($info as $val){
                $info->name = $info->name_uz;
                $info->discription = $info->discription_uz;
        // }
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
        $result1 = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[4,5,6])->get();
        foreach($result1 as $val){
                $val->name = $val->name_uz;
        }
        $type = DB::table('information')->where('id',$id)->first();
        $type = "";
            if(strpos($info->img_url,"mp4")!=""){
                $type="mp4";
            }else{
                $type="image";
            }
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        return view('view_product')->with(['info'=>$info,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'result1'=>$result1,'id'=>$id,'type'=>$type,'lang'=>$lang])->with('local',$locals);
        // echo "test";
    }
    public function coteg($lang='ru',$id){
        $info = DB::table('information')->where('disabled','false')->where('ssm_id',$id)->get();
        foreach($info as $val){
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
        
        
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        // dd($info);
        
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        return view('welcome')->with(['coteg'=>$info,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals)->with('local',$locals);
        // echo "test";
    }
    //apii
    public function getInfo($id){
        $info = DB::table('information')->where('disabled','false')->where('id',$id)->first();
        echo json_encode($info);
        
    }
    public function card(Request $request){
        $url = url()->current();
        $url = explode("/",$url);
        $lang = $url[3];
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
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
        // dd($request->sendCounts);
        $val = json_decode($request->send);
        $val_count = json_decode($request->sendCounts);
        $send_count=[];
        $summa=0;
        $sendIndex=0;
        
        if(isset($val) && !empty($val)){
            $result = DB::table('information')->whereIn('id',$val)->get();
            foreach($result as $val){
                $pieces = explode(",", $val->price);
                $val->counting=$val_count[$sendIndex];
                $summa += str_replace(" ","",$pieces[0])*$val->counting;
                $sendIndex++;
                $val->name = $val->name_uz;
                $val->discription = $val->discription_uz;
            }
            $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
            // dd($result);
            return view('card')->with(['sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'result'=>$result,'summa'=>$summa,"id"=>$request->send,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals);
        }else{
            return view('card')->with(['sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals);
        }
    }
    public function pay(Request $request){
        $url = url()->current();
        $url = explode("/",$url);
        $lang = $url[3];
        
        $count=array();
        $price=array();
        $image=array();
        $name=array();
        $all_info=[];
        $prod_id=[];
        $idies=[];
        $summa=0;
        $isMobile="";
        $type = DB::table('information')->get();
        $type_arrays=[];
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        foreach($type as $val){
            $val_type = $val->img_url;
            if(strpos($val_type,"mp4")!=""){
                array_push($type_arrays,"mp4");
            }else{
                array_push($type_arrays,"image");
            }
        }
        
        if($this->isMobile()){
            $isMobile=true;
        }else{
            $isMobile = false;
        }
        
        $arrays_id = json_decode($request->arrays_id);
        for($i=0;$i<count($arrays_id);$i++){
            $info = DB::table('information')->where('disabled','false')->where('id',$arrays_id[$i])->first();
            $info->name = $info->name_uz;
            // echo "<br/>".$request->count[$arrays_id[$i]];
              array_push($count,$request->count[$arrays_id[$i]]);
              $prices=str_replace(" ","",($info->price));
              $prices=(int)$prices;
              array_push($price,$prices);
              array_push($name,$info->name);
              array_push($image,$info->img_url);
              array_push($idies,$info->id);
              $summa+=$prices*$request->count[$arrays_id[$i]];
        }
        $all_info=['count'=>$count,'price'=>$price,'image'=>$image,'name'=>$name];
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
        return view('pay')->with(['sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'count'=>$count,'price'=>$price,'name'=>$name,'image'=>$image,'summa'=>$summa,'prod_id'=>$idies,'type'=>$type_arrays,'isMobile'=>$isMobile,'lang'=>$lang])->with('local',$locals); 
    }
    public function action_pay($lang='ru',Request $request){
    // dd($request->user_adress);
    if(!(isset($request->user_adress) && !empty($request->user_adress)) && $request->user_adress==null && $request->user_adress==""){
        $request->user_adress="Adress kiritilmagan";
    }    
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
    $success = "Заказ принят";    
    $id = DB::table('order_kash')->insertGetId(
        ['name' => $request->user_name, 
         'tell' => $request->user_tell,
         'adress'=>$request->user_adress,
         'pay_type'=>'click',
         'price'=>$request->summa,
         'prod_id'=>json_encode($request->prod_id),
         'prod_count'=>json_encode($request->prod_count)
    ]);
    $products = DB::table('information')->whereIn('id',$request->prod_id)->get();
    // dd($products);
    
    $AllProduct = "Xaridlar: \n";
    $num=0;
    foreach($products as $val){
           $val->name = $val->name_uz;
        $AllProduct.=($num+1).") ".$val->name."\n     Soni: ".$request->prod_count[$num]."\n     Narxi: ".$val->price."\n";
        $num++;
    }
    // send to telegram  
    $botToken = "1282121079:AAEy7YIGsqu1Bz8vVz2v20Sk8u_bx-S-0s0";
    $chat_id = "@market7seven";
    $message = "Zakaz nomeri: ".$id."\n"."Hariydor Ismi: ".$request->user_name."\n"."Hariydor Tell: ".$request->user_tell."\n"."Harid narxi: ".$request->summa." so`m\n".$AllProduct."Zakazni ko`rish\n https://7market.uz/admin/zakaz/$id";
    $bot_url    = "https://api.telegram.org/bot$botToken/";//https://t.me/joinchat/AAAAAE_IUCz6y8o1-M_7Eg
    $url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
    file_get_contents($url);
    // end send to telegram
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
        
        $result1 = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[4,5,6])->get();
        $result2 = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[8,9])->get();
        $result3 = DB::table('information')->where('disabled','false')->where('ssm_id',6)->get();
        
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
        // return view('welcome')->with(['result1'=>$result1,'result2'=>$result2,'result3'=>$result3,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'type'=>$type_arrays,'success'=>$success,'lang'=>$lang])->with('local',$locals);
    //     return redirect("https://my.click.uz/services/pay?amount=$request->summa&merchant_id=10217&merchant_user_id=17511&service_id=16520&transaction_param=$id&return_url=https%3A%2F%2F7market.uz%2Fcard_back&card_type=uzcard");
    return redirect("https://7market.uz/ru")->with('success','Заказ принят!');
    }
    public function card_back(){
        
    }
    public function medic($lang='ru'){
        $name="Медитцина";
        // $info=[];

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
        
        
        $info = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[13,14])->get();
        foreach($info as $val){
            $val->name = $val->name_uz;
        }
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        // dd($info);
        return view('welcome')->with(['coteg'=>$info,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'name'=>$name,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals);        
    }
    public function moto($lang='ru'){
        
        $name="Мото";
        $info = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[8,9])->get();
        foreach($info as $val){
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
        
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        // dd($info);
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        return view('welcome')->with(['coteg'=>$info,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'name'=>$name,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals);        
    }
    public function sport($lang='ru'){
        $name="Спорт";
        $info = DB::table('information')->where('disabled','false')->whereIn('ssm_id',[4,5,6,12])->get();
        foreach($info as $val){
            $val->name = $val->name_uz;
        }
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        // dd($info);
        
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
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        return view('welcome')->with(['coteg'=>$info,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'name'=>$name,'type'=>$type_arrays,'lang'=>$lang])->with('local',$locals);        
    }
    public function one_click(Request $request){
        $url = url()->current();
        $url = explode("/",$url);
        $lang = $url[3];
        //echo "Id: ".$request->id;
        //echo "<br/>Id: ".$request->count;//one_pay
        $sport = DB::table('menu_sub_sub')->whereIn('id',[4,5,6,12])->get();
        $moto = DB::table('menu_sub_sub')->whereIn('id',[8,9])->get();
        $velo = DB::table('menu_sub_sub')->whereIn('id',[10,11])->get();
        $med = DB::table('menu_sub_sub')->whereIn('id',[13,14])->get();
        
        $info = DB::table('information')->where('disabled','false')->where('id',$request->id)->first();
        
            $info->name = $info->name_uz;
        
        // dd($info);
        $prices = str_replace(' ', '', $info->price);
        $summa = ($request->count*((int)$prices));
        // echo (int)$prices;
        
        $type = DB::table('information')->get();
        $type_arrays=[];
        $isMobile="";
        foreach($type as $val){
            $val_type = $val->img_url;
            if(strpos($val_type,"mp4")!=""){
                array_push($type_arrays,"mp4");
            }else{
                array_push($type_arrays,"image");
            }
        }
        if($this->isMobile()){
            $isMobile=true;
        }else{
            $isMobile = false;
        }
        
        $local = DB::table('fronted')->get();
        $locals=[];
        for($i=0;$i<count($local);$i++){
            $index = $local[$i]->var;
            $val = $local[$i]->$lang;
            $locals[$index]=$val;
        }        
        
        return view('one_pay')->with(['coteg'=>$info,'sport'=>$sport,'moto'=>$moto,'velo'=>$velo,'med'=>$med,'info'=>$info,'summa'=>$summa,'id'=>$request->id,'count'=>$request->count,'type'=>$type_arrays,'isMobile'=>$isMobile,'lang'=>$lang])->with('local',$locals);
    }
    public function test($lang='ru'){
    
    }
}

