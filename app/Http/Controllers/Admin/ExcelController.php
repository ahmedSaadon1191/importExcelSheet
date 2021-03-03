<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Imports\EmpolyeeImport;
use Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExcelController extends Controller
{
    public function index()
    {
        $data = DB::table('csv_customers')->orderBy('id', 'asc')->get();
        return view('admin.cvs.index', compact('data'));
    }

    public function importFile(Request $request)
    {

        $request->validate([
            'excelfile' => 'required|mimes:xls,csv,xlsx',
        ]);
        try {
            if (Excel::import(new EmpolyeeImport, $request->file('excelfile'))) {

                $lastRow = Customer::latest()->first();

                $dataa = Customer::find($lastRow->id)->delete();

                return redirect()->back()->with(['success' => 'تم رفع الملف بنجاح']);

            } else {
                return redirect()->back()->with(['error' => 'هناك خطا في رفع الملف برجاء المحاولة مرة اخري']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' => $e->getMessage()]);
        }

    }

    public function delete(Request $request, $id)
    {
        $id = $request->id;
        $data = DB::table('csv_customers')->where('id', $id)->delete();

        session()->flash('Delete_Succesfully');
        return back();

    }

    public function alldelete()
    {

        $data = DB::table('csv_customers')->delete();

        session()->flash('Delete_Succesfully');
        return back();

    }

}
