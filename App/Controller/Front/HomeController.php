<?php

namespace App\Controller\Front;

//use App\Form\FormUser;
//use App\Repository\ISportRepository;
//use App\Repository\SportRepository;
//use App\Service\View;

use App\Service\View;

class HomeController
{
    use View;

    private CitationsRepository $citationRepository;

    public function __construct()
    {
        $this->citationsRepository = new CitationsRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'home.php',
            [
                'formCitation' => FormCitation::buildCitation(),
                'citations' => $this->citationRepository->fetchAll(),
            ]);
    }
}
