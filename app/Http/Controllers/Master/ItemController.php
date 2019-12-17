<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Get the resource
     * @param int $id
     * @return array $result
     */
    public function getData($id = null)
    {
        $result = Item::where('id', $id)->first();
        $row = self::generateColumns('items', $result);
        return $row;
    }

    /**
     * method to generate object of table column
     * @param String $table
     * @param Object $table_row
     * @param Array $additional_cols
     * @return Object $row
     */
    public function generateColumns($table, $table_row, $additional_cols = [])
    {
        $columns = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table));
        foreach ($columns as $column) {
            if ($column->Type == 'date' || $column->Type == 'datetime' || $column->Type == 'timestamp') {
                $row[$column->Field] = isset($table_row->{$column->Field}) ? date('d-m-Y', strtotime($table_row->{$column->Field})) : '' ;
            } else {
                $row[$column->Field] = isset($table_row->{$column->Field}) ? $table_row->{$column->Field} : '' ;
            }
        }
        if (!empty($additional_cols)) {
            foreach ($additional_cols as $additional_col) {
                $row[$additional_col] = isset($table_row->{$additional_col}) ? $table_row->{$additional_col} : '' ;
            }
        }
        return (object) $row;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.master.item.table')->with(['page' => 'item']);
    }

    /**
     * Display resource in datatables format
     * @return Datatables
     */
    public function getDataTable()
    {
        $query = Item::query()->select('id AS id_button', 'items.*');

        return DataTables::eloquent($query)
            ->addIndexColumn()
            ->editColumn('id_button', function ($d) {
                return view()->make('pages.master.item.tableButtons')->with([
                    'id' => $d->id_button,
                    'status' => $d->status
                ]);
            })
            ->editColumn('status', 'pages.master.item.statusBadge')
            ->rawColumns(['id_button', 'status'])
            ->make();
    }

    /**
     * Display form resource
     * @param Request $request
     * @return Response $response
     */
    public function form(Request $request)
    {
        $id = $request->id;
        $row = $this->getData($id);
        return view('pages.master.item.form')->with(['page' => 'item', 'row' => $row]);
    }
}
