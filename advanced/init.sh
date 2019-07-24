#!/usr/bin/env bash
if ! [ -x "$(command -v php)" ]; then
  echo 'Error: php is not installed.' >&2
  exit 1
fi

if ! [ -x "$(command -v mysql)" ]; then
  echo 'Error: mysql is not installed.' >&2
  exit 1
fi

#本来想加个密码转化为星号的但总是报错TwT
#给变量二次赋值的时候不用写$
user=root
read -p "Please input your MySQL user name:" name
if [ ! -n "$name" ] ;then
  echo "Using the default user:root!"
else
  user=$name
  echo "Using the user $name"
fi

password="12345678"
read -p "Please input your MySQL password:" psd
if [ ! -n "$psd" ] ;then
  echo "Using the empty password."
else
  password=$psd
fi

echo Initiating database: NKL
cat ./data/install.sql| mysql -u ${user} -p"${password}"

echo PHP INIT
php init

echo PROJECT CONFIGING

(
cat << EOF
<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=NKL',
            'username' => '${user}',
            'password' => '${password}',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
EOF
) > ./common/config/main-local.php

if ! [ -x "$(command -v composer)" ]; then
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
fi
# composer 全局安装

echo COMPOSER UPDATE
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer install -vvv
composer update -vvv