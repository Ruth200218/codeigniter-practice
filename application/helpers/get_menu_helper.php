<?php
function main_menu()
{
    return array(
        array(
            'title' => 'Login',
            'url' => base_url('login'),
        ),
        array(
            'title' => 'Register',
            'url' => base_url('register'),
        ),
    );
}

function home_url()
{
    return array(
        array(
            'title' => 'Home',
            'url' => base_url(),
        ),
    );
}
