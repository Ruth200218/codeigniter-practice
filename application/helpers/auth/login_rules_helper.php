<?php
function getLoginRules()
{
    return array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[8]|trim',
            'errors' => array(
                'required' => 'You must provide a %s.',
            ),
        ),
    );
}
