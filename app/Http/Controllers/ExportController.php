<?php

namespace App\Http\Controllers;

use App\Models\FormPermohonan;
use PDF;
use App;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ExportController extends Controller
{
    public function pemohon(FormPermohonan $formPermohonan, $id)
    {
        $post = FormPermohonan::whereId($id)->get()->first();

        $pdf = PDF::loadview('admin.ambulance.exportdata', array('post' => $post))
        ->setPaper('a4', 'portrait');

        return $pdf->download ('datapemohon.pdf');
       
    }
}