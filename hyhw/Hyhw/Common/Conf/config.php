<?php
return array(
	//'配置项'=>'配置值'
    'UPLOAD_SITEIMG_QINIU' => array ( 
                'maxSize' => 5 * 1024 * 1024,//文件大小
                'rootPath' => './',
                'saveName' => array ('uniqid', ''),
                'driver' => 'Qiniu',
                'driverConfig' => array (
                        'accessKey' => 'HQhfnxNebtXTH5l6rAIexV8o7yQyHMo35eRmwyGd',
                        'secretKey' => '6uTIcQ6lLvTpraM5p4ZwVbSVqXlZkS_CtCneiJax', 
                        'domain' => 'oms8e6h6f.bkt.clouddn.com',
                        'bucket' => 'hyimmi-com', 
            )
     )
    
);