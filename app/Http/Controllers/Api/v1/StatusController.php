<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;

class StatusController extends BaseController
{
    public function getStatuses()
    {


        // Fetch the statuses of 'website' and 'ai_model'
        $statuses = \DB::table('statuses')
            ->whereIn('name', ['website', 'ai_model'])
            ->get();

        return response()->json($statuses);
    }
}
