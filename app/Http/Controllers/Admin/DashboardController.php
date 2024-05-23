<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Polyclinic;
use App\Models\Doctor;
use App\Models\Inpatient;
use App\Models\Registration;
use App\Models\Room;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalPolyclinic = Polyclinic::count();
        $totalDoctor = Doctor::count();
        $totalRegistration = Registration::count();
        $totalRoom = Room::count();
        $totalInpatient = Inpatient::where('status', Inpatient::STATUS_IN_TREATMENT)->count();

        return view('admin.dashboard.index', [
            'totalUser' => $totalUser,
            'totalPolyclinic' => $totalPolyclinic,
            'totalDoctor' => $totalDoctor,
            'totalRegistration' => $totalRegistration,
            'totalRoom' => $totalRoom,
            'totalInpatient' => $totalInpatient,
        ]);
    }
}
