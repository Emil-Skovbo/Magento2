<?php
    interface CategoryUrlRepositoryInterface
{
    public function setVariable($name, $var);
    public function getHtml($template);
}