<?php
    interface ApiFunctions
    {
        public function getGamesByUser($username);
        public function submitMove($_SESSION,$move);
    }
?>