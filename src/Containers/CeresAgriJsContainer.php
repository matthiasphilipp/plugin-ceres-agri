<?php

namespace CeresAgri\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresAgriJsContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresAgri::Jsfiles');
    }
}