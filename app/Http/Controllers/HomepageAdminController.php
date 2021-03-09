<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageAdminController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
        ]);

        $data = request()->all();
        $homepage = Homepage::find($data['id']);
        $homepage->url = $data['url'];
        $homepage->save();
        return redirect('/');
    }
}
