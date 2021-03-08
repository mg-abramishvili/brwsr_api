<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainAdminController extends Controller
{
    public function index()
    {
        $domains = Domain::all();
        return view('domains.index', compact('domains'));
    }

    public function create()
    {
        return view('domains.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
        ]);

        $data = request()->all();
        $domains = new Domain();
        $domains->url = $data['url'];
        $domains->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $domains = Domain::find($id);
        $domains->delete();
        return redirect('/');
    }
}
