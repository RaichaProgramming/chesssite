<?php
    interface LoginAPI
    {
        public function login($username,$password);
        public function register($username,$password,$email);
        public function changePassword($username,$oldpassword,$newpassword);
        public function checkAuthBySessionID($sessionID);
    }
?>