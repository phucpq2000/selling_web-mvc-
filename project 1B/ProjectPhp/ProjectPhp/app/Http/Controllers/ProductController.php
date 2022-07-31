<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Services\Product\ProductService;
use App\Http\Requests\Product\ProductRequest;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService){
        $this -> productService = $productService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(2);
        return view('pages.products.list',  ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.products.add',[
            'title' => 'THÊM SẢN PHẨM MỚI',
            'categories' =>  $this -> productService -> getCategory()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'image' => 'nullable|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',		
            'name' =>'required',
        ],[
            'name.required' => 'Nhập tên sản phẩm!!!',
            'image.mimes' => 'Chỉ chấp nhận hình sản phẩm với đuôi .jpg .jpeg .png .gif',
        ]);
        if ($validate) {
        $products = new Product;
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->category_id = $request->input('category_id');
        $products->price = $request->input('price');
        $products->quantity = $request->input('quantity');

        if ($request->file()) {
            $fileName = $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
            $products->image = '/storage/' . $filePath;
            // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public
            $products->save();
            } 
        }

        return redirect()->route('products.index')->with('thongbao','Thêm sản phẩm thành công!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
