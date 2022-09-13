<?php

use App\Repository;

interface ICitationRepository
    {
        public function add(Citation $citation);

        public function fetchAll();
    }
?>