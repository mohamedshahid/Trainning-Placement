<?php
$config = array(
    'login_rules'=> array(
        array(
            'field' => 'username',
            'label' => 'User Name',
            'rules' => 'required|alpha'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|alpha'
        )
    )
);
?>