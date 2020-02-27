<?php

namespace App\Http\Controllers;

use App\Bill;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\DB as FacadesDB;

session_start();

class ProductController extends Controller
{
    public function add_product()
    {
        // $product = DB::table('product')->orderby('id','description')->get();
        return view('admin.add_product');
    }

    public function all_product()
    {
        $all_product = DB::table('products')->whereNull('deleted_at')->orderby('id', 'description')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_trangchu')->with('admin.all_product', $manager_product);
    }

    public function edit_product($id)
    {
        $edit_product = DB::table('products')->where('id', $id)->get();
        // return $edit_product;
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product);
        return view('admin_trangchu')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['unit_price'] = $request->unit_price;
        $data['promotion_price'] = $request->promotion_price;
        $data['unit'] = $request->unit;
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();

            $new_image = $get_name_image . rand(0, 99) . "." . $get_image->getClientOriginalExtension();
            $get_image->move('source/image/product/', $new_image);
            $data['image'] = $new_image;
            DB::table('products')->where('id', $id)->Update($data);
            session::put('message', 'Thêm Sản Phẩm Thành Công');
            return redirect::to('all-product')->with(['flag' => 'success', 'message' => 'cập nhật sản phẩm thành công']);
        }
        DB::table('products')->where('id', $id)->Update($data);
        session::put('message', 'cap nhat san pham that bai');
        return redirect::to('all-product')->with(['flag' => 'success', 'message' => 'cập nhật sản phẩm thành công']);
    }

    // xoa mem
    public function delete_product($id){
        $product = DB::table('products')->where('id', $id);
        $product->update(['deleted_at' => date("Y-m-d H:i:s")]);
        session::put('message', 'xoa san pham thang cong');
        return redirect()->back()->with(['flag' => 'success', 'message' => 'xoa san pham thanh cong']);
    }

    public function deleted_product(){
        $all_product = DB::table('products')->whereNotNull('deleted_at')->orderby('id', 'description')->get();
        return view('admin.deleted_product', compact('all_product'));
    }

    public function restore_product($id){
        $product = DB::table('products')->where('id', $id);
        $product->update(['deleted_at' => null]);
        return redirect('all-product');
    }

    // xoa cung
    public function delete_deleted($id){
        $delete= DB::table('products')->where('id', $id)->delete();
        return redirect::to('deleted')->with(['flag' => 'success', 'message' => 'xoa sản phẩm thành công']);

    }

    public function save_product(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['unit_price'] = $request->unit_price;
        $data['promotion_price'] = $request->promotion_price;
        $data['unit'] = $request->unit;
        $data['id_type'] = $request->id_type;
        $get_image = $request->file('image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();

            $new_image = $get_name_image . rand(0, 99) . "." . $get_image->getClientOriginalExtension();
            $get_image->move('source/image/product/', $new_image);
            $data['image'] = $new_image;
            DB::table('products')->insert($data);
            session::put('message', 'them san pham thanh cong');
            return redirect()->back()->with(['flag' => 'success', 'message' => 'them san pham thanh cong']);
        }
        $data['image'] = '';
        DB::table('products')->insert($data);
        session::put('message', 'them san pham thanh cong');
        return redirect()->back()->with(['flag' => 'success', 'message' => 'them san pham thanh cong']);
    }

    // quan li don hang
    public function manage_order(){
        
        $all_order = DB::table('bills')->select('bills.*')->orderby('bills.id','note')->paginate(3);
        $manage_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_trangchu')->with('admin.manage_order', $manage_order);
    }

    // show don hang
    public function view_order($id){
        $order_by_id = Bill::find($id);
        $manage_order_by_id = view('admin.view_order')->with('order_by_id', $order_by_id);
        return view('admin_trangchu')->with('admin.view_order', $manage_order_by_id);
    }

    // thanh toán đơn hàng
    public function payment_order($id){
        DB::table('bills')->where('id', $id)->update(['status' => 1]);
        return redirect()->back();
    }

    public function debit_order($id){
        DB::table('bills')->where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }

    public function delete_order($id){
        $delete= DB::table('bills')->where('id', $id)->delete();
        return redirect::to('manage-order')->with(['flag' => 'success', 'message' => 'Xoá đơn hàng thành công']);

    }

    // public function validateAttribute(Request $request)
    // {
    //     $this->validate(
    //         $request,
    //         [
    //             'name' => 'required',
    //             'description' => 'required',
    //             'unit_price' => 'required',
    //             'promotion_price' => 'required',
    //             'unit' => 'required'
    //         ],
    //         [
    //             'name.required' => 'Vui lòng nhập email',
    //             'description.required' => 'Không đúng định dạng email',
    //             'unit_price.required' => 'Email đã có người sử dụng',
    //             'promotion_price.required' => 'Vui lòng nhập mật khẩu',
    //             'unit.required' => 'Mật khẩu không giống nhau',
    //         ]
    //     );
    // }
}
