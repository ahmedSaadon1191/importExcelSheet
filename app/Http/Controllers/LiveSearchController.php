<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    public function index()
    {
        return view('live_search');
    }

    public function action(Request $request)
    {
        // return $request;
        if ($request->ajax())
        {
            $output = '';
            $query = $request->get('query');

            if ($query != '')
            {
            $data = DB::table('csv_customers')
                ->where('social_number', $query)

                ->orderBy('id', 'desc')
                ->get();

                $total_row = $data->count();

                if ($total_row > 0)
                {
                    foreach ($data as $row)
                    {
                        $output .= '
                        <tr>
                        <td>' . $row->name . '</td>
                        <td>' . $row->social_number . '</td>
                        <td>' . $row->phone . '</td>
                        <td>' . $row->job . '</td>
                        <td>' . $row->going_date . '</td>
                        <td>' . $row->response . '</td>
                        <td>' . $row->start_permit . '</td>
                        <td>' . $row->end_permit . '</td>
                        <td>' . $row->notes . '</td>

                        </tr>
                        ';
                    }
                }

            }else
            {
                $output = '
                    <tr>
                        <td align="center" colspan="9">لا يوجد تصاريح</td>
                    </tr>
                    ';
            }





            $data = array(
                'table_data' => $output,
                // 'total_data' => $total_row,
            );

            return json_encode($data);
        }
    }

}
