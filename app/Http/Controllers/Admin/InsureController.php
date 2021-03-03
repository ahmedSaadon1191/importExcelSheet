<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Insure;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InsureController extends Controller
{

    public function index()
    {
        $insures = Insure::all();

        return view('admin.insureance.insure', compact('insures'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'num' => 'required',
        ]);

        try {
            $insure = Insure::create([
                'name' => $request->name,
                'num' => $request->num,
                'created_at' => Carbon::now(),

            ]);
            // session()->flash('updated_Succesfully');

            return redirect()->back()->with('message', 'تم حفظ الضمان  بنجاح');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $id = $request->id;
        $request->validate([
            'name' => 'required',
            'num' => 'required',
        ]);

        try {
            $insure = Insure::find($id)->update([
                'name' => $request->name,
                'num' => $request->num,
                'created_at' => Carbon::now(),

            ]);
            session()->flash('updated_Succesfully');
            return redirect()->back()->with('message', 'تم تعديل الضمان  بنجاح');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }

    }

    public function destroy(Request $request, $id)
    {
        $id = $request->id;
        $insure = Insure::find($id)->delete();

        return redirect()->back()->with('message', 'تم الحذف الضمان  بنجاح');

        return back();

    }
}
