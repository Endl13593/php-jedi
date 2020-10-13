<?php

final class StaticFactory
{
    public static function make($type)
    {
        if ($type == 'number') {
            return new FormatNumber();
        }
        if ($type == 'string') {
            return new FormatString();
        }

        return 'Type Error';
    }
}
interface FormatterInterface
{
    public function format($n);
}
class FormatNumber implements FormatterInterface
{
    public function format($n)
    {
        echo "Formatando numero: {$n}";
    }
}
class FormatString implements FormatterInterface
{
    public function format($n)
    {
        echo "Formatando string: {$n}";
    }
}

$formatter = StaticFactory::make('number');
$formatter->format('Testando 1,2,3...');