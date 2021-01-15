<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;
use App\Jadwal;
use App\News;
use App\RumahSakit;
use App\Specialist;

class DataController extends Controller
{
    public function getDoctor()
    {
    	$ambil = Doctor::with(['specialist:id,spesialis', 'jadwal:id,agenda,biaya,rumah_sakit_id', 'jadwal.rumahSakit:id,nama_rs,alamat'])->get();
    	return response()->json($ambil);
    }

    public function getNews()
    {
    	$news = News::all();
    	return response()->json($news);
    }
}
