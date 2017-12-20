<?php

namespace CommandBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CommandBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSOAuthServerBundle';
    }
}
