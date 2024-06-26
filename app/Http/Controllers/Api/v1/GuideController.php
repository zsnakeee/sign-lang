<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Models\Guide;

class GuideController extends BaseController
{
    public function getGuidesByCategory($category)
    {
        if ($category == 'Top 30 Signs') {
            $guides = Guide::orderBy('created_at', 'desc')->take(30)->get();
        } else {
            $guides = Guide::where('category', $category)->get();
        }

        return response()->json($guides);
    }

    public function getAllCategoryCounts()
    {
        $categories = Guide::select('category')->distinct()->get();
        $categoryCounts = [];

        foreach ($categories as $category) {
            $count = Guide::where('category', $category->category)->count();
            $categoryCounts[] = [
                'category' => $category->category,
                'count' => $count,
            ];
        }

        $Top30Count = Guide::count();
        if($Top30Count > 30)
        {
            $Top30Count = 30;
        }
        $categoryCounts[] = [
            'category' => 'Top 30 Signs',
            'count' => $Top30Count,
        ];

        return response()->json($categoryCounts);
    }
}
