<?php
    require_once 'ini.php';

    $smarty->caching = false;
    // 链接本机memcached服务器
    $mem -> connect('localhost','11211');
    if (!$mem->get('kaosheng')){
        $data = $db->fetchAll('exam_kaosheng',['limit'=>'0,20']);
        // MEMCACHE_COMPRESSED zlib压缩,当数据很小时不会采用zlib压缩   缓存数据时间,0永不过期,当秒数大于30天 需用时间戳
        $mem->add('kaosheng',$data,MEMCACHE_COMPRESSED,10);
        echo '从数据库获取数据';
    }else{
        $data = $mem->get('kaosheng');
    }

    $smarty->assign('kaosheng',$data);
    $smarty->display('kaosheng.html');

    $mem->close();