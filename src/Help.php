<?php

namespace Marshmallow\Cards\Help;

use Laravel\Nova\Card;
use Marshmallow\Cards\Help\HelpItem;

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

    public function load($callable)
    {
        return $callable($this);
    }

    public function title(string $title)
    {
        return $this->withMeta([
            'title' => $title,
        ]);
    }

    public function description(string $description)
    {
        return $this->withMeta([
            'description' => $description,
        ]);
    }

    public function addItem(HelpItem $item)
    {
        $items = (array_key_exists('items', $this->meta())) ? $this->meta()['items'] : [];
        $items[] = $item->toArray();
        return $this->withMeta([
            'items' => collect($items)->chunk(2)->toArray(),
        ]);
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
