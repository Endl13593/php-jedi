<?php

abstract class Video
{
    abstract public function render();
}

abstract class AbstractFactory
{
    abstract public function createPlayer($url);
}

class HtmlFactory extends AbstractFactory
{
    public function createPlayer($url)
    {
        return new HtmlPlayer($url);
    }
}

class HtmlPlayer extends Video
{
    private $url;

    /**
     * HtmlPlayer constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    public function render()
    {
        echo "<video>{$this->url}</video>";
    }
}

class FlashFactory extends AbstractFactory
{
    public function createPlayer($url)
    {
        return new FlashPlayer($url);
    }
}

class FlashPlayer extends Video
{
    private $url;

    /**
     * FlashPlayer constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    public function render()
    {
        echo "<object>{$this->url}</object>";
    }
}

//$fac = new HtmlFactory();
$fac = new FlashFactory();

$player = $fac->createPlayer('1234');
$player->render();