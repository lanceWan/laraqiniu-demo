<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],
        'qiniu' => [
            'driver'  => 'qiniu',
            'domains' => [
                //上面图片中的默认七牛域名
                'default'   => '7xsgy7.com1.z0.glb.clouddn.com',
                'https'     => '',          //没有https不用写
                'custom'    => '',          //没有自定义域名可以不用写
             ],
            'access_key'=> 'le5qZii2o6iez9brj-_KoFUuN0UKir15QS28NzBJ',  //密钥中的AK
            'secret_key'=> 'zKrTVwyLbsNfHuClvn8hk33UT-HZVEzHiQTFn_Eu',  //密钥中的SK
            'bucket'    => 'iwanli',  //Bucket名字是你创建存储对象的名称
            'notify_url'=> '',  //持久化处理回调地址如果你不需要的话可以不用写
        ],

    ],

];
