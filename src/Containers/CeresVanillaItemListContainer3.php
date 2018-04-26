<?php

namespace CeresDrChili\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresVanillaItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresDrChili::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
