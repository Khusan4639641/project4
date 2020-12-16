@extends('admin.layouts.index')
@extends('admin.layouts.css_product')
@section('content')
<style>
         #map {
            width: 100%; height: 300px; padding: 0; margin: 0;
            display:none;
        }
    </style>
    <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <h1>zakaz</h1>
        <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maxsulotlar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- /.card-body -->
                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Ko`rilmagan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Ko`rildi</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <table id="dtBasicExample" class="table" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">Zakaz ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">TELL
                                                    </th>
                                                    <th class="th-sm">ADRESS
                                                    </th>
                                                    <th class="th-sm">HARIDNI KO`RISH
                                                    </th>
                                                    <th class="th-sm">DATA
                                                    </th>
                                                    <th class="th-sm">HOLATI
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{ $num=1 }}
                                                @foreach($orders as $val)
                                                @if($val->id==$product_id)
                                                    <tr style='background:rgba(0,0,255,0.5);'>
                                                        <td>{{ $num }}</td>
                                                        <td>{{ $val->id }}</td>
                                                        <td>{{ $val->name }}</td>
                                                        <td>{{ $val->tell }}</td>
                                                        @if($val->typemodel=='true')
                                                            <td><span style="color:red;">Lokatsiya kiritilgan</span> </td>
                                                        @else
                                                            <td>{{ $val->adress }} </td>
                                                        @endif
                                                        <td>
                                                            @if($val->typemodel=='true')
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);getLocation();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @else
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);locat();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @endif
                                                            <input id="zakaz_id_{{ $num }}" type="hidden" value="{{ $val->prod_id }}"/>
                                                            <input id="zakaz_count_{{ $num }}" type="hidden" value="{{ $val->prod_count }}"/>
                                                        </td>
                                                        <td>{{ $val->rage_date }}</td>
                                                        <td>
                                                            <a class='btn btn-info' href="/admin/disable_zakaz/{{ $val->id }}">Ko`rildi</a>
                                                        </td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td>{{ $num }}</td>
                                                        <td>{{ $val->id }}</td>
                                                        <td>{{ $val->name }}</td>
                                                        <td>{{ $val->tell }}</td>
                                                        @if($val->typemodel=='true')
                                                            <td><span style="color:red;">Lokatsiya kiritilgan</span> </td>
                                                        @else
                                                            <td>{{ $val->adress }} </td>
                                                        @endif
                                                        <td>
                                                            @if($val->typemodel=='true')
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);getLocation();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @else
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);locat();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @endif
                                                            <input id="zakaz_id_{{ $num }}" type="hidden" value="{{ $val->prod_id }}"/>
                                                            <input id="zakaz_count_{{ $num }}" type="hidden" value="{{ $val->prod_count }}"/>
                                                        </td>
                                                        <td>{{ $val->rage_date }}</td>
                                                        <td>
                                                            <a class='btn btn-info' href="/admin/disable_zakaz/{{ $val->id }}">Ko`rildi</a>
                                                        </td>
                                                    </tr>
                                                @endif    
                                                    {{ $num++ }}
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">Zakaz ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">TELL
                                                    </th>
                                                    <th class="th-sm">ADRESS
                                                    </th>
                                                    <th class="th-sm">HARIDNI KO`RISH
                                                    </th>
                                                    <th class="th-sm">DATA
                                                    </th>
                                                    <th class="th-sm">HOLATI
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                              <table id="dtBasicExample" class="table" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">ZAKAZ ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">TELL
                                                    </th>
                                                    <th class="th-sm">ADRESS
                                                    </th>
                                                    <th class="th-sm">HARIDNI KO`RISH
                                                    </th>
                                                    <th class="th-sm">DATA
                                                    </th>
                                                    <th class="th-sm">HOLATI
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{ $num=1 }}
                                                @foreach($orders1 as $val)
                                                    @if($val->id==$product_id)
                                                    <tr style='background:rgba(0,0,255,0.5);'>
                                                        <td>{{ $num }}</td>
                                                        <td>{{ $val->id }}</td>
                                                        <td>{{ $val->name }}</td>
                                                        <td>{{ $val->tell }}</td>
                                                        
                                                        @if($val->typemodel=='true')
                                                            <td><span style="color:red;">Lokatsiya kiritilgan</span> </td>
                                                        @else
                                                            <td>{{ $val->adress }}</td>
                                                        @endif
                                                        <td>
                                                            @if($val->typemodel=='true')
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);getLocation();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @else
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);locat();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @endif
                                                            <input id="zakaz_id_{{ $num }}" type="hidden" value="{{ $val->prod_id }}"/>
                                                            <input id="zakaz_count_{{ $num }}" type="hidden" value="{{ $val->prod_count }}"/>
                                                        </td>
                                                        <td>{{ $val->rage_date }}</td>
                                                        <td>
                                                            <a class='btn btn-info' href="/admin/disable_zakaz/{{ $val->id }}">Ko`rildi</a>
                                                        </td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td>{{ $num }}</td>
                                                        <td>{{ $val->id }}</td>
                                                        <td>{{ $val->name }}</td>
                                                        <td>{{ $val->tell }}</td>
                                                        @if($val->typemodel=='true')
                                                            <td><span style="color:red;">Lokatsiya kiritilgan</span> </td>
                                                        @else
                                                            <td>{{ $val->adress }}</td>
                                                        @endif
                                                        <td>
                                                            @if($val->typemodel=='true')
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);getLocation();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @else
                                                                <button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id);locat();"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>
                                                            @endif
                                                            <!--<button class='btn btn-success' id="{{ $num }}" onclick="modalInner(id)"  data-toggle="modal" data-target="#myModal">{{ $val->price }}</button>-->
                                                            <input id="zakaz_id_{{ $num }}" type="hidden" value="{{ $val->prod_id }}"/>
                                                            <input id="zakaz_count_{{ $num }}" type="hidden" value="{{ $val->prod_count }}"/>
                                                        </td>
                                                        <td>{{ $val->rage_date }}</td>
                                                        <td>
                                                            <a class='btn btn-info' href="/admin/disable_zakaz/{{ $val->id }}">Ko`rildi</a>
                                                        </td>
                                                    </tr>
                                                @endif    
                                                    {{ $num++ }}
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">ZAKAZ ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">TELL
                                                    </th>
                                                    <th class="th-sm">ADRESS
                                                    </th>
                                                    <th class="th-sm">HARIDNI KO`RISH
                                                    </th>
                                                    <th class="th-sm">DATA
                                                    </th>
                                                    <th class="th-sm">HOLATI
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            {{--finish--}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

<table id="dataInfo" class="table" width="100%" style='display:none;'>
                                                <thead>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">Soni
                                                    </th>
                                                    <th class="th-sm">NARXI
                                                    </th>
                                                    <th class="th-sm">RASMI
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $val)
                                                    <tr>
                                                        <td>{{ $val->id }}</td>
                                                        <td><input id="prod_name_{{ $val->id }}" value="{{ $val->name }}" type="hidden"/></td>
                                                        <td><input id="prod_count_{{ $val->id }}" value="{{ $val->count }}" type="hidden"/></td>
                                                        <td><input id="prod_price_{{ $val->id }}" value="{{ $val->price }}" type="hidden"/></td>
                                                        <td><input id="prod_image_{{ $val->id }}" value="{{ $val->img_url }}" type="hidden"/></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">Soni
                                                    </th>
                                                    <th class="th-sm">NARXI
                                                    </th>
                                                    <th class="th-sm">RASMI
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <table id="dataInfo" class="table" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">Soni
                                                    </th>
                                                    <th class="th-sm">NARXI
                                                    </th>
                                                    <th class="th-sm">RASMI
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody id="tableInner">
                                                    
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">ISMI
                                                    </th>
                                                    <th class="th-sm">Soni
                                                    </th>
                                                    <th class="th-sm">NARXI
                                                    </th>
                                                    <th class="th-sm">RASMI
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <div id="locat" style="width:100%;height:300px;display:block;">
                                                <h4>Lokatsiyasi</h3>  
                                                <div id="map"></div>
                                            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5aa14fdc-a0b9-43b5-bdb8-be641072b46e" type="text/javascript"></script>
    <script src="{{ asset('js/icon_customImage.js')}}" type="text/javascript"></script>
<script>
    function locat(){
        document.getElementById("locat").style.display="none";
    }
    function modalInner(id){
        var htmlInfo="",jsonId="",jsonCount="";
        $("#tableInner").html("");
        jsonId = JSON.parse($("#zakaz_id_"+id).val());
        jsonCount = JSON.parse($("#zakaz_count_"+id).val());
        
        for(var $i=0;$i<jsonId.length;$i++){
        htmlInfo+="<tr><td>"+($i+1)+"</td><td>"+$("#prod_name_"+jsonId[$i]).val()+"</td><td>"+jsonCount[$i]+"</td><td>"+$("#prod_price_"+jsonId[$i]).val()+"</td><td><img style='width:70px;height:70px;' src='https://7market.uz/media/"+$("#prod_image_"+jsonId[$i]).val()+"'></td></tr>";
        }
        $("#tableInner").html(htmlInfo);
    }
</script>
@endsection
@extends('admin.layouts.js_product')