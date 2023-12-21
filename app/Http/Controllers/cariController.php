<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ayam;
use App\Models\jenis_ayam;
use App\Models\Post;
use DB;

class cariController extends Controller
{
    public function search(Request $request)
    {
        $inputsearch = $request['inputsearch'];
        $keyresult = Post::all('jenis_ayam_id')
            ->where('name', 'LIKE', '%' . $inputsearch . '%')
            ->OrWhere('content', 'LIKE', '%' . $inputsearch . '%')
            ->get();
        echo $keyresult;
    }
}
