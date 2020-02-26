@extends('admin_trangchu')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Sản Phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="save-product" method="post" file=true role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            @if(Session::has('flag'))
                            <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                            @endif
                            <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh Sản Phẩm</label>
                            <input type="file" name="image" class="form-control" id="exampleInputEmail1" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Đơn Vị</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="unit" id="exampleInputEmail1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá Sản Phẩm</label>
                            <input type="text" name="unit_price" class="form-control" id="exampleInputEmail1" required> </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá Khuyến Mãi</label>
                            <input type="text" name="promotion_price" class="form-control" id="exampleInputEmail1"> </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                            <textarea style="resize:none" rows="8" class="form-control" name="description" id="exampleInputEmail1"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">THÊM Sản Phẩm</button>
                    </form>
                </div>
            </div>

    </div>
    </section>

</div>
@endsection