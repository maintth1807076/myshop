<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list' => Category::whereNotIn('status', [-1])->orderBy('id', 'asc')->paginate(2)
        ];
        return view('admin.category.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Category();
        $item->name = $request->name;
        if($request->hasFile('images')){
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->thumbnail = $result['public_id'].'.'.$result['format'];
        }
        $item->description = $request->description;
        $item->save();
        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'item' => Category::find($id)
        ];
        return view('admin.category.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'item' => Category::find($id)
        ];
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Category::find($id);
        $item->name = $request->name;
        if($request->hasFile('images')){
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->thumbnail = 'http://res.cloudinary.com/kuramakyubi/image/upload/c_fit,h_300,w_300/'.$result['public_id'].'.'.$result['format'];
        }
        $item->description = $request->description;
        $item->save();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
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
            'status' => (int)$request->input('status')));
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
}
