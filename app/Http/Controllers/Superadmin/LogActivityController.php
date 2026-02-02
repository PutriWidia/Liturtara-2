<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Log_Activities;
use Illuminate\Http\Request;

class LogActivityController extends Controller
{
    public function index()
    {
        $logs = Log_Activities::with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('superadmin.log-activity', compact('logs'));
    }
}
