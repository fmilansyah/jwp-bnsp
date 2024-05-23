<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Registration;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('front.landing-page.index');
    }

    public function storeRegistration(Request $request)
    {
        $date = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
        Registration::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'polyclinic_id' => $request->polyclinic_id,
            'doctor_id' => $request->doctor_id,
            'date' => $date,
        ]);
        return response()->json([
            'status' => 201,
            'message' => 'Pendaftaran Berhasil. Harap datang sesuai dengan tanggal yang anda pilih'
        ], 201);
    }
}
