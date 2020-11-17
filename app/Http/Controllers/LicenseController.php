<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLicense;
use App\Models\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $licenses = License::with('users')->get();
        return view('licenses.index', ['licenses' => $licenses]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('licenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $licence = License::create($request->all());

        return redirect()->route('licenses.index');
    }

    /**
     * @param License $license
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(License $license)
    {
        return view('licenses.show', ['license' => $license]);
    }

    /**
     * @param License $license
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(License $license)
    {
        return view('licenses.edit', ['license' => $license]);
    }

    /**
     * @param UpdateLicense $request
     * @param License $license
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(UpdateLicense $request, License $license)
    {
        $license->update($request->all());
        return view('licenses.show', ['license' => $license]);
    }

    /**
     * @param License $license
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(License $license)
    {
        $license->delete();
        return redirect()->route('licenses.index');
    }
}
