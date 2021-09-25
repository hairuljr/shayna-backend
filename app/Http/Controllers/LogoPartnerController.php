<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogoPartnerRequest;
use App\Models\LogoPartner;
use Illuminate\Http\Request;

class LogoPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = LogoPartner::all();
        return view('pages.logo-partner.index', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.logo-partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LogoPartnerRequest $request)
    {
        $data = $request->validated();
        $data['photo'] = $request->file('photo')->store(
            'assets/partners',
            'public'
        );
        LogoPartner::create($data);
        toastCreate('Partner');
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LogoPartner $partner)
    {
        $partners = $partner;
        return view('pages.logo-partner.edit', compact('partners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LogoPartnerRequest $request, LogoPartner $partner)
    {
        $data = $request->validated();
        if ($request->photo) {
            $data['photo'] = $request->file('photo')->store(
                'assets/partners',
                'public'
            );
            $partner->update($data);
        } else {
            $partner->name = $request->name;
            $partner->save();
        }
        toastUpdate('Partner');
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $logo = LogoPartner::findOrFail($id);
        $photo = explode('/', $logo->photo);
        deletePict('partners', $photo[6]);
        $logo->delete();
    }
}
