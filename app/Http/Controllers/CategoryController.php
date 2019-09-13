<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'list' => Category::whereNotIn('status', [-1])->orderBy('id', 'asc')->paginate(2)
        ];
        return view('admin.category.list', $data);
    }

    public function create()
    {
        return view('admin.category.form');
    }

    public function store(CategoryRequest $request)
    {
        $request->validated();
        $item = new Category();
        $item->name = $request->name;
        if ($request->hasFile('images')) {
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->thumbnail = 'http://res.cloudinary.com/kuramakyubi/image/upload/c_fit,h_300,w_300/' . $result['public_id'] . '.' . $result['format'];
        }
        $item->description = $request->description;
        $item->save();
        return redirect('/admin/categories');
    }

    public function show($id)
    {
        $data = [
            'item' => Category::find($id)
        ];
        return view('admin.category.detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'item' => Category::find($id)
        ];
        return $data;
    }

    public function update(Request $request, $id)
    {
        $item = Category::find($id);
        $item->name = $request->name;
        if ($request->hasFile('images')) {
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->thumbnail = 'http://res.cloudinary.com/kuramakyubi/image/upload/c_fit,h_300,w_300/' . $result['public_id'] . '.' . $result['format'];
        }
        $item->description = $request->description;
        $item->save();
        return redirect('/admin/categories');
    }

    public function destroy($id)
    {
        $item = Category::find($id);
        if ($item == null) {

        }
        $item->status = -1;
        $item->save();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }

    public function changeStatus(Request $request)
    {
        $data = Category::whereIn('id', $request->input('ids'));
        $data->update(array(
            'status' => (int)$request->input('status'),
            'updated_at' => date('Y-m-d H:i:s')));
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
}
