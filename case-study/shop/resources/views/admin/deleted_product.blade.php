@extends('admin_trangchu')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh sản phẩm</th>
            <th>Đơn vị</th>
            <th>Giá sản phẩm</th>
            <th>Giá Khuyến Mãi</th>
            <th>Mô tả sản phẩm</th>
            <th>Thuộc Tính</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $pro->name }}</td>
            <td><img src="/source/image/product/{{$pro->image}}" height="100" width="100"></td>
            <td>{{ $pro->unit }}</td>
            <td>{{ $pro->unit_price}}</td>
            <td>{{ $pro->promotion_price }}</td>
            <td>{{ $pro->description }}</td>
            <td><span class="text-ellipsis">
              </span></td>
            <td>
              <a href="{{URL::to('/restore-product/'.$pro->id)}}" class="active styling-edit" ui-toggle-class="">
                <i><img src="source/image/quanli/icons/user_add.png"></i></a>

              <a onclick="return confirm('không thể xoá sản phẩm này. vì em chưa làm?')" href="{{URL::to('/delete-product/'.$pro->id)}}" class="active styling-edit" ui-toggle-class="">
                <i><img src="source/image/quanli/icons/user_delete.png"></i>
              </a>
            </td>
          </tr>
          @endforeach
@endsection