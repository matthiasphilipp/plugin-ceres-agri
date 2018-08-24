<?php

namespace CeresAgri\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresAgriItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresAgri::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}