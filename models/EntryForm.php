<?php
/**
 * Created by PhpStorm.
 * User: yuichiro
 * Date: 2016/04/15
 * Time: 18:12
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}