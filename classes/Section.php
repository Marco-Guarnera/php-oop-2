<?php

// Class
class Section {
    public string $icon;
    public string $title;

    public function __construct(string $icon, string $title) {
        $this->icon = $icon;
        $this->title = $title;
    }
}

?>