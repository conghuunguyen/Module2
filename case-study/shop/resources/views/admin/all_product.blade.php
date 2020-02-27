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
            <td>{{ $pro->name }}</td>
            <td><img src="/source/image/product/{{$pro->image}}" height="100" width="100"></td>
            <td>{{ $pro->unit }}</td>
            <td>{{ $pro->unit_price}}</td>
            <td>{{ $pro->promotion_price }}</td>
            <td>{{ $pro->description }}</td>
            <td><span class="text-ellipsis">
              </span></td>
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->id)}}" class="active styling-edit" ui-toggle-class="">
                <i><img src="source/image/quanli/icons/user_edit.png" width="20px"></i></a>

              <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->id)}}" class="active styling-edit" ui-toggle-class="">
                <i><img src="source/image/quanli/icons/user_delete.png" width="20px"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection