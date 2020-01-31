<?php
require 'vendor/autoload.php';
use Michelf\Markdown;

echo Markdown::defaultTransform('Salut les gens voila le **Markdown**');
echo Markdown::defaultTransform('Test **Markdown** ici et _là_');
echo Markdown::defaultTransform("Test d'un lien [Google](www.google.com)");
