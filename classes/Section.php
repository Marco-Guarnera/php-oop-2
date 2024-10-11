<?php

// Class
class Section {
    public string $icon_src;
    public string $title;

    public function __construct(string $icon_src, string $title) {
        $this->icon_src = $icon_src;
        $this->title = $title;
    }
}

?>