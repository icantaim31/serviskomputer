<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawaiCount = Pegawai::count();
        $customerCount = Customer::count();
        $keluhanCount = Keluhan::count();

        

        return view('dashboard', [
            'title' => 'Home Page',
            'pegawaiCount' => $pegawaiCount,
            'customerCount' => $customerCount,
            'keluhanCount' => $keluhanCount,

        ]);
    }
}
