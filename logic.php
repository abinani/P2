<?php

function dictionary()
{
    //Random words using http://listofrandomwords.com/
    $dict = array(
        "firman",
        "pct",
        "sporogenous",
        "mtif",
        "recho",
        "pinnipedian",
        "bookrack",
        "stirlessly",
        "exploratively",
        "unsegregated",
        "promontory",
        "helpfully",
        "thighbone",
        "upswell",
        "resoften",
        "unwithstanding",
        "landshut",
        "spessartite",
        "scranton",
        "troth",
        "ryegrass",
        "pursued",
        "nonintroversive",
        "babylonian",
        "hawksbill",
        "nonconfidentiality",
        "staminody",
        "balderdash",
        "fallible",
        "demonstrated",
        "mesonephric",
        "toolmaker",
        "mediums",
        "laurentian",
        "noninvincibility",
        "lipochrome",
        "storybook",
        "expend",
        "retotaling",
        "proparoxytone",
        "preconcernment",
        "reacclimatized",
        "mortally",
        "indirectness",
        "nosey",
        "enhanced",
        "pragmatist",
        "sonorousness",
        "floridly",
        "unmedical");

    return $dict;

}

function symbols()
{
    $syms = array(
        '@',
        '%',
        '*',
      );

   return $syms;
}


function get_password($password_length, $needs_special_chars = 0, $needs_numericals = 0)
{
    $dict = dictionary();
    $length = count($dict);
    $password_array = array();
   
    for ($i = 1; $i <= $password_length; ++$i) {
        $index = mt_rand(0, $length-1);
        $password_array[] = $dict[$index];
    }


    if($needs_special_chars)
    {
        $randword_index = mt_rand(0, $password_length-1);
        $syms = symbols();
        $rand_symbol = $syms[mt_rand(0,count($syms)-1)];
        $password_array[$randword_index] .= $rand_symbol;
    }

    if($needs_numericals)
    {
        $randword_index = mt_rand(0, $password_length-1);
        $password_array[$randword_index] .= mt_rand(0,9);
    }

    $password = implode(" ", $password_array);
    return $password;
}

if(isset($_POST['get_password']))
{
    $password_length = $_POST["how_many"];
    $needs_special_chars = $_POST["needs_special_characters"];
    $needs_numbers = $_POST["needs_numbers"];
    $password = get_password($password_length, $needs_special_chars, $needs_numbers);
} 


