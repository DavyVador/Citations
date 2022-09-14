<?php

namespace App\Controller\Front;

use App\Form\FormCitation;
use App\Repository\CitationRepository;
use App\Service\View;

class HomeController
{
    use View;

    private CitationRepository $citationsRepository;

    public function __construct()
    {
        $this->citationsRepository = new CitationRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'home.php',
            [
                'formCitation' => FormCitation::buildAddCitation(),
                'citations' => $this->citationsRepository->fetchAll(),
            ]);
    }

    public function addCitation()
    {
        var_dump($_POST);
    }
}
