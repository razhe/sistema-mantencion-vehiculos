<?php

namespace App\Http\Controllers;

use App\Models\Historical;
use Illuminate\Http\Request;

class HistoricalController extends Controller
{
    public function getHistoricals($id) {
        $hostoricals = Historical::with('users')->orderBy('id', 'desc')->get();
        return response($hostoricals);
    }
}
