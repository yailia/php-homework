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

$headerMenuArr = arraySort($menuArr, 'sort');
$footerMenuArr = arraySort($menuArr, 'title', SORT_DESC);

/**
 * возвращает название активного класса, если url совпадает
 * @param string проверяемый url
 * @return string
 */
function isMenuActive ($uri) {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) === $uri ? 'menu-active' : '';
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

function showMenu (array $arr = [])
{
    foreach($arr as $item) {
        ?>
        <li>
            <a 
            class = "<?=isMenuActive($item['path']) ?>"
            href="<?= $item['path'] ?>">
            <?= cutstring($item['title']) ?></a>
        </li>
        <?php
    };
};