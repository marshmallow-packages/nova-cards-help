<?php

namespace Marshmallow\Cards\Help;


class HelpItem
{
    protected $icon;
    protected $link;
    protected $title;
    protected $link_target;
    protected $description;

    public function title(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function description(string $description)
    {
        $this->description = $description;
        return $this;
    }

    public function icon(string $icon)
    {
        $this->icon = $icon;
        return $this;
    }

    public function link(string $path, bool $blank = false)
    {
        $this->link = $path;
        $this->link_target = ($blank) ? '_blank' : '_self';
        return $this;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'icon' => $this->icon,
            'link' => $this->link,
            'link_target' => $this->link_target,
        ];
    }
}
