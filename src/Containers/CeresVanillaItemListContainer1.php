<?php

namespace CeresAgri\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresAgriItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresAgri::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}