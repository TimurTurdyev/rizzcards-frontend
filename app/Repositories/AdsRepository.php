<?php

namespace App\Repositories;

use Illuminate\Database\Query\Builder;

class AdsRepository
{
    public function queryFilters($filter): \Illuminate\Database\Query\Builder
    {
        return \DB::query()
            ->select(['uni_ads.*'])
            ->from('uni_ads')
            ->join('uni_clients', 'uni_clients.clients_id', '=', 'uni_ads.ads_id_user')
            ->where('ads_status', '=', '1')
            ->whereIn('clients_status', [0, 1])
            ->when($filter['categories'] ?? [], static function (Builder $builder, array $filter) {
                $builder->whereIn('ads_id_cat', $filter);
            })
            ->when($filter['sort'] ?? 'default', static function (Builder $builder, string $sortWithOrder) {
                [$sort, $order] = [...array_map(static fn(string $value) => mb_strtolower(trim($value)), explode('.', $sortWithOrder)), 'desc'];

                if (!in_array(mb_strtolower($order), ['asc', 'desc'])) {
                    $order = 'desc';
                }

                if ($sort == 'news') {
                    $builder->orderBy('ads_id', $order);
                } elseif ($sort == 'price') {
                    $builder->orderBy('ads_price', $order);
                } else {
                    $builder->orderBy('ads_sorting', 'desc');
                    $builder->orderBy('ads_id', 'desc');
                }
            });
    }
}
