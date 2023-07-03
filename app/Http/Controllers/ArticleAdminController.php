<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleAdminController extends Controller
{

    public function crud(){
        return view('admin.articleInput', [
            'title' => 'articleAdmin',
            'active' => 'article'
        ]);
    }
    public function crudproses(Request  $request){
        $fileimage = $request->file('gambar');
        $imagename = $request->title.".".$fileimage->getClientOriginalExtension(); //sebelum mengakhiri dengan extension kita bisa nambah dengan nama image dengan nim
        Storage::disk('public')->putFileAs('img', $fileimage, $imagename);

        $mhs = article::create([
            'title' => $request->title,
            'category_id' => $request->categoryid,
            'body' => $request->body,
            'imageUrl'=>$imagename
        ]);
    }
}
