<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

/**
 * Хлебные крошки
 */

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('mainPage'));
});

// Home > Goods
Breadcrumbs::for('goods', function ($trail) {
    $trail->parent('home');
    $trail->push('Каталог', route('goods'));
});
