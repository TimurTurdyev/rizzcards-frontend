<?php

namespace App\View\Components;

use App\Repositories\CategoryRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public function __construct(
        private CategoryRepository $categoryRepository
    )
    {
    }

    public function render(): View|Closure|string
    {
        $categories = $this->categoryRepository->categories();

        return view('components.layout', [
            'categories' => $categories
        ]);
    }
}
