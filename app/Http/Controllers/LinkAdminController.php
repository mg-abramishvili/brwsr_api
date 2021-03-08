<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Domain;
use Illuminate\Http\Request;

class LinkAdminController extends Controller
{
    public function index()
    {
        $links = Link::all();
        $domains = Domain::all();
        return view('links.index', compact('links', 'domains'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
        ]);

        $data = request()->all();
        $links = new Link();
        $links->url = $data['url'];
        $links->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $links = Link::find($id);
        $links->delete();
        return redirect('/');
    }
}
