<?php
    require_once 'ini.php';

    $smarty->caching = false;
    $mem -> connect('localhost','11211');
    if (!$mem->get('kaosheng')){
        $data = $db->fetchAll('exam_kaosheng',['limit'=>'0,20']);
        $mem->add('kaosheng',$data,MEMCACHE_COMPRESSED);
        echo '从数据库获取数据';
    }else{
        $data = $mem->get('kaosheng');
    }

    $smarty->assign('kaosheng',$data);
    $smarty->display('kaosheng.html');

