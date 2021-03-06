<?php

namespace NewsSite\Controllers;

interface ControllerInterface
{
    public function render(string $template, array $content = []): string;
}