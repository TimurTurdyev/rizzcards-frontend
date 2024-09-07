<?php

namespace App\Http\Controllers;

use App\Repositories\AdsRepository;
use App\Repositories\CategoryRepository;
use App\Services\SeoPageService;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(
        string $categoryAliases,
        Request $request,
        CategoryRepository $categoryRepository,
        SeoPageService $seoPageService,
        AdsRepository $adsRepository
    )
    {
        $data = $categoryRepository->getCategoriesFromAliases(explode('/', $categoryAliases));

        abort_if($data === null, 404, 'Категория не найдена');

        $data['seo'] = $seoPageService->catalog($data['current']);
        $filter = $request->query('filter', []);
        $filter['categories'] = [$data['current']->category_board_id];

        $data['ads'] = $adsRepository->queryFilters($filter)->paginate(20);

        foreach ($data['ads'] as $item) {
            prepareAds($item);
        }

        return view('catalog.index', $data);
    }
}
