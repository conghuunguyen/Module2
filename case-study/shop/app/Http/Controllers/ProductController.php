<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
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
        $all_product = DB::table('products')->orderby('id', 'description')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_trangchu')->with('admin.all_product', $manager_product);
    }

    public function edit_product($id)
    {
        $edit_product = DB::table('products')->where('id', $id)->get();
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
            session::put('message', 'them san pham thanh cong');
            return redirect::to('all-product')->with(['flag' => 'success', 'message' => 'cap nhat san pham thanh cong']);
        }
        DB::table('products')->where('id', $id)->Update($data);
        session::put('message', 'cap nhat san pham that bai');
        return redirect()->back()->with(['flag' => 'success', 'message' => 'cap nhat san pham thanh cong']);
    }

    public function delete_product($id){
        DB::table('products')->where('id',$id)->delete();
        session::put('message', 'xoa san pham thang cong');
        return redirect::to('all-product')->with(['flag' => 'success', 'message' => 'cap nhat san pham thanh cong']);
    }

    public function save_product(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['unit_price'] = $request->unit_price;
        $data['promotion_price'] = $request->promotion_price;
        $data['unit'] = $request->unit;
        $get_image = $request->file('image');
        if ($get_image) {
            // return 'yr';
            $get_name_image = $get_image->getClientOriginalName();

            $new_image = $get_name_image . rand(0, 99) . "." . $get_image->getClientOriginalExtension();
            $get_image->move('source/image/product/', $new_image);
            $data['image'] = $new_image;
            // return $data;
            DB::table('products')->insert($data);
            session::put('message', 'them san pham thanh cong');
            return redirect()->back()->with(['flag' => 'success', 'message' => 'them san pham thanh cong']);
        }
        $data['image'] = '';
        DB::table('products')->insert($data);
        session::put('message', 'them san pham thanh cong');
        return redirect()->back()->with(['flag' => 'success', 'message' => 'them san pham thanh cong']);
    }

    public function validateAttribute(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
                'unit_price' => 'required',
                'promotion_price' => 'required',
                'unit' => 'required'
            ],
            [
                'name.required' => 'Vui lòng nhập email',
                'description.required' => 'Không đúng định dạng email',
                'unit_price.required' => 'Email đã có người sử dụng',
                'promotion_price.required' => 'Vui lòng nhập mật khẩu',
                'unit.required' => 'Mật khẩu không giống nhau',
            ]
        );
    }
}
