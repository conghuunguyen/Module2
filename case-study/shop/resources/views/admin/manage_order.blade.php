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
            <th>Tên Sản Phẩm</th>
            <th>Tổng Tiền Hoá Đơn</th>
            <th>Phương Thức</th>
            <th>Trang Thai</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_order as $key => $order)
          <tr>
            <td>{{App\Customer::find($order->id_customer)->name}}</td>
            <td>{{App\Product::find($order->id)->name}}</td>
            <td>{{App\Bill::find($order->id)->total}}.VNĐ</td>
            
            <td>
              <a href="{{URL::to('/view-order/'.$order->id)}}" class="active styling-edit" ui-toggle-class="">
              <i><img src="source/image/quanli/icons/group.png" width="20px"></i></a>
              <br>
              <a onclick="return confirm('Bạn muốn xoá đơn hàng này!!')" href="{{URL::to('/delete-order/'.$order->id)}}" class="active styling-edit" ui-toggle-class="">
              <i><img src="source/image/quanli/icons/user_delete.png" width="20px"></i>
              </a>
              <!-- <a href="##"><i><img src="source/image/quanli/icons/chuathanhtoan.png"></i></a> -->
            </td>
            </span></td>

            <td><span class="text-ellipsis">
              <?php 
              if($order->status==0){  
                ?>
              <a onclick="return confirm('Thanh toán đơn hàng')" href="{{URL::to('/payment-order/'.$order->id)}}"  class="active styling-edit" ui-toggle-class="">
              <i><img src="/source/image/quanli/icons/2.png" width="50px">chưa thanh toán</i></a>
              <?php
              }else{
                ?>
              <a href="{{URL::to('/debit-order/'. $order->id)}}" class="active styling-edit" ui-toggle-class="">
              <i><img src="/source/image/quanli/icons/3.png" width="50px" >đã thanh toán</i></a>
              <?php
              }
              ?></span></td>
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
          {{ $all_order->links() }}
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection