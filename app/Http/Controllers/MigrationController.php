<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class MigrationController extends Controller
{
    public function up()
    {
        $exitCode = Artisan::call('migrate:fresh', ['--force' => true, '--seed' => true]);
        return response()->json([
            'message' => 'Database migrated successfully',
            'exitCode' => $exitCode
        ], 200);
    }

    public function fresh()
    {
        $exitCode = Artisan::call('migrate:fresh', ['--force' => true]);
        return response()->json([
            'message' => 'fresh',
            'exitCode' => $exitCode
        ], 200);
    }
}
