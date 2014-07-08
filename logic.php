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

function get_password($password_length)
{
    $dict = dictionary();
    $length = count($dict);
    $password = "";
   
    for ($i = 1; $i <= $password_length; ++$i) {
        $index = mt_rand(0, $length-1);
        $password .= $dict[$index] . " ";
    }
    return $password;
}

if(isset($_POST['get_password']))
{
    $password_length = $_POST["how_many"];
    $password = get_password($password_length);
} 


