<?php 
    interface ICitationRepository
    {
        public function add(Citation $citation);

        public function fetchAll();
    }
?>