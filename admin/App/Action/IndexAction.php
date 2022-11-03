<?php


use Oneinit\Verify;

class  IndexAction extends Action
{
    public function index()
    {
    	$email = 'w2011344@qq.com';
	    var_dump((new Verify())->isValidEmail($email));
	    echo '<br/>';
	    $email2 = 'w2011344qq.com';
	    var_dump((new Verify())->isValidEmail($email2));
    }
}
