<?php

namespace CeresDrChili\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresDrChiliItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresDrChili::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
