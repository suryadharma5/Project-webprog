<?php

namespace App\Http\Controllers;

use App\Models\Menfess;
use Illuminate\Http\Request;

class MenfessAdminController extends Controller
{
    public function index(){
        return view('admin.menfess', [
            'title' => 'Menfess',
            'active' => 'menfess',
            'menfess' => Menfess::all()
        ]);
    }

    public function destroy($id){
        $men = Menfess::find($id);
        $men->delete();

        return redirect()->back();
    }
}
