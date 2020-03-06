<?php
// PHP - Random Quote Generator

//multi-dimensional array of quotes.
$quotes = [
    ['quote'        => 'Life has no limitations except the ones you make.',
        'source'    => 'Les Brown'],

    ['quote'        => 'Resentment is like drinking poison and then hoping it will kill your enemies.',
        'source'    => 'Nelson Mandela'],

    ['quote'        => 'My advice is, never do tomorrow what you can do today. Procrastination is the thief of time.',
        'source'    => 'Charles Dickens',
        'citation'  => 'David Copperfield' ],

    ['quote'        => 'It\'s the possibility of having a dream come true that makes life interesting.',
        'source'    => 'Paulo Coelho',
        'citation'  => 'The Alchemist',
        'year'      => '1988'],

    ['quote'        => 'Get busy living or get busy dying.',
        'source'    => 'Stephen King',
        'citation'  => 'The Shawshank Redemption',
        'year'      => '1982']
];

// function that get a random quotes element from the quotes array that has been passed in.
function getRandomQuote($array) {

    return $array[rand(0, count($array) - 1)];

}

//function prints the completed HTML string.
function printQuote($array) {

    //calling the getRandomQuote function.
    $quoteObjects = getRandomQuote($array);
    $quote        = '';

    //concatenating quote elements to empty string.
    $quote .= "<p class=\"quote\">" . $quoteObjects['quote'] . "</p>";
    $quote .= "<p class=\"source\">" . $quoteObjects['source'];

    //check to see if the citation is included.
    if (array_key_exists('citation', $quoteObjects)) {

        $quote .= "<span class=\"citation\">" . $quoteObjects['citation'] . "</span>";

    }

    //check to see of the year is included.
    if (array_key_exists('year', $quoteObjects)) {

        $quote .= "<span class=\"year\">" . $quoteObjects['year'] . "</span></p>";

    }
    
    return $quote;

}




