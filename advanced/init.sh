#!/usr/bin/env php
if ! [ -x "$(command -v php)" ]; then
  echo 'Error: php is not installed.' >&2
  exit 1
fi
if ! [ -x "$(command -v mysql)" ]; then
  echo 'Error: mysql is not installed.' >&2
  exit 1
fi
user=root
getchar() {
 
  stty cbreak -echo
 
  dd if=/dev/tty bs=1 count=1 2> /dev/null
 
  stty -cbreak echo
 
}
 
 
printf “Please input your passwd: ”
while : ; do
 
  ret=`getchar`
 
  if [ x$ret = x ]; then
 
    echo
 
    break
 
  fi
 
  str=”$str$ret”
 
  printf “*”
 
done
echo “Your password is: $str”
password=$str

if [ -n "$1" ]; then
    user=$1
    echo Using mysql user: ${user}
else
    echo Using default mysql user: ${user}
fi
echo Initiating database: NKL
cat ./db/create.sql| mysql -u ${user} -p"${password}"
echo PHP INIT
php init
echo PROJECT CONFIGINGs
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
echo COMPOSER UPDATE
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer install -vvv
composer update -vvv

