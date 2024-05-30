<?php

function language_list(...$langs):array
{
    return $langs;
}

function add_to_language_list($lang_list,$lang):array{
    $lang_list[]=$lang;
    return $lang_list;
}

function prune_language_list($language_list):array{
    array_shift($language_list);
    return $language_list;
}

function current_language($language_list):string{
    return $language_list[0];
}


function language_list_length($lang_list):int{
    return count($lang_list);
}