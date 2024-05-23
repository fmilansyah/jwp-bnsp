<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inpatient;

class InpatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Inpatient::with(['registration', 'room'])->orderBy('created_at', 'DESC')->get();

        return view('admin.inpatient.list', ['models' => $models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'registration_id' => 'required',
            'room_id' => 'required',
        ]);

        $model = new Inpatient();
        $model->fill($request->all());
        $model->status = Inpatient::STATUS_IN_TREATMENT;
        $model->save();

        return redirect()->route('admin.inpatient.index')->with(['success' => 'Data Berhasil Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Inpatient::findOrFail($id);

        $model->delete();

        return redirect()->route('admin.inpatient.index')->with(['success' => 'Hapus Data Berhasil']);
    }

    public function updateStatus($id)
    {
        $model = Inpatient::findOrFail($id);
        $model->status = Inpatient::STATUS_GO_HOME;
        $model->save();

        return redirect()->route('admin.inpatient.index')->with(['success' => 'Data Berhasil Disimpan']);
    }
}
