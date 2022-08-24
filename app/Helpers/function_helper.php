<?php

function unique_slug($title, $table = "blogs", $field = "slug")
{
    $db = \Config\Database::connect();

    $slug = url_title($title, "-", true);

    $builder = $db->table($table);
    $url_slug = $builder->like('slug', $slug)->get()->getResultArray();
    
    $i = 0;
    for ($i; $i <= count($url_slug); $i++) {
        if (!preg_match('/-{0}[0-9]+$/', $slug)){
            $slug .= ($i != 0) ? '-' . $i : "";
        }else{
            $slug = preg_replace('/[0-9]+$/', $i, $slug);
        }
    }
    return $slug;
}
