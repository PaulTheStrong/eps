<?php 

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
	public $displayname;
	public $username;
	public $email;
	public $password;

	public function rules()
	{
		return [
			[['displayname', 'username', 'email', 'password'], 'required'],
			['password', 'checkPassword']

		];
	}

	public function spec()
	{
		$spec_chars = " !\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		$cnt = 0;
		for($i = 0; $i < len($this->password); $i++)
		{
			for($j = 0; $j < len($this->spec_chars); $j++)
			{
				if ($this->password[$i] == $spec_chars[$j])
				{
					$cnt++;
					break;
				}
			}
			if($cnt == 2){
				return 1;
			}
		}
		return 0;
	}

	public function checkPassword($attribute, $params)
    {
        $this->addError($attribute, "sadfoaisdhgfniagrbvuafhn");
    }
    public function signup()
    {
    	if($this->validate())
    	{
    		
    	}
    }



	


}

 ?>