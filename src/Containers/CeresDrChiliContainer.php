<?php

namespace CeresDrChili\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresDrChiliContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresDrChili::Stylesheet');
    }
}
