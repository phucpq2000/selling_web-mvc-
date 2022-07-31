<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateFormRequest;
use App\Http\Services\Category\CategoryService;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService){
        $this -> categoryService = $categoryService;
    }


    public function create(){
        return view('pages.categories.add',[
            'title' => 'THÊM DANH MỤC MỚI'
        ]);
    }

    public function store(CreateFormRequest $request){
        $this -> categoryService-> create($request);

        return redirect()->back()->with('thongbao','Thêm danh mục thành công!!!');
    }

    public function index(){
        $categories = Category::paginate(2);
        return view('pages.categories.list',  ['categories' => $categories]);
    }

    public function edit($id){
        $category =  DB::table('categories')->where('id',$id)->first();
		return View('pages.categories.edit',['category'=>$category]);
    }

    public function update(Request $request, $id){
        $category = new Category();
			$category->name = $request->input('name');
			$category->description = $request->input('description');
			$category->content = $request->input('content');
			$affected = DB::table('categories')
				->where('id', $id)
				->update(['name' =>  $category->name,
							'description' =>  $category->description,
							'content' =>  $category->content
					]);
        return redirect()->route('category.index',[$id])->with('thongbao','Cập nhật danh mục thành công!!!');
    }

    public function destroy($id){
        $category = DB::table('categories')->where('id',$id)->delete();
        return redirect()->route('category.index')->with('thongbao','Xóa danh mục thành công!!!');
    }
}
