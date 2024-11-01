<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsApiResource;
use App\Models\News;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    /**
     * List News
     */
    public function index(): JsonResponse
    {
        $perPage = request('perPage') ?: 4;

        return response()->json(
            NewsApiResource::collection(
                News::query()->latest()->paginate($perPage)
            )
        );
    }

    /**
     * Show news
     */
    public function show(News $news): JsonResponse
    {
        return response()->json(new NewsApiResource($news));
    }
}
