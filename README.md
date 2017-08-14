# 腾讯云消息服务CMQ

本项目是腾讯云官方SDK的整合[未官方授权，仅为个人使用]

[腾讯云官方SDK](`https://github.com/tencentyun/cmq-php-sdk`)

使用方法与官方SDK的Demo一样，仅仅是对资源进行了整合，以便于直接用 `Composer` 直接下载安装

## 查看队列列表

```
<?php

use Cmq\Data\Account;

class test
{
    public function test()
    {
        $host = '';
        $secret_id = '';
        $secret_key = '';
        $account = new Account($host, $secret_id, $secret_key);
        $result = $account->list_queue();
        echo json_encode($result);
    }
}

>
```