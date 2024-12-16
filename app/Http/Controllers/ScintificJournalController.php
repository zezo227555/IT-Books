<?php

namespace App\Http\Controllers;

use App\Models\ScintificJournal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScintificJournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scintificJournals = ScintificJournal::all();
        return view('scintific-journals.index', ['scintificJournals'=> $scintificJournals]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'issn' => 'required',
            'discreption' => 'required',
        ]);

        ScintificJournal::create([
            'name'=> $request->name,
            'issn'=> $request->issn,
            'discreption'=> $request->discreption,
            'user_id'=> Auth::user()->id,
        ]);

        return redirect()->back()->with('success','تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScintificJournal $scintificJournal)
    {
        return view('scintific-journals.show', ['scintificJournal' => $scintificJournal]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScintificJournal $scintificJournal)
    {
        return view('scintific-journals.edit', ['scintificJournal' => $scintificJournal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScintificJournal $scintificJournal)
    {
        $request->validate([
            'name' => 'required',
            'issn' => 'required',
            'discreption' => 'required',
        ]);

        $scintificJournal->update([
            'name'=> $request->name,
            'issn'=> $request->issn,
            'discreption'=> $request->discreption,
        ]);

        return redirect()->back()->with('success','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScintificJournal $scintificJournal)
    {
        $scintificJournal->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');
    }
}
