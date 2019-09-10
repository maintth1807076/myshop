<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list' => Slide::whereNotIn('status', [-1])->orderBy('id', 'asc')->paginate(2)
        ];
        return view('admin.slide.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.slide.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new Slide();
        if ($request->hasFile('images')) {
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->url = $result['public_id'] . '.' . $result['format'];
        }
        $item->content = $request->description;
        $item->save();
        return redirect('/admin/slides');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Slide $slide
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'item' => Slide::find($id)
        ];
        return view('admin.slide.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Slide $slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = [
            'item' => Slide::find($id)
        ];
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Slide $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $item = Slide::find($id);
        if ($request->hasFile('images')) {
            $image_name = $request->file('images')->getRealPath();;
            Cloudder::upload($image_name, null);
            $result = Cloudder::getResult();
            $item->url = $result['public_id'] . '.' . $result['format'];
        }
        $item->content = $request->description;
        $item->save();
        return redirect('/admin/slides');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Slide $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Slide::find($id);
        if ($item == null) {

        }
        $item->status = -1;
        $item->save();
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }

    public function display()
    {
        $data = [
            'list' => Slide::whereNotIn('status', [-1])
        ];
        return view('client.home', $data);
    }

    public function changeStatus(Request $request)
    {
        $data = Slide::whereIn('id', $request->input('ids'));
        $data->update(array(
            'status' => (int)$request->input('status')));
        return response()->json(['status' => '200', 'message' => 'Okie']);
    }
}
