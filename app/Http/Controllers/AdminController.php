<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard_view() 
    {
        $blogs = BlogModel::get();

        return view('dashboard', compact('blogs'));
    }

    public function detail_view($id) {
        $blog = BlogModel::where('id', $id)->first();
        return view('detail', compact('blog'));
    }

    public function create_view() {

        $data = [
            'categories' => CategoryModel::get(),
        ];

        return view('create', $data);
    }

    public function create_action(Request $request) {

        $blog = BlogModel::create([
            'judul' => $request->judul,
            'image' => $request->image,
            'description' => $request->description,
            'id_category' => $request->id_category,
        ]);

        $blog->save();
        // dd($request);
        // return view('create');

        Alert::success('Berhasil', 'data masuk', 'success');

        return redirect()->back();
    }

    public function update_view($id) {
        $data = [
            'blog' => BlogModel::where('id', $id)->first(),
            'categories' => CategoryModel::get(),
        ];

        return view('update',$data);
    }

    public function update_action(Request $request) {
        BlogModel::where('id', $request->id)
        ->update([
            'judul' => $request->judul_baru,
            'image' => $request->image_baru,
            'description' => $request->description_baru,
            'id_category' => $request->id_category_baru
        ]);

        Alert::success('Update Berhasil', 'data masuk', 'success');
        // return view('create');

        return redirect()->back();
    }

    public function delete_action(Request $request) {

        BlogModel::where('id', $request->id)->delete();

        Alert::info('Dihapus', 'data dihapus', 'info');
        // return view('create');

        return redirect()->back();
    }
}
