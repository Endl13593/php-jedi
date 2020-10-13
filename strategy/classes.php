<?php

interface OutputInterface
{
    public function load($data);
}

class JsonOutput implements OutputInterface
{
    public function load($data)
    {
        return json_encode($data);
    }
}

class ArrayOutput implements OutputInterface
{
    public function load($data)
    {
        return $data;
    }
}

class Produtos
{
    private $array;
    private $output;

    public function getLista()
    {
        // Requisição SQL ...
        $this->array = [
            ['id' => 1, 'nome' => 'Eduardo Nunes'],
            ['id' => 2, 'nome' => 'Fulano de Tal']
        ];
    }

    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function getOutput()
    {
        return $this->output->load($this->array);
    }
}