<?php

namespace CeresDrChili\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresDrChili::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
