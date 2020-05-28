<?php
function renderTemplate(string $tplName, array $args = []): void
{
   include '../src/templates/' . $tplName;
}
