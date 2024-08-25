<?php

namespace App\Http\Controllers;

use App\Services\SeoPageService;

class HomeController extends Controller
{
    public function index(SeoPageService $seoPageService)
    {
        $seo = $seoPageService->home();

        return view('welcome', [
            'seo' => $seo
        ]);
    }
}
