<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

class Login extends ActiveRecord
{
    public $rememberMe = true;
    public $repass;
    public static function tableName()
    {
        return "{{%nkl_user_login}}";
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户账号',

            'password' => '用户密码',

        ];
    }

    public function rules()
    {
        return [
            ['username', 'required', 'message' => '用户账号不能为空', 'on' => ['login']],
            ['password', 'required', 'message' => '用户密码不能为空', 'on' => ['login']],
            ['rememberMe', 'boolean', 'on' => 'login'],
            ['password', 'validatePass', 'on' => ['login']],

        ];
    }

    public function validatePass()
    {
        if (!$this->hasErrors()) {
            $data = self::find()->where('username = :user and password = :pass', [":user" => $this->username, ":pass" => md5($this->password)])->one();
            if (is_null($data)) {
                $this->addError("password", "用户名或者密码错误");
            }
        }
    }



    public function login($data)
    {
        $this->scenario = "login";
        if ($this->load($data) && $this->validate()) {
            //做点有意义的事

            $lifetime = $this->rememberMe ? 24*3600 : 0;

            $session = Yii::$app->session;

            $session['user'] = [
                'username' => $this->username,
                'isLogin' => 1,
            ];
            $this->updateAll(['logintime' => time(), 'loginip' => ip2long(Yii::$app->request->userIP)], 'username = :user', [':user' => $this->username]);
            return (bool)$session['user']['isLogin'];


        }
        return false;
    }



    public function createToken($username, $time)
    {
        return md5(md5($username).base64_encode(Yii::$app->request->userIP).md5($time));
    }



    public function reg($data)
    {
        $this->scenario = 'adminadd';
        if ($this->load($data) && $this->validate()) {
            $this->password = md5($this->password);
            if ($this->save(false)) {
                return true;
            }
            return false;
        }
        return false;
    }





}
