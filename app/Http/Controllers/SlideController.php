<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class SlideController extends Controller
{
    public function index()
    {
        $data = [
            'list' => Slide::whereNotIn('status', [-1])->orderBy('id', 'asc')->paginate(2)
        ];
        return view('admin.slide.list', $data);
    }

    public function create()
    {
        return view('admin.slide.form');
    }

    public function store(Request $request)
    {
        $item = new Slide();
        if ($request->hasFile('images')) {
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->url = 'http://res.cloudinary.com/kuramakyubi/image/upload/c_fit,h_300,w_300/' . $result['public_id'] . '.' . $result['format'];
        }
        $item->content = $request->description;
        $item->save();
        return redirect('/admin/slides');
    }

    public function show($id)
    {
        $data = [
            'item' => Slide::find($id)
        ];
        return view('admin.slide.detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'item' => Slide::find($id)
        ];
        return $data;
    }

    public function update(Request $request, $id)
    {
        $item = Slide::find($id);
        if ($request->hasFile('images')) {
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->url = $result['public_id'] . '.' . $result['format'];
        }
        $item->content = $request->get('content');
        $item->save();
        return redirect('/admin/slides');
    }

    public function destroy($id)
    {
        $item = Slide::find($id);
        if ($item == null) {
        }
        $item->status = -1;
        $item->save();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }

    public function changeStatus(Request $request)
    {
        $data = Slide::whereIn('id', $request->input('ids'));
        $data->update(array(
            'status' => (int)$request->input('status'),
            'updated_at' => date('Y-m-d H:i:s')));
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
}
