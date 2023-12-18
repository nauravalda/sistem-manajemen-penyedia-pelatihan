<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['name', 'email', 'phone', 'password', 'api_token'];

    public function checkUser($email, $password)
    {
        $user = $this->where(['email' => $email, 'password' => $password])->first();
        if ($user) {
            return true;
        } else {
            return false;
        }
    }

    public function getDataUser()
    {
        return $this->findAll();
    }

    public function getUser($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getUserByEmail($email)
    {
        return $this->where(['email' => $email])->first();
    }

    public function getUserByEmailAndPassword($email, $password)
    {
        return $this->where(['email' => $email, 'password' => $password])->first();
    }

    public function getUserByToken($token)
    {
        if ($token == null || $token == '') {
            return false;
        }
        return $this->where(['api_token' => $token])->first();
    }
}