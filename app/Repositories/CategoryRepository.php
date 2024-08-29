<?php

namespace App\Repositories;

class CategoryRepository
{
    private static array $categories = [];

    public function mainCategoriesText(): string
    {
        $text = [];

        $getCategories = $this->categories();

        foreach ($getCategories[0] as $value) {
            $text[] = $value->category_board_name;
        }

        return implode(',', $text);
    }

    public function categories(): array
    {
        if (self::$categories) {
            return self::$categories;
        }

        $categoryBuilder = \DB::query()
            ->from('uni_category_board')
            ->where('category_board_visible', 1)
            ->orderBy('category_board_id_parent', 'asc')
            ->orderBy('category_board_id_position', 'asc');

        foreach ($categoryBuilder->cursor() as $index => $item) {
            if (!isset(self::$categories[$item->category_board_id_parent])) {
                self::$categories[$item->category_board_id_parent] = [];
            }

            self::$categories[$item->category_board_id_parent][] = $item;
        }

        $this->categoriesAlias(self::$categories[0], 'catalog');

        return self::$categories;
    }

    public function getCategoriesFromAliases(array $categoriesAliases): ?array
    {
        $categoryPathAlias = "catalog/" . array_shift($categoriesAliases);

        $allCategories = $this->categories();

        foreach ($allCategories[0] as $key => $value) {
            if ($value->category_board_alias === $categoryPathAlias) {

                $findCategories = [
                    'breadcrumbs' => [
                        $categoryPathAlias => $value
                    ],
                    'current' => $value
                ];

                $categoryParentId = $value->category_board_id;

                foreach ($categoriesAliases as $alias) {
                    if (!isset($allCategories[$categoryParentId])) {
                        return null;
                    }

                    $children = $allCategories[$categoryParentId];
                    $categoryParentId = null;
                    $categoryPathAlias = $categoryPathAlias . '/' . $alias;

                    foreach ($children as $key => $value) {
                        if ($value->category_board_alias === $categoryPathAlias) {
                            $findCategories['breadcrumbs'][$categoryPathAlias] = $value;
                            $findCategories['current'] = $value;
                            $categoryParentId = $value->category_board_id;
                        }
                    }
                }

                return $findCategories;
            }
        }

        return null;
    }

    private function categoriesAlias(&$children, string $catAlias = ''): void
    {
        foreach ($children as $key => &$value) {
            $value->category_board_alias = sprintf('%s/%s', $catAlias, $value->category_board_alias);

            if (isset(self::$categories[$value->category_board_id])) {
                $this->categoriesAlias(self::$categories[$value->category_board_id], $value->category_board_alias);
            }
        }
    }
}
