<?php

if (!function_exists('linkAds')) {
    function linkAds(stdClass $cat, stdClass $ads): string
    {
        return asset($cat->category_board_alias . '/' . $ads->ads_alias . '-' . $ads->ads_id);
    }
}

if (!function_exists('adsImages')) {
    function adsImages(stdClass $ads)
    {
        if (is_string($ads->ads_images) && json_validate($ads->ads_images)) {
            return json_decode($ads->ads_images, true);
        }

        if (is_array($ads->ads_images)) {
            return $ads->ads_images;
        }

        return [];
    }
}

if (!function_exists('prepareAds')) {
    function prepareAds(stdClass &$ads): void
    {
        $ads->small_images = [];
        $ads->big_images = [];

        $ads->ads_images = adsImages($ads);

        foreach ($ads->ads_images as $image) {
            $ads->small_images[] = "https://rizz.cards/media/images_boards/small/" . $image;
            $ads->big_images[] = "https://rizz.cards/media/images_boards/big/" . $image;
        }

        if ($ads->ads_price_from) {
            $ads->price_format = 'от ' . moneyFormat($ads->ads_price, 2);
        } else {
            $ads->price_format = moneyFormat($ads->ads_price, 2);
        }

        $ads->date_format = date('d.m.Y', strtotime($ads->ads_datetime_add));
    }
}

if (!function_exists('moneyFormat')) {
    function moneyFormat($value, $decimals = 0): string
    {
        return number_format((float)$value, $decimals, ',', ' ');
    }
}
