    var $cardId=[],
$cardName=[],
$cardPrice=[],
$cardImage=[],
$cardCount=[];

fix(JSON.parse(localStorage.getItem('id')).length);
function fix(card){
    if(document.getElementById('card_button')){
     if(card==0){
            document.getElementById('card_button').style.display="block";
        }else{
            document.getElementById('card_button').style.display="none";
        }   
    }
        
}
function add_to_card(id){
    // alert($cardId.indexOf(id));
    if($cardId.indexOf(id)==-1){
         var name = document.getElementById('prod_name_'+id).textContent,
              price = document.getElementById('prod_price_'+id).textContent,
                img = document.getElementById('prod_img_'+id).style.backgroundImage,
                count1="1";
         var img1 = img.split("/");
         img1=img1[img1.length-1];
         img1=img1.split("\")");
         img1=img1[0].split("\,");
         img1=img1[0];
         htmlCard(id,name,img1,price);
        //  $("#card_panel").append("<a href='#' id='card_"+id+"' class='cart_dropdown_item'><div><div  class='cart_dropdown_item_img' style='background-image:url(https://7market.uz/media/"+img1+");'></div></div><div class='cart_dropdown_item_text'><div class='cart_dropdown_item_title' title='"+name+"'>"+name+"</div><h5>PowerGym</h5><span class='cart_dropdown_item_price'>"+price+"</span></div><div class='cart_dropdown_item_remove'><svg width='12' height='12' viewBox='0 0 12 12' fill='none' xmlns='http://www.w3.org/2000/svg'><path onclick='delCard("+id+");' fill-rule='evenodd' clip-rule='evenodd' d='M11.1914 1.73189L10.0914 0.631893L5.69141 5.03189L1.29141 0.631893L0.191406 1.73189L4.59141 6.13189L0.191406 10.5319L1.29141 11.6319L5.69141 7.23189L10.0914 11.6319L11.1914 10.5319L6.79141 6.13189L11.1914 1.73189Z' fill='#D6D6D6'/></svg></div></a>");
        // insert to array 
         $cardId.push(id);
         $cardName.push(name);
         $cardPrice.push(price);
         $cardImage.push(img1);
        //  alert(img1);
         $cardCount.push(count1);
        // convert to json
        Addflash(JSON.stringify($cardId),JSON.stringify($cardName),JSON.stringify($cardPrice),JSON.stringify($cardImage),JSON.stringify($cardCount));
        document.getElementById("cart_number").innerHTML=Number(document.getElementById("cart_number").innerHTML)+1;
        document.getElementById("cart_number1").innerHTML=Number(document.getElementById("cart_number1").innerHTML)+1;
        fix($cardId.length);
    }
}
function changeCount(id){
    // alert("ID: "+id);
    // alert("JSON.stringify($cardId): "+JSON.stringify($cardId));
    if($cardId.indexOf(id)!=-1){
        var counts = document.getElementById('count').value;
        // alert("counts: "+counts);
        var $ID = $cardId.indexOf(id);   
        // alert("$ID: "+$ID);
        $cardCount[$ID]=counts;
        Addflash(JSON.stringify($cardId),JSON.stringify($cardName),JSON.stringify($cardPrice),JSON.stringify($cardImage),JSON.stringify($cardCount));
    }
}
function add_to_card_one(id){
    if($cardId.indexOf(id)==-1){
    var name = document.getElementById('prod_name').textContent,
    price = document.getElementById('prod_price').textContent,
    img = document.getElementById('prod_img').style.backgroundImage,
    counts = document.getElementById('count').value;
                var img1 = img.split("/");
                    img1=img1[img1.length-1];
                    img1=img1.split("\")");
                    img1=img1[0].split("\,");
                    img1=img1[0];
                    htmlCard(id,name,img1,price);
                    
                    // insert to array 
                     $cardId.push(id);
                     $cardName.push(name);
                     $cardPrice.push(price);
                     $cardImage.push(img1);
                     $cardCount.push(counts);
                    // convert to json
                    Addflash(JSON.stringify($cardId),JSON.stringify($cardName),JSON.stringify($cardPrice),JSON.stringify($cardImage),JSON.stringify($cardCount));
                    document.getElementById("cart_number").innerHTML=Number(document.getElementById("cart_number").innerHTML)+1;
                    document.getElementById("cart_number1").innerHTML=Number(document.getElementById("cart_number1").innerHTML)+1;
                    fix($cardId.length);
    }
}
// localStorage.clear();
getFlash();
function getFlash(){
    if(document.getElementById("sendForm")){
        document.getElementById("sendForm").value=localStorage.getItem('id');
        document.getElementById("sendFormCounts").value=localStorage.getItem('counts');
        var id =JSON.parse(localStorage.getItem('id')),
            name = JSON.parse(localStorage.getItem('name')),
            price = JSON.parse(localStorage.getItem('price')),
            image = JSON.parse(localStorage.getItem('image')),
            counts = JSON.parse(localStorage.getItem('counts'));
            // alert(image.length);
            document.getElementById("cart_number").innerHTML = Number(image.length);
            document.getElementById("cart_number1").innerHTML = Number(image.length);
            $cardId = id;
            $cardName = name;
            $cardPrice = price;
            $cardImage = image;
            $cardCount = counts;
            
        if(id.length!=0 && name.length!=0 && price.length!=0 && image.length!=0){
            for(var i=0;i<id.length;i++){
                htmlCard(id[i],name[i],image[i],price[i]);
            }
        }
    }
}
function htmlCard(id,name,image,price){
    
    var a = document.createElement("a");                // Create a <li> node
    a.setAttribute('class','cart_dropdown_item');
    a.setAttribute('id','card_'+id);
    
var a_div = document.createElement("div");                 // Create a <li> node

var a_div_div = document.createElement("div");
    a_div_div.setAttribute('class','cart_dropdown_item_img');
    a_div_div.setAttribute('style',"background-image:url(https://7market.uz/media/"+image+");");
    
var a_div1 = document.createElement("div");                 // Create a <li> node
    a_div1.setAttribute('class','cart_dropdown_item_text');
    
var a_div1_div = document.createElement("div");                 // Create a <li> node
    a_div1_div.setAttribute('class','cart_dropdown_item_title');
    a_div1_div.setAttribute('title',name);
    var t = document.createTextNode(name);      // Create a text node
    a_div1_div.appendChild(t);    
    
var a_div1_span = document.createElement("span");                 // Create a <li> node
    a_div1_span.setAttribute('class','cart_dropdown_item_price');
    var t2 = document.createTextNode(price);      // Create a text node
    a_div1_span.appendChild(t2);    
    
    
var a_div2 = document.createElement("div");                 // Create a <li> node
    a_div2.setAttribute('class','cart_dropdown_item_remove');

    
var a_div2_svg = document.createElement("svg");                 // Create a <li> node    
    a_div2_svg.setAttribute('width','12');
    a_div2_svg.setAttribute('height','12');
    a_div2_svg.setAttribute('viewBox','0 0 12 12');
    a_div2_svg.setAttribute('fill','none');
    a_div2_svg.setAttribute('xmlns','https://www.w3.org/2000/svg');
   
var a_div2_svg_path = document.createElement("path");                 // Create a <li> node    
    a_div2_svg_path.setAttribute('fill-rule','evenodd');
    a_div2_svg_path.setAttribute('clip-rule','evenodd');
    a_div2_svg_path.setAttribute('d','M11.1914 1.73189L10.0914 0.631893L5.69141 5.03189L1.29141 0.631893L0.191406 1.73189L4.59141 6.13189L0.191406 10.5319L1.29141 11.6319L5.69141 7.23189L10.0914 11.6319L11.1914 10.5319L6.79141 6.13189L11.1914 1.73189Z');
    a_div2_svg_path.setAttribute('fill','#D6D6D6');
    a_div2_svg_path.setAttribute('style','cursor:pointer;');
    a_div2_svg_path.setAttribute('onclick','delCard('+id+");");
    
    var t3 = document.createTextNode("x");      // Create a text node
    a_div2_svg_path.appendChild(t3);    
    
    a_div.appendChild(a_div_div);
    
    
    a_div1.appendChild(a_div1_div);
    // a_div1.appendChild(a_div1_h5);
    a_div1.appendChild(a_div1_span);
    
    a_div2_svg.appendChild(a_div2_svg_path); 
    
    a_div2.appendChild(a_div2_svg);    
    // a_div2.appendChild(a_div2);    
    
    a.appendChild(a_div);
    a.appendChild(a_div1);
    a.appendChild(a_div2);
document.getElementById("card_panel").appendChild(a);     // Append <li> to <ul> with 
}
function delCard(id){
    document.getElementById('card_'+id).style.display="none";
    // alert(id);
    var $ID = $cardId.indexOf(id);   
    removeItemOnce($cardId,id);
    removeItemOnce($cardImage,$cardImage[$ID]);
    removeItemOnce($cardPrice,$cardPrice[$ID]);
    removeItemOnce($cardName,$cardName[$ID]);
    removeItemOnce($cardCount,$cardCount[$ID]);
 Addflash(JSON.stringify($cardId),JSON.stringify($cardName),JSON.stringify($cardPrice),JSON.stringify($cardImage),JSON.stringify($cardCount));
 document.getElementById("cart_number").innerHTML=Number(document.getElementById("cart_number").innerHTML)-1;
 document.getElementById("cart_number1").innerHTML=Number(document.getElementById("cart_number").innerHTML)-1;
}
function removeItemOnce(arr, value) {
    fix($cardId.length);
  var index = arr.indexOf(value);
  if (index > -1) {
    arr.splice(index, 1);
  }
  return arr;
}
function Addflash(id,name,price,image,counts){
    // alert(counts);
    localStorage.setItem('id', id);
    localStorage.setItem('name', name);
    localStorage.setItem('price', price);
    localStorage.setItem('image', image);
    localStorage.setItem('counts', counts);
    document.getElementById("cart_number").innerHtml=id.length;
    document.getElementById("sendFormCounts").value=counts;
    document.getElementById("sendForm").value=id;
}

