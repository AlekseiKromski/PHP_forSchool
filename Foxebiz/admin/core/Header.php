<?php


class Header
{

    protected $rule;
    protected $login;

    public function __construct($connect,$id)
    {
        $query_user_info = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
        $user_info = mysqli_fetch_assoc($query_user_info);
        $login = $user_info['login'];
        $rule = $user_info['rule'];
        $this->login = $login;
        $this->rule = $rule;
    }

    public function getRule()
    {
        echo $this->rule;
    }
    public function getLogin()
    {
        echo $this->login;
    }
}