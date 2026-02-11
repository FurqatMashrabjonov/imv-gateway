<?php

use Imv\Gateway\Gateway;

test('constructor', function () {
    Cache::clear();

    $app = app(Gateway::class);

    expect($app)->toBeInstanceOf(Gateway::class);
});

test('get organ info', function () {
   $app = app(Gateway::class);

   $res = $app->getOrganInfo(201122919);

   dd($res->json());

});
