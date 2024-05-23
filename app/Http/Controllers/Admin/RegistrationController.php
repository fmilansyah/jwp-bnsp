<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Room;

class RegistrationController extends Controller
{
    public function index()
    {
        $models = Registration::with(['polyclinic', 'doctor'])->orderBy('date', 'DESC')->get();
        $rooms = Room::get();

        return view('admin.registration.list', ['models' => $models, 'rooms' => $rooms]);
    }
}
