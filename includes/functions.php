<?php
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


/**
 * возвращает название активного класса, если url совпадает
 * @param string проверяемый url
 * @return string
 */
function isCurrentUrl ($uri) {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $uri ? true : false;
}

/**
 * если длина строки больше 12 символов, то возвращает сокращенную строку с ...
 * @param string проверяемая строка
 * @param int максимальное количество символов
 * @param string суффикс
 * @return string обрезанная строка
 */
function cutString($line, $length = 12, $appends = '...'): string
{
    return mb_strimwidth($line, 0, $length, $appends, 'utf-8');
}


/**
 * Выводит меню по параметру сортировки
 * @param array массив пунктов
 */

function showMenu (array $arr = [], $template = 'header')
{
    $menuClass = ($template === 'header') ? 'main-menu' : 'main-menu bottom';
    if ($template === 'header') {
        $arr = arraySort($arr);
    } else {
        $arr = arraySort($arr, 'title', SORT_DESC);
    }

    include $_SERVER['DOCUMENT_ROOT'] . './templates/menu.php';

};

function getHeader ($menuArr) {
    $caption = array_search(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), array_column($menuArr, 'path'));
    return $menuArr[$caption]['title'];
}