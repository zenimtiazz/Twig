<?php

namespace App\Twig;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class quoteGenerator extends AbstractExtension
{

    public function getFunctions():array
    {
        return [
            new TwigFunction('quoteGenerator', [$this, 'quoteGenerator']),
        ];
    }

    public function quoteGenerator(): string
    {
        $quotes = [
        "“Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.”
― Albert Einstein",
        "“Darkness cannot drive out darkness,
    only light can do that. 
    Hate cannot drive out hate, 
    only love can do that.”
― Martin Luther King Jr., A Testament of Hope: The Essential Writings and Speeches ",
        "“Be the change that you wish to see in the world.”
― Mahatma Gandhi",
        "“If you want to know what a man's like, take a good look at how he treats his inferiors, not his equals.”
― J.K. Rowling, Harry Potter and the Goblet of Fire",
        "“Use lots of quotation signs, they make you look wiser.”
    - Koen Eelen"
    ];
        return $quotes[array_rand($quotes)];
    }

}
