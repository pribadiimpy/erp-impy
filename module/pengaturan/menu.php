<?php

function getModule($dir, $selected) {
    $files=scandir($dir);
    foreach($files as $key=>$value){
        $path=realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)){
			$tmp_path = str_replace(FOLDER_MODULE.DIRECTORY_SEPARATOR,'',$path);
            $tmp_path = str_replace(DIRECTORY_SEPARATOR,'/',$tmp_path);
            if ($tmp_path == $selected) {
                $is_selected = 'selected';
            } else {
                $is_selected = '';
            }
			echo "<option value=\"{$tmp_path}\" {$is_selected}>{$tmp_path}</option>\r\n";
        } else if($value!='.' && $value!='..'){
            getModule($path,$selected);
        }
    }
}

if ($controller=='form') {
	if ($action=='tambah') {
		$id=0;
	} else {
		$id=isset($_POST['id']) ? $_POST['id'] : '';
	}
	if ($id > 0 && in_array($action, array('salin', 'ubah', 'hapus'))) {
		include('menu-form.php');
	} else if (in_array($action, array('tambah'))) {
		include('menu-form.php');
	} else {
		header('location: '.index($mid));
	}
} else if ($controller == 'aksi') {
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$menu_id = isset($_POST['menu_id']) ? $_POST['menu_id'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$module = isset($_POST['module']) ? $_POST['module'] : '';
	$posisi_menu = isset($_POST['posisi_menu']) ? $_POST['posisi_menu'] : '';
	$urutan = isset($_POST['urutan']) ? $_POST['urutan'] : '';
	$aktif = isset($_POST['aktif']) ? $_POST['aktif'] : '';
	include('menu-aksi.php');
} else {
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	include('menu-form-cari.php');
	include('menu-data.php');
}
