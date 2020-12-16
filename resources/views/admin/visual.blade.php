@extends('admin.layouts.index')
@section('content')
@extends('admin.layouts.css_product_add')
<style>
    table tbody tr td{
        text-align: center;
    }
    table tbody tr td input[type=radio]{
        margin-top: 15px;
    }
</style>
<input type="hidden" id="token" value="{{ csrf_token() }}"/>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <h1>Bog`lash <a href="{{ URL::previous() }}" class="btn btn-info" style="float: right;margin-top: 10px;">ortga qaytish</a></h1>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $sub }} </h3>
                </div>

                <!-- /.card-header -->
                <style>
                    .tovar{
                        background: #E4E6E9;padding: 15px;border-radius: 10px;
                        display: inline-block;
                        height: 120px;
                        margin: 1px;
                    }
                    .img img{
                        width: 100%;
                        height: 100%;
                        border-radius: 5px;
                    }
                    .img{
                        width: 80px;
                        height: 80px;
                    }
                    .flex{
                        display: flex;
                        align-items: center;
                    }
                    .check input{
                        margin: 5px 5px 5px 0px;
                    }
                    .tovar_text{
                        height: 80px;
                        padding: 10px;
                        background: white;
                        margin: 5px;
                        line-height: 0.3;
                        border-radius: 10px;
                    }
                    .product_name{
                        color:#28A745;
                    }
                    .product_count{
                        color: #17A2B8;
                    }
                    .product_price{
                        color: red;
                    }
                </style>
                <div id="tovar" style="padding: 10px;">
    @if(isset($select) && !empty($select))
        @foreach($select as $val)
            @if($val->ssm_id!=$id)
                <div class="tovar" id="tovar_{{$val->id}}" onclick="div_click({{$val->id}})" style="background: #E4E6E9;">
                    <input type="hidden" id="tovar_id_{{ $val->id }}" value="{{ $val->id }}"/>
                    <div class="flex">
                        <div class="img">
                            <img src="/media/{{ $val->img_url }}" alt="">
                        </div>
                        <div class="tovar_text">
                            <p class="product_name"><a href="">{{ $val->name }}</a></p>
                            <p>Soni: <span class="product_count">{{ $val->count }}</span></p>
                            <p class="product_price">{{ $val->price }} {{ $val->kurs }}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="tovar" style="background: #1DCAE5;" id="tovar_{{$val->id}}" onclick="div_click({{$val->id}})">
                    <input type="hidden" id="tovar_id_{{ $val->id }}" value="{{ $val->id }}"/>
                    <div class="flex">
                        <div class="img">
                            <img src="/media/{{ $val->img_url }}" alt="">
                        </div>
                        <div class="tovar_text">
                            <p class="product_name"><a href="">{{ $val->name }}</a></p>
                            <p>Soni: <span class="product_count">{{ $val->count }}</span></p>
                            <p class="product_price">{{ $val->price }} {{ $val->kurs }}</p>
                        </div>
                    </div>
                </div>
                @endif    
        @endforeach
        @endif
        
@if(isset($inf) && !empty($inf))
        @foreach($inf as $val)
            @if($val->ssm_id!=$id)
                <div class="tovar" id="tovar_{{$val->id}}" onclick="div_click({{$val->id}})" style="background: #E4E6E9;">
                    <input type="hidden" id="tovar_id_{{ $val->id }}" value="{{ $val->id }}"/>
                    <div class="flex">
                        <div class="img">
                            <img src="/media/{{ $val->img_url }}" alt="">
                        </div>
                        <div class="tovar_text">
                            <p class="product_name"><a href="">{{ $val->name }}</a></p>
                            <p>Soni: <span class="product_count">{{ $val->count }}</span></p>
                            <p class="product_price">{{ $val->price }} {{ $val->kurs }}</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="tovar" style="background: #1DCAE5;" id="tovar_{{$val->id}}" onclick="div_click({{$val->id}})">
                    <input type="hidden" id="tovar_id_{{ $val->id }}" value="{{ $val->id }}"/>
                    <div class="flex">
                        <div class="img">
                            <img src="http://market/media/{{ $val->img_url }}" alt="">
                        </div>
                        <div class="tovar_text">
                            <p class="product_name"><a href="">{{ $val->name }}</a></p>
                            <p>Soni: <span class="product_count">{{ $val->count }}</span></p>
                            <p class="product_price">{{ $val->price }} {{ $val->kurs }}</p>
                        </div>
                    </div>
                </div>
                @endif
        @endforeach
@endif
            </div>
            </div>
            <input type="hidden" value="{{ $id }}" id="menu_id"/>
            <script>
                function div_click(id){
                    var token = $("#token").val();
                    var val = $("#tovar_id_"+id).val();
                    var header_id = $("#menu_id").val();
                    var visual=0;
                    if(document.getElementById('tovar_'+id).style.backgroundColor=='rgb(29, 202, 229)'){
                        document.getElementById('tovar_'+id).style.backgroundColor='rgb(228, 230, 233)';
                        visual=0;
                    }else{
                        document.getElementById('tovar_'+id).style.backgroundColor='rgb(29, 202, 229)';
                        visual=header_id;
                    }
                    $.ajax({
                        type:'POST',
                        url:"{{ route('add_product_menu') }}",
                        data:{val:val, _token:token, visual:visual,header_sub_id:header_id},
                        success:function(data){}
                    });
                }
            </script>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@extends('admin.layouts.js_product_add')
@endsection