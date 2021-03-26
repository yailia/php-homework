<?php

$menuArr = $footerArr = [
    [
        'title' => 'Главная',
        'path' => '/task.manager',
        'sort' => '10'
    ],
    [
        'title' => 'О Нас',
        'path' => '/task.manager/route/about',
        'sort' => '20'
    ],
    [
        'title' => 'Новости',
        'path' => '/task.manager/route/news',
        'sort' => '40'
    ],
    [
        'title' => 'Контакты',
        'path' => '/task.manager/route/contacts',
        'sort' => '30'
    ],
    [
        'title' => 'Войти',
        'path' => '/task.manager/?login=yes',
        'sort' => '60'
    ],
    [
        'title' => 'Каталог',
        'path' => '/task.manager/route/catalogue',
        'sort' => '50'
    ],
];

/**
 * Сортирует многомерный ассоциативный массив по ключу
 * @param array многомерный ассоциативный массив
 * @param string ключ sort, title, по умолчанию sort
 * @param string флаг сортировки по умолчанию по возрастанию
 * @return array отсортированный массив
 */

function arraySort(array $array, $key = 'sort', $sort = SORT_ASC): array
{
    foreach ($array as $k => $v) {
        $arrSort[$k] = $v[$key];
    }
    array_multisort($arrSort, $sort, $array);
    return $array;
}

$headerMenuArr = arraySort($menuArr, 'sort');
$footerMenuArr = arraySort($footerArr, 'title', SORT_DESC);


/**
 * Выводит меню по параметру сортировки
 * @param array массив пунктов
 */

function showMenu (array $arr = [])
{
    foreach($arr as $item) {
        ?><li><a href="<?= $item['path'] ?>"><?= $item['title']?></a></li><?php
    };
};
