<?php

namespace CeresAgri\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresAgriItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresAgri::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}