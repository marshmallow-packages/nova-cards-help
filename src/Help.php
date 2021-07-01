<?php

namespace Marshmallow\Cards\Help;

use Laravel\Nova\Card;

class Help extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    public function fromConfig()
    {
        $config = config('nova-card-help');
        $config['items'] = collect($config['items'])->chunk(2)->toArray();
        return $this->withMeta($config);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'marshmallow-help';
    }
}
