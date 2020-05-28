<?php
function renderTemplate(string $tplName, array $args = []): void
{
   include __DIR__ . '../src/templates/' . $tplName;
}
