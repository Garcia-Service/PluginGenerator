<?php

namespace repliedk\plugingenerator;

class PluginGenerator {

    public function __construct(
        public string $name,
        public string $author,
        public string $api
    ){}

    public function generate(): void {
        echo "Hello world!";
    }
    
}