<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Artisan;

class MigrationController extends Controller
{
    public function up()
    {
        try {
            $exitCode = Artisan::call('migrate:fresh', ['--force' => true, '--seed' => true]);
        } catch(Exception $e) {
            return $e;
        }
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
