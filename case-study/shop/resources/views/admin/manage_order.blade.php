@extends('admin_trangchu')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Đơn Hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="table-responsive">
      <?php
      $message = Session::get('message');
      if ($message) {
        echo '<span class="text-alert">' . $message . '</span>';
        Session::put('message', null);
      }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Người Đặt</th>
            <th>Ten Sản Phẩm</th>
            <th>Tổng Tiền Hoá Đơn</th>
            <th>Phương Thức</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_order as $key => $order)
          <tr>
            <td>{{App\Customer::find($order->id_customer)->name}}</td>
            <td>{{App\Product::find($order->id)->name}}</td>
            <td>{{App\Bill::find($order->id)->total}}</td>
            
            <td>
              <a href="{{URL::to('/view-order/'.$order->id)}}" class="active styling-edit" ui-toggle-class="">
              <i><img src="source/image/quanli/icons/group.png"></i></a>
              <br>
              <a onclick="return confirm('Bạn có chắc là muốn xóa don hang này ko?')" href="{{URL::to('/delete-order/'.$order->id)}}" class="active styling-edit" ui-toggle-class="">
              <i><img src="source/image/quanli/icons/user_delete.png"></i>
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
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
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