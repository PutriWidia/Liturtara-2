<?php

namespace App\Helpers;

use App\Models\Log_Activities;
use Illuminate\Support\Facades\Auth;

class LogHelper
{
    public static function add(string $activity): void
    {
        Log_Activities::create([
            'user_id'  => Auth::id(),
            'activity' => $activity,
        ]);
    }

    /**
     * Tentukan warna dot berdasarkan aktivitas
     */
    public static function dotColor(string $activity): string
    {
        $activity = strtolower($activity);

        if (str_contains($activity, 'create')) {
            return 'bg-green-500';
        }

        if (str_contains($activity, 'update')) {
            return 'bg-blue-500';
        }

        if (str_contains($activity, 'delete')) {
            return 'bg-red-500';
        }

        if (str_contains($activity, 'login')) {
            return 'bg-purple-500';
        }

        return 'bg-gray-400';
    }
}
