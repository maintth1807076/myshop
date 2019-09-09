<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemDetails;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

class DemoImageUploadController extends Controller
{
    public function create()
    {
        return view('admin.image.form');
    }

    public function upload(Request $request)
    {
//        $image_name = $request->file('thumbnail')->getRealPath();;
//        Cloudder::upload($image_name, null);
//        $result = Cloudder::getResult();
//        $image_id = $result['public_id'].'.'.$result['format'];
//        return $image_id;
    }

    public function uploadForm()
    {
        return view('admin.image.form');
    }
    public function show()
    {
        $data = [
            'list' => ItemDetails::all()
        ];
        return $data;
    }

    public function uploadSubmit(Request $request)
    {
        $item = Item::create($request->all());
        foreach ($request->photos as $photo) {
            $image_name = $photo->getRealPath();;
        Cloudder::upload($image_name, null);
        $result = Cloudder::getResult();
        $image_id = $result['public_id'].'.'.$result['format'];
            $filename = $photo->store('photos');
            ItemDetails::create([
                'item_id' => $item->id,
                'filename' => $image_id
            ]);
        }
//        $this->validate($request, [
//            'name' => 'required',
//            'photos' => 'required',
//        ]);
//        if ($request->hasFile('photos')) {
//            $allowedfileExtension = ['pdf', 'jpg', 'png', 'docx'];
//            $files = $request->file('photos');
//            foreach ($files as $file) {
//                $filename = $file->getClientOriginalName();
//                $extension = $file->getClientOriginalExtension();
//                $check = in_array($extension, $allowedfileExtension);
////dd($check);
//                if ($check) {
//                    $items = Item::create($request->all());
//                    foreach ($request->photos as $photo) {
//                        $filename = $photo->store('photos');
//                        ItemDetails::create([
//                            'item_id' => $items->id,
//                            'filename' => $filename
//                        ]);
//                    }
//                }
//            }
//
//        }
    }
}
