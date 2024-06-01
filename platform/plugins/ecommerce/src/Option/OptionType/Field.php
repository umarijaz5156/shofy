<?php

namespace Botble\Ecommerce\Option\OptionType;

use Botble\Ecommerce\Option\Interfaces\OptionTypeInterface;

class Field extends BaseOptionType implements OptionTypeInterface
{
    public function view(): string
    {
        return 'field';
    }
}
