<?php

namespace CeresAgri\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresAgriContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresAgri::Stylesheet');
    }
}