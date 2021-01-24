<?php

function index($mid) {
    return "index.php?mid={$mid}";
}

function menuInduk($db,$mid,&$results=array()) {
    $sql=
    "
    SELECT
    id,
    menu_id,
    nama,
    posisi_menu
    FROM
    menu
    WHERE
    id='{$mid}'
    AND menu_id>'0'
    AND aktif='Y'
    ";
    $rs=$db->query($sql);
    if ($rs->num_rows>0) {
        $row=$rs->fetch_object();
        menuInduk($db,$row->menu_id,$results);
        $results[]=array(
            'menu_id'=>$row->menu_id,
            'posisi_menu'=>$row->posisi_menu
        );
    }
    if (count($results) > 0) {
        return $results;
    } else {
        return $mid;
    }
}

function tampilkanMenu($db,$mid,$posisi_menu) {
    if ($mid>0) {
        $where=" AND menu_id>'0' ";
    } else {
        $where="";
    }
    $sql=
    "
    SELECT
    id,
    nama
    FROM
    menu
    WHERE
    menu_id='{$mid}'
    AND posisi_menu='{$posisi_menu}'
    AND aktif='Y'
    {$where}
    ";
    $rs=$db->query($sql);
    if ($rs->num_rows==0) {
        $menu_id=menuInduk($db,$mid);
        if (is_array($menu_id)) {
            foreach ($menu_id as $key => $value) {
                if ($value['posisi_menu']==$posisi_menu) {
                    $sql=
                    "
                    SELECT
                    id,
                    nama
                    FROM
                    menu
                    WHERE
                    menu_id='$value[menu_id]'
                    AND posisi_menu='$value[posisi_menu]'
                    AND aktif='Y'
                    {$where}
                    ";
                    $rs=$db->query($sql);
                }
            }
        }
    }
    return $rs;
}