function plus_real(id){
    var price = (document.getElementById('card_price_'+id).innerHTML).replace(" ","").match(/(\d+)/);
    price = price[0];
    if(Number(document.getElementById('id_'+id).max) > Number(document.getElementById('id_'+id).value) && Number(document.getElementById('id_'+id).min) < Number(document.getElementById('id_'+id).value)){
        
        document.getElementById('summa').innerHTML = Number(document.getElementById('summa').textContent)+Number(price);
    }
}
function min_real(id){
    var price = (document.getElementById('card_price_'+id).innerHTML).replace(" ","").match(/(\d+)/);
    price = price[0];
    if(Number(document.getElementById('id_'+id).max) > Number(document.getElementById('id_'+id).value) && Number(document.getElementById('id_'+id).min) < Number(document.getElementById('id_'+id).value)){   
        document.getElementById('summa').innerHTML = Number(document.getElementById('summa').textContent)-Number(price);
    }else if(Number(document.getElementById('id_'+id).value)==1){
        fix_result();
    }
}
function del_div(id){
    var removeDiv = document.getElementById("cart_card_"+id);
        removeDiv.remove();
        var arrays_id =  JSON.parse(document.getElementById("arrays_id").value);
        removeItemOnce(arrays_id,id);
        document.getElementById("arrays_id").value = JSON.stringify(arrays_id);;
        fix_result();
        delCard(id);
}
function fix_result(){
    var summa=0;
    var arrays_id =  JSON.parse(document.getElementById("arrays_id").value);
        for(var i=0;i<arrays_id.length;i++){
            if(document.getElementById('id_'+arrays_id[i])){
                price1=(document.getElementById('card_price_'+arrays_id[i]).innerHTML).replace(" ","").match(/(\d+)/);
                price1=price1[0];
                summa += price1*Number(document.getElementById('id_'+arrays_id[i]).value);
            }
        }
        document.getElementById('summa').innerHTML=summa;
}
// Locations