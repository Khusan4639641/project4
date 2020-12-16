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
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <h1>Bog`lash</h1>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Menuylar</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Bosh kategoriya</label>
                                <form action="/admin/connect/header_menu_add" method="post">
                                <div class="row" style="padding-left: 2px;padding-right: 5px;">
                                    @csrf
                                        <input type="text" name="head_menu" class="form-control col-sm-9" id="exampleInputEmail1" placeholder="Bosh kategoriya...">
                                        <button class="btn btn-success col-sm-3">Qo`shish</button>
                                </div>
                                </form>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Bosh Kategoriya</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <table class="table table-sm">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Task</th>
                                                <th>Checking</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{ $num=1 }}
                                            {{ $header="" }}
                                            <input type="hidden" id="token" value="{{ csrf_token() }}"/>
                                            @foreach($menu_head as $val)
                                                <tr>
                                                    <td>{{ $num }}.</td>
                                                    <td><input type="text" class="form-control" id="head_menu_{{ $val->id }}" value="{{ $val->name }}" onchange="changeHeader({{ $val->id }})" /></td>
                                                    @if($id==$val->id)
                                                        <td><a href="/admin/connect/view_header_menu/{{ $val->id }}" class="btn btn-success">Ko`rish</a></td>
                                                    @else
                                                        <td><a href="/admin/connect/view_header_menu/{{ $val->id }}" class="btn btn-default">Ko`rish</a></td>
                                                    @endif
                                                    <td><a href="/admin/connect/del/{{ $val->id }}" class="btn btn-danger">Delete</a></td>
                                                </tr>
                                                {{ $num++ }}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <script>
                                function changeHeader(id){
                                    var val = $("#head_menu_"+id).val();
                                    var token = $("#token").val();
                                    $.ajax({
                                        type:'POST',
                                        url:"{{ route('header_menu_edit') }}",
                                        data:{val:val, _token:token, id:id},
                                        success:function(data){
                                        }
                                    });
                                }
                                function changeHeaderSub(id){
                                    var val = $("#head_sub_menu_"+id).val();
                                    var token = $("#token").val();
                                    var header_id = $("#header_sub_id").val();
                                    $.ajax({
                                        type:'POST',
                                        url:"{{ route('header_sub_menu_edit') }}",
                                        data:{val:val, _token:token, id:id,header_sub_id:header_id},
                                        success:function(data){
                                        }
                                    });
                                }
                                function edit_menu(char){
                                    document.getElementById('update').value=char;
                                    document.getElementById('sub_sub_add').value=document.getElementById('update_id_'+char).textContent.replace(/\s/g, '');
                                    document.getElementById('add_sub').value='O`zgartirish';
                                }
                                function del_menu(id){
                                    var token = $("#token").val();
                                    var url = $("#url").val();
                                    var result = confirm("Siz uchirmoqchimisiz ?");
                                    if (result == true){
                                        $.ajax({
                                            type:'POST',
                                            url:"{{ route('del_sub_menu') }}",
                                            data:{id:id, _token:token},
                                            success:function(data){
                                                if(data=='success'){
                                                    location.reload();
                                                }
                                            }
                                        });
//                                        window.location.href = "http://www.w3schools.com";
                                    }
                                }
                            </script>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Sub kategoriyalar</label>
                                <form action="/admin/connect/header_sub_menu_add" method="post">
                                    @csrf
                                    <div class="row" style="padding-left: 2px;padding-right: 5px;">
                                        <input type="text" class="form-control col-sm-9" name="head_sub_menu" placeholder="Sub kategoriyalar...">
                                        @if(isset($id) && !empty($id))
                                            <input type="hidden" name="header_menus_id" id="header_sub_id" value="{{ $id }}">
                                        @endif
                                        <button class="btn btn-success col-sm-3">Qo`shish</button>
                                    </div>
                                </form>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sub kategoriya</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-0">
                                        <table class="table table-sm">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Task</th>
                                                <th>Checking</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {{ $num1=1 }}
                                            <input type="hidden" id="token" value="{{ csrf_token() }}"/>
                                            @foreach($menu_head_sub as $val)
                                                <tr>
                                                    <td>{{ $num1 }}.</td>
                                                    <td><input type="text" class="form-control" id="head_sub_menu_{{ $val->id }}" value="{{ $val->name }}" onchange="changeHeaderSub({{ $val->id }})" /></td>
                                                    @if($hsid==$val->id)
                                                        <td><a href="/admin/connect/view_header_sub_menu/{{ $val->id }}" class="btn btn-success">Ko`rish</a></td>
                                                    @else
                                                        <td><a href="/admin/connect/view_header_sub_menu/{{$id}}/{{ $val->id }}" class="btn btn-default">Ko`rish</a></td>
                                                    @endif
                                                    <td><a href="/admin/connect/del_sub/{{ $val->id }}/{{ $id }}" class="btn btn-danger">Delete</a></td>
                                                </tr>
                                                {{ $num1++ }}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                        <h5>Menyular</h5>
                        <hr/>
                        <form action="/admin/connect/sub_sub_add" method="post">
                            <div class="row">
                                    @csrf
                                    <div class="col-sm-2">
                                        <input type="text" name="name" id="sub_sub_add" class="form-control" placeholder="menu qo`shish..."/>
                                        <input type="hidden" name="menu_sub_id" value="{{ $hsid }}" />
                                        <input type="hidden" name="update" id="update" value="false"/>
                                        <input type="hidden" name="url" id="url" value="{{ URL::current() }}"/>
                                        <input type="hidden" name="id" value="{{ $id }}" />
                                        <input type="submit" class="btn btn-success" style="width: 100%;margin-top: 5px;" id="add_sub" value="qo`shish"/>
                                    </div>
                                <div class="col-sm-10">
                                    @foreach($sub_sub as $val)
                                    <div style="background: #cccccc;display: inline-block;border-radius: 10px;padding: 2px;">
                                        <a href="/admin/connect/view_sub_sub/{{ $val->id }}" id="update_id_{{ $val->id }}" style="margin: 2px;" class="btn">
                                            {{ $val->name }}
                                        </a>
                                            &nbsp;&nbsp;
                                            <span class="glyphicon glyphicon-remove"
                                                  style="border: 1px black solid;padding: 5px;border-radius: 5px;"
                                                  onclick="del_menu({{ $val->id }})">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </span>
                                            &nbsp;&nbsp;
                                            <span style="border: 1px black solid;padding: 5px;border-radius: 5px;"
                                                  class="glyphicon glyphicon-pencil" onclick="edit_menu({{ $val->id }})">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                        <hr/>
                        <style>
                            .tovar{
                                background: #E4E6E9;padding: 10px;border-radius: 10px;
                                display: inline-block;
                                height: 110px;
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
                    </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@extends('admin.layouts.js_product_add')
@endsection