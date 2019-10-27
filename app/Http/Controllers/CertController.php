<?php

namespace App\Http\Controllers;

use App\Cert;
use Illuminate\Http\Request;

class CertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certs = Cert::take(3)->latest()->get();
        return view('certs.index', ['title' => "Michelle's Certifications", 'certs' => $certs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certs.create', ['title' => "Create new Certification"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cert::create($this->validateRequest($request));
        $certs = Cert::take(3)->latest()->get();
        return view('certs.index', ['title' => "Michelle's Certifications", 'certs' => $certs]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function show(Cert $cert)
    {
        return view('certs.show', ['title' => "Michelle's Certification: $cert->name", 'cert' => $cert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function edit(Cert $cert)
    {
        return view('certs.edit', ['title' => "Edit Certification: $cert->name", 'cert' => $cert]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cert $cert)
    {
        $cert->update($this->validateRequest($request));
        $cert->save();
        return view('certs.show', ['title' => "Michelle's Certification: $cert->name", 'cert' => $cert]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cert $cert)
    {
        $cert->delete();
        $certs = Cert::take(3)->latest()->get();
        return view('certs.index', ['title' => "Michelle's Certifications", 'certs' => $certs]);
    }

    public function validateRequest(Request $request)
    {

        return $request->validate([
            'name' => 'required|min:3|max:255',
            'photo_url' => 'required|min:3|max:255',
            'alt-text' => 'required|min:2|max:255',
            'description' => 'required|min:5',
            'completed_at' => 'date'
        ]);
    }
}
