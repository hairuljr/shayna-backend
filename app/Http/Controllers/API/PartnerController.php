<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LogoPartner;

class PartnerController extends Controller
{
  public function all()
  {
    $partners = LogoPartner::all();
    return ResponseFormatter::success($partners, 'Data partner berhasil diambil');
  }
}
