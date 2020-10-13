<?php

class Character
{
    private $properties;

    /**
     * @param $pname
     * @param $pvalue
     */
    public function setProperties($pname, $pvalue)
    {
        $this->properties[$pname] = $pvalue;
    }

    /**
     * @return mixed
     */
    public function getAllProperties()
    {
        return $this->properties;
    }
}
interface BuilderInterface
{
    public function createCharacter();
    public function addHelmet();
    public function addWeapon();
    public function addBoots();
    public function getCharacter();
}
class MarioBuilder implements BuilderInterface
{
    private $character;

    public function createCharacter()
    {
        $this->character = new Character();
    }

    public function addHelmet()
    {
        $this->character->setProperties("helmet", "red");
    }

    public function addWeapon()
    {
        $this->character->setProperties("lefthand", "cloves");
        $this->character->setProperties("righthand", "cloves");
    }

    public function addBoots()
    {
        $this->character->setProperties("leftboot", "black boot");
        $this->character->setProperties("rightboot", "black boot");
    }

    public function getCharacter()
    {
        return $this->character;
    }
}
class LuigiBuilder implements BuilderInterface
{
    private $character;

    public function createCharacter()
    {
        $this->character = new Character();
    }

    public function addHelmet()
    {
        $this->character->setProperties("helmet", "green");
    }

    public function addWeapon()
    {
        $this->character->setProperties("lefthand", "cloves");
        $this->character->setProperties("righthand", "cloves");
    }

    public function addBoots()
    {
        $this->character->setProperties("leftboot", "white boot");
        $this->character->setProperties("rightboot", "white boot");
    }

    public function getCharacter()
    {
        return $this->character;
    }
}
class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->createCharacter();
        $builder->addHelmet();
        $builder->addWeapon();
        $builder->addBoots();
        return $builder->getCharacter();
    }
}

$mario = (new Director())->build(new MarioBuilder());
$luigi = (new Director())->build(new LuigiBuilder());

print_r($mario->getAllProperties());
echo "<br />";
print_r($luigi->getAllProperties());