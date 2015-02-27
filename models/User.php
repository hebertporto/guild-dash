<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'mamuti',
            'password' => '00556633',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'heavymetal',
            'password' => 'sirviado',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
        '102' => [
            'id' => '102',
            'username' => 'ecko',
            'password' => '1245789',
            'authKey' => 'test102key',
            'accessToken' => '102-token',
        ],
        '103' => [
            'id' => '103',
            'username' => 'coradini',
            'password' => '98653245',
            'authKey' => 'test103key',
            'accessToken' => '103-token',
        ],
        '104' => [
            'id' => '104',
            'username' => 'sirstenzyl',
            'password' => 'demo',
            'authKey' => 'test104key',
            'accessToken' => '104-token',
        ],
        '105' => [
            'id' => '105',
            'username' => 'adam',
            'password' => '98005533',
            'authKey' => 'test105key',
            'accessToken' => '105-token',
        ],
        '106' => [
            'id' => '106',
            'username' => 'krinnus',
            'password' => '66558877',
            'authKey' => 'test106key',
            'accessToken' => '106-token',
        ],
        '107' => [
            'id' => '107',
            'username' => 'strider',
            'password' => '0033123',
            'authKey' => 'test107key',
            'accessToken' => '107-token',
        ],
        '108' => [
            'id' => '108',
            'username' => 'meianoite',
            'password' => '9865472',
            'authKey' => 'test108key',
            'accessToken' => '108-token',
        ],
        '109' => [
            'id' => '109',
            'username' => 'bloodsteell',
            'password' => '898989',
            'authKey' => 'test109key',
            'accessToken' => '106-token',
        ],
        '110' => [
            'id' => '110',
            'username' => 'jontex',
            'password' => '55660099',
            'authKey' => 'test110key',
            'accessToken' => '110-token',
        ],
        '111' => [
            'id' => '111',
            'username' => 'ark',
            'password' => '99550033',
            'authKey' => 'test111key',
            'accessToken' => '111-token',
        ],
        '112' => [
            'id' => '112',
            'username' => 'dean',
            'password' => '63550022',
            'authKey' => 'test112key',
            'accessToken' => '112-token',
        ],
        '113' => [
            'id' => '113',
            'username' => 'matado',
            'password' => '00445533',
            'authKey' => 'test113key',
            'accessToken' => '113-token',
        ],
        '114' => [
            'id' => '114',
            'username' => 'knoxx',
            'password' => '7895544',
            'authKey' => 'test114key',
            'accessToken' => '114-token',
        ],
        '115' => [
            'id' => '115',
            'username' => 'seumadruga',
            'password' => '963963123',
            'authKey' => 'test115key',
            'accessToken' => '115-token',
        ],
        '116' => [
            'id' => '116',
            'username' => 'ned',
            'password' => '789630011',
            'authKey' => 'test116key',
            'accessToken' => '116-token',
        ],

    ];

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
