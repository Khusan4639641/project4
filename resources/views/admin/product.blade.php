@extends('admin.layouts.index')
@section('content')
    @extends('admin.layouts.css_product')
<br/>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success" id="div">
                        {{ session('status') }}
                        <button type="button" class="btn btn-tool" onclick="removeDiv()" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <script>
                        setTimeout(function(){ document.getElementById('div').style.display='none'; }, 3000);
                        function removeDiv(){
                            document.getElementById('div').style.display='none';
                        }
                    </script>
                @endif
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maxsulotlar</h3>
                            <a href="/admin/product/add" class="btn btn-success float-right"> Product qo`shish </a>
                        </div>
                        <!-- /.card-header -->
                        <!-- /.card-body -->
                        <div class="col-12 col-sm-12">
                            {{--start--}}
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Active</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Qolmagan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Disactive</a>
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
                                                    <th class="th-sm">NAME
                                                    </th>
                                                    <th class="th-sm">PRICE
                                                    </th>
                                                    <th class="th-sm">SKIDKA
                                                    </th>
                                                    <th class="th-sm">SONI
                                                    </th>
                                                    <th class="th-sm">IMG
                                                    </th>
                                                    <th class="th-sm">DISABLED
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    {{ $num=1 }}
                                                @foreach($active as $val)
                                                    <tr>
                                                        <td>{{ $num }}</td>
                                                        <td><a href="/admin/product/edit/{{ $val->id }}">{{ $val->name }}</a> </td>
                                                        <td>{{ $val->price }} {{ $val->kurs }} </td>
                                                        <td>{{ $val->skidka_price }} </td>
                                                        <td>{{ $val->count }} </td>
                                                        @if($type_arrays[$num-1]!="mp4")
                                                            <td><img src="/media/{{ $val->img_url }}" alt="" style="width: 100px;"> </td>
                                                        @else
                                                            <td><video src="/media/{{ $val->img_url }}" alt="" style="width: 100px;"></video></td>
                                                        @endif
                                                        <td>
                                                            <a href="/admin/product/dis/{{ $val->id }}" class="btn btn-default"> Disabled </a>
                                                        </td>
                                                    </tr>
                                                    {{ $num++ }}
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID
                                                    </th>
                                                    <th>NAME
                                                    </th>
                                                    <th>PRICE
                                                    </th>
                                                    <th>SKIDKA
                                                    </th>
                                                    <th>SONI
                                                    </th>
                                                    <th>IMG
                                                    </th>
                                                    <th>DISABLED
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            <table id="dtBasicExample1" class="table" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">NAME
                                                    </th>
                                                    <th class="th-sm">PRICE
                                                    </th>
                                                    <th class="th-sm">SKIDKA
                                                    </th>
                                                    <th class="th-sm">SONI
                                                    </th>
                                                    <th class="th-sm">IMG
                                                    </th>
                                                    <th class="th-sm">DISABLED
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{ $num=1 }}
                                                @foreach($noll as $val)
                                                    <tr>
                                                        <td>{{ $num }}</td>
                                                        <td><a href="/admin/product/edit/{{ $val->id }}">{{ $val->name }}</a> </td>
                                                        <td>{{ $val->price }} {{ $val->kurs }} </td>
                                                        <td>{{ $val->skidka_price }} </td>
                                                        <td>
                                                                {{ $val->count }}
                                                        </td>
                                                        <td><img src="/media/{{ $val->img_url }}" alt="" style="width: 100px;"> </td>
                                                        <td>
                                                            <a href="/admin/product/dis/{{ $val->id }}" class="btn btn-default"> Disabled </a>
                                                        </td>
                                                    </tr>
                                                    {{ $num++ }}
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID
                                                    </th>
                                                    <th>NAME
                                                    </th>
                                                    <th>PRICE
                                                    </th>
                                                    <th>SKIDKA
                                                    </th>
                                                    <th>SONI
                                                    </th>
                                                    <th>IMG
                                                    </th>
                                                    <th>DISABLED
                                                    </th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                            <table id="dtBasicExample2" class="table" width="100%">
                                                <thead>
                                                <tr>
                                                    <th class="th-sm">ID
                                                    </th>
                                                    <th class="th-sm">NAME
                                                    </th>
                                                    <th class="th-sm">PRICE
                                                    </th>
                                                    <th class="th-sm">SKIDKA
                                                    </th>
                                                    <th class="th-sm">IMG
                                                    </th>
                                                    <th class="th-sm">DISABLED
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{ $num=1 }}
                                                @foreach($dis as $val)
                                                    <tr>
                                                        <td>{{ $num }}</td>
                                                        <td>{{ $val->name }}</td>
                                                        <td>{{ $val->price }} {{ $val->kurs }} </td>
                                                        <td>{{ $val->skidka_price }} </td>
                                                        <td><img src="/media/{{ $val->img_url }}" alt="" style="width: 100px;"> </td>
                                                        <td>
                                                            <a href="/admin/product/del/{{ $val->id }}" class="btn btn-danger"> Delete </a>
                                                            <a href="/admin/product/act/{{ $val->id }}" class="btn btn-default"> Active </a>
                                                        </td>
                                                    </tr>
                                                    {{ $num++ }}
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th>ID
                                                    </th>
                                                    <th>NAME
                                                    </th>
                                                    <th>PRICE
                                                    </th>
                                                    <th>SKIDKA
                                                    </th>
                                                    <th>IMG
                                                    </th>
                                                    <th>DISABLED
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
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    @extends('admin.layouts.js_product')
@endsection