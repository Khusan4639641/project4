@extends('admin.layouts.index')
@section('content')
    @extends('admin.layouts.css_product_add')
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tovar qo`shish</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/admin/product/add_info_logic" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                    <div class="row">
                    <div class="col-sm-4">
                            <label >Tovar Nomi uz</label>
                            <textarea id="header_uz" class="form-control" name="name_uz" placeholder="tovar nomini uzbekcha kiriting..."></textarea>
                    </div>
                    <div class="col-sm-4">
                            <label for="exampleInputEmail1">Tovar Nomi ru</label>
                            <textarea id="header_ru" class="form-control" name="name_ru" placeholder="Название продукта на русском языке..."></textarea>
                    </div>
                    <div class="col-sm-4">
                            <label for="exampleInputEmail1">Tovar Nomi en</label>
                            <textarea id="header_en" class="form-control" name="name_en" placeholder="Product name in russsian..."></textarea>
                    </div>
                </div>
            </div>
                    <div class="form-group">
                    <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Decription in uzbek
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                            title="Collapse" style="color: black;margin-top: 1px;">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <textarea id="full_uz" name="description_uz" placeholder="Decription in uzbek..."
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                            <strong>Description in Russian</strong>
                            <textarea id="full_ru" name="description_ru" placeholder="Decription in russian..."
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;padding:10px;text-indent:0px;"></textarea>
                    </div>
                    <div class="col-sm-6">
                        <strong>Description in English</strong>
                            <textarea  id="full_en"  name="description_en" placeholder="Decription in english..."
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd;padding:10px;"></textarea>
                    </div>
                    <div class="col-sm-12" style="padding-left:20px;padding-right:20px;">
                        <a class="btn btn-info" style="color:white;font-size:20px;width:100%;" onclick="AjaxOnline()">Translate</a>
                        <br/>
                        <br/>
                    </div>
                    </div> 
                    </div>
                    <input type="hidden" id="token" value="{{ csrf_token() }}"/>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <div class="row">
                                <div class="col-sm-8">
                                    <label for="exampleInputEmail1">Narxi</label>
                                    <input value="0" type="text" class="form-control" name="price" placeholder="tovar narxini kiriting...">
                                </div>
                                <div class="col-sm-4">
                                    <label for="exampleInputEmail1">Kurs</label>
                                    <select name="kurs" id="" class="form-control">
                                        <option value="sum" selected>So`m</option>
                                        <option value="dollar">Dollar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="exampleInputEmail1">Sonini</label>
                            <input type="number" value="0" class="form-control" name="count" placeholder="tovar sonini kiriting...">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleInputEmail1">Skidka narxi</label>
                            <input type="number" class="form-control" name="skidka" value='0' placeholder="tovar skidka kiriting...">
                        </div>
                    <div class="form-group col-sm-3">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Rasm yuklash</label>
                            </div>
                            {{--<div class="input-group-append">--}}
                                {{--<span class="input-group-text" id="">Upload</span>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Rasrochka
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                            title="Collapse" style="color: black;margin-top: 1px;">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label for="exampleInputEmail1">3 oylik</label>
                                            <input type="text" class="form-control" name="order_3" value='0' placeholder="3 oylik...">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="exampleInputEmail1">6 oylik</label>
                                            <input type="text" class="form-control" name="order_6" value='0' placeholder="6 oylik...">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="exampleInputEmail1">9 oylik</label>
                                            <input type="text" class="form-control" name="order_9" value='0' placeholder="9 oylik...">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="exampleInputEmail1">12 oylik</label>
                                            <input type="text" class="form-control" name="order_12" value='0' placeholder="12 oylik...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" style="width: 100%" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <input type="hidden" id="token" value="{{ csrf_token() }}"/>
                    <script>
        function AjaxOnline(){
                var header_uz = (document.getElementById("header_uz").value).replace(/(<([^>]+)>)/gi, "");
                // var short_ru = document.getElementById("short_ru").value;
                var full_uz = (document.getElementById("full_uz").value).replace(/(<([^>]+)>)/gi, "");
                
                var token = $("#token").val();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('onlineTrans') }}",
                    data: {_token: token, header_uz: header_uz, full_uz: full_uz},
                    success: function (data) {
                        
                        var Langs = data.split("<>");
                        var ruskiy = Langs[0];
                        ruskiy = ruskiy.split("=>");

                        var header_ru = ruskiy[0];
                            header_ru = header_ru;
                        var full_ru = ruskiy[1];
                            full_ru = full_ru;
                            
                        var english = Langs[1];
                            english = english.split("=>");
                            english = english;
                            
                        var header_en = english[0];
                        var full_en = english[1];
                            full_en = full_en;
                            
                        document.getElementById("header_en").value = header_en;
                        document.getElementById("header_ru").value = header_ru;
                        
                        document.getElementById("full_en").value = full_en;
                        document.getElementById("full_ru").value = full_ru;
                        
                    }
                });
            }
    </script>
        @extends('admin.layouts.js_product_add')
</section>
@endsection