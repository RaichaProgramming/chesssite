<?php
    include "api\login_descriptor.php";

    class LoginImplementation extends LoginAPI
    {
        public function login($username,$password)
        {
            return 'Hello from login';
        }
        public function register($username,$password,$email)
        {
            return 'Hello from register';
        }
        public function changePassword($username,$oldpassword,$newpassword)
        {
            return 'Hello from changepw';
        }
        public function checkAuthBySessionID($_SESSION)
        {
            return 'Hello from checkauth';
        }
    }
?>