@extends('admin_trangchu')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản Lí Đơn Hàng
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
            <th>Tên Khách Hàng </th>
            <th>Số điện Thoại</th>
            <th>Địa chỉ khách hàng</th>
            <th>Tên Sản Phẩm</th>
            <!-- <th>Giá Sản Phẩm</th> -->
            <th>Số Lượng Sản Phẩm</th>
            <th>Tổng Tiền</th>
            <th>Hình Thức</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_order as $key => $order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{App\Customer::find($order->id_customer)->name}}</td>
            <td>{{App\Customer::find($order->id_customer)->phone_number}}</td>
            <td>{{App\Customer::find($order->id_customer)->address}}</td>
            <td>{{App\Product::find($order->id)->name}}</td>
            <td>{{App\BillDetail::find($order->id)->quantity}}</td>
            <td>{{App\Bill::find($order->id)->total}}</td>
            
            <td><span class="text-ellipsis">
              </span></td>
            <td>
            <button type="submit" class="btn btn-info">Thanh Toan</button>
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