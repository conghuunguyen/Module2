@extends('admin_trangchu')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     thong tin khach hang
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên khach hang</th>
            <th>email</th>
            <th>dia chi</th>
            <th>so dien thoai</th>
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
      chi tiet san pham
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            </th>
            <th>Tên san pham</th>
            <th>so luong</th>
            <th>gia san pham</th>
            <th>tong tien</th>          
            <th style="width:30px;"></th>
          </tr>       
        </thead>
        <tbody> 


          <tr>
            <td>{{$order_by_id->bill_detail}}</td>
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
     thong tin giao hang
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên nguoi nhan hang</th>
            <th>dia chi</th>
            <th>so dien thoai</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>        
          <tr>
            <td></td>
            <td></td>
            <td></td>       
          </tr>   
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection