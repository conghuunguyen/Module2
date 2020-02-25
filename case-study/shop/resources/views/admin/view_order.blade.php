@extends('admin_trangchu')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      thông tin khách hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$order_by_id->customer->name}}</td>
            <td>{{$order_by_id->customer->email}}</td>
            <td>{{$order_by_id->customer->address}}</td>
            <td>{{$order_by_id->customer->phone_number}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br><br>

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      chi tiết sản phẩm
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            </th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá Sản Phẩm</th>
            <th>Tổng Tiền</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($order_by_id->bill_detail as $key=>$by_id)
          <tr>
            <td>{{$by_id->product->name}}</td>
            <td>{{$by_id->quantity}}</td>
            <td>{{$by_id->unit_price}}</td>
            <td>{{ $by_id->quantity * $by_id->unit_price }}</td>
          </tr>
          @endforeach
          <tr>
            <th><u>Tổng Tiền Hoá Đơn:</u></th>
            <td></td>
            <td></td>
            <td><u><b>{{$order_by_id->total}}</b></u></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<br><br>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Thông Tin Giao Hàng
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên Người Nhận Hàng</th>
            <th>Địa Chỉ</th>
            <th>Số Điện Thoại</th>
            <th>Ghi Chú</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$order_by_id->customer->name}}</td>
            <td>{{$order_by_id->customer->address}}</td>
            <td>{{$order_by_id->customer->phone_number}}</td>
            <td>{{$order_by_id->customer->note}}</td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection