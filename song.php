<?php

$title = "Listerine";
$artist = "Dayglow";
$mood = "Energetic";

$lyrics = ["I stop but then I hesitate
What's the point of leaving if we can't even wait?
She's thinking of what she could say",

"Fifteen days that I spent Finding out what you meant Now we're dancing 
again Keeping time, she keeps my eyes awake What else is there to say?",

"I knew that I wouldn't change
I thought that this was something different than before
Now we're changing shape inside your brain and starting to reform, oh lord
Now I'm speaking words without thinking before
I knew that I wouldn't change
I wanted to do what I said that I'd do
Now I'm making things up and not thinking it through, so true
It was so legit but it's nothing new
I knew that I wouldn't change",

"Well, now I don't know what to speak
Writing a verse is worse than you think
I'm spitting out her Listerine",
];




$nouns = [
"verse", "point", "leaving", "wait", "days", "time", "eyes", "lord",
"shape", "brain", "words", "things", "listerine", "pre-chorus", "chorus",
"something", "thought", "change", "way", "speak", "writing", "verse",
"listerine", "out", "saying", "difference", "reform", "truth"
];

$verbs = [
"stop", "hesitate", "leave", "wait", "think", "say", "spent", "finding",
"meant", "dancing", "keeping", "keeps", "awake", "knew", "change",
"thought", "changing", "speaking", "wanted", "said", "making", "thinking",
"knew", "speak", "writing", "spitting", "know"
];


$verse1 = $lyrics[0];
$preChorus = $lyrics[1];
$chorus = $lyrics[2];
$verse2 = $lyrics[3];

//stored the amount of time verses,prechorus,chorus were repeated.
$verseCount = 2;
$repeatPreChorus = 2;
$repeatChorus = 2;


//Used operators to get the total amount of verses,chorus,pre-chorus.
$totalParts = $verseCount + $repeatChorus + $repeatPreChorus;

?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayglow - Listerine</title>
    <style>
        body {
    margin: 0; 
    font-family: Arial, sans-serif;
}

.left-box2 {
    width: 600px; 
    padding: 20px; 
    border: 1px solid #ccc; 
    background-color:#4F8FC0; 
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    float: center; 
    margin: 0 auto;

}

.left-box {
    width: 600px; 
    padding: 20px; 
    border: 1px solid #ccc; 
    background-color:#26648E; 
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    float: center; 
    margin: 0 auto;
}

.left-box p {
    text-align: center; 
    margin-bottom: 10px; 
}
    </style>
    </head>
    <body style="background-color: #41436A;">
        <div class="left-box">
            
        <!--
        Print the values of title and artist by calling
        -->
        <h1>Title:<a href ="https://www.youtube.com/watch?v=KAKAj2cMYFk"><?php echo $title ?></a><br>
        
            Artist: <?php echo $artist ?></h1>
    
<h3><i>
</div>


<div class ="left-box2">
<?php
//Created a loop to print the values of the array lyrics
for ($x = 0; $x <4; $x++) {
    echo $lyrics[$x]. " <br><br>";    
}
    echo $preChorus. " <br><br>";
    echo $chorus. " <br><br>";
?>
</i>
</h3>
</div>
</body>
</html>