<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Services\SeoPageService;

class CatalogController extends Controller
{
    public function index($categoryAliases, CategoryRepository $categoryRepository, SeoPageService $seoPageService)
    {
        $data = $categoryRepository->getCategoriesFromAliases(explode('/', $categoryAliases));

        abort_if($data === null, 404, 'Категория не найдена');

        $data['seo'] = $seoPageService->catalog($data['current']);

        return view('catalog.index', $data);
    }
}
