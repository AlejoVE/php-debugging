<?php
declare(strict_types=1);

// === Exercise 1 ===
function new_exercise() {

    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise();
echo("<br>");
echo("<hr>");


// === Exercise 2 ===
echo("Exercise 2:");
echo("<br>");
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;
echo("<br>");
echo("<hr>");

// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
echo("Exercise 3:");

$str = '<br>"Debugged !" Also very fun';
echo substr($str, 0, 16);
echo("<br>");
echo("<hr>");

// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!
echo("Exercise 4:");
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

echo("<br>");
print_r($week);
echo("<br>");
echo("<hr>");


// === Exercise 5 ===
$arr = [];
echo("Exercise 5:");

for ($letter = 'a'; $letter !=='aa'; $letter++) {
    array_push($arr, $letter);
}

echo("<br>");
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array
echo("<br>");
echo("<hr>");


// === Exercise 6 ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
echo("Exercise 6:");
echo("<br>");
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode("-", $params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count([$heroes]))][rand(0, 10)];

    return  $randname;
}

echo "Here is the name: ", combineNames();
echo("<br>");
echo("<hr>");

// === Exercise 7 ===
echo("Exercise 7:");
echo("<br>");

function copyright($year) {
    return "&copy; $year BeCode";
}
//print the copyright
echo (copyright(date("Y")));
echo("<br>");
echo("<hr>");

// === Exercise 8 ===
echo("Exercise 8:");
echo("<br>");

function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
echo("<br>");
//no access
echo login('john@example.be', 'dfgidfgdfg');
echo("<br>");
//no access
echo login('wrong@example.be', 'wrong');
echo("<br>");
echo("<hr>");
//you can change things again!

// === Exercise 9 ===
echo("Exercise 9:");
echo("<br>");

function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo(isLinkValid('http://www.google.com/hack.pdf'));
//invalid link
echo(isLinkValid('https://google.com'));
//VALID link
echo(isLinkValid('http://google.com'));
//VALID link
echo(isLinkValid('http://google.com/test.txt'));
echo("<br>");
echo("<hr>");

// === Exercise 9 ===
echo("Exercise 10:");
echo("<br>");


//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code

$arrayFiltered = array_filter($areTheseFruits, function ($value){
    global $validFruits;
 if(in_array($value,  $validFruits)){
     return $value;
 };
});

var_dump($areTheseFruits);//do not change this
echo("<br/>");
var_dump($arrayFiltered);

