<?php

namespace App\Http\Controllers;

use App\Models\Jadwalujian;
use App\Traits\Table;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class JadwalujianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use Table;

    protected $model = Jadwalujian::class;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Jadwalujian::query())
                ->addColumn('action', function ($data) {
                    $download = '<a target="_blank" href="' . url('file_ujian/' . $data->file) . '" data-id="' . $data->id . '" class="btn btn-primary">Unduh</a>';
                    return $download;
                })
                ->make(true);
        }
        return view('jadwalujian');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formjadwalujian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('file');
        $new_name = rand() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("file_ujian"), $new_name);
        $data['file'] = $new_name;
        Jadwalujian::create($data);
        return redirect()->back()->with(['success' => 'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function anyData(Request $request)
    {
        return DataTables::of(Jadwalujian::query())
            ->addColumn('semester', function ($data) {
                $semester = "";
                if ($data->semester == 1) {
                    $semester = "Ganjil";
                } elseif ($data->semester == 2) {
                    $semester = "Genap";
                }
                return $semester;
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data">Hapus</a>';
                return $del;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
