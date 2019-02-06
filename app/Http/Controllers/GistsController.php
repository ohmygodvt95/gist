<?php

namespace App\Http\Controllers;

use App\Gist;
use App\Http\Requests\GistStoreRequest;
use Illuminate\Http\Request;

class GistsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $gists = Gist::orderBy('updated_at', 'desc')->paginate(10);
        return view('gists.index', compact('gists'));
    }

    public function create()
    {
        return view('gists.create');
    }

    public function show(Gist $gist)
    {
        return view('gists.show', compact('gist'));
    }

    public function edit(Gist $gist) {
        return view('gists.edit', compact('gist'));
    }

    public function store(GistStoreRequest $request)
    {
        $gist = Gist::create($request->only(['name', 'content']));
        return redirect()->route('gists.show', $gist);
    }

    public function update(GistStoreRequest $request, Gist $gist)
    {
        $gist->update($request->only(['name', 'content']));
        return redirect()->route('gists.show', $gist);
    }
}
