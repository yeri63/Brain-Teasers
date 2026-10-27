<?php
    # Program: riddles.php
    #    Date: 09-May-2023
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Brain Teasers for kids.

    session_start();
    header("Content-type: text/xml");

    $delay = 60;
    header("Refresh:$delay");

    $urlPath = "http://192.168.3.250/cisco/riddles.php";

    $riddle = array(
        "Imagine you're in a room that is filling with water. There are no windows or doors. How do you get out?",
        "Stop imagining!",

        "What two things can you never eat for breakfast?",
        "Lunch and dinner!",

        "If you throw a blue stone into the Red Sea, what will it become?",
        "Wet.",

        "I have wings and a tail, yet I have no eyes, ears or mouth. What am I?",
        "A kite.",

        "Mr. Blue lives in the blue house, Mr. Yellow lives in the yellow house, and Mr. Black lives in the black house. Who lives in the white house?",
        "The President.",

        "In a one-story pink house, there was a pink person, a pink cat, a pink chair, a pink table, a pink telephone, - everything was pink! What color were the stairs?",
        "There weren't any stairs, it was a one-story house.",

        "A girl is sitting in a house at night with no lights on. Yet she is reading. How?",
        "The woman is blind, and she is reading Braille.",

        "What gets wetter and wetter the more it dries?",
        "A towel.",

        "You draw a line. Without touching it, how do you make the line longer?",
        "You draw a shorter line next to it, and it becomes the longer line.",

        "What goes around and around the wood, but never goes into the wood?",
        "The bark on a tree.",

        "You see a boat full of people, yet there isn't a single person on board. How is that possible?",
        "All the people on the boat are married.",

        "If an electric train is going east at 60 miles an hour and there is a strong westerly wind, which way does the smoke from the train drift?",
        "There is no smoke coming from electric trains.",

        "I have keys but no doors. I have space but no rooms, I allow you to enter but you are never able to leave. What am I?",
        "A keyboard.",

        "The more you take, the more you leave behind. What are they?",
        "Footprints.",

        "They come out at night without being called and are lost in the day without being stolen. What are they?",
        "The stars.",

        "What is so delicate that saying its name breaks it?",
        "Silence.",

        "What is as light as a feather, but even the world's strongest man couldn't hold it for more than a minute?",
        "His breath.",

        "It has a neck but no head, and wears a cap? What is it?",
        "A bottle.",

        "A truck driver was going opposite traffic on a one-way street. A police officer sees him but doesn't stop him. Why not?",
        "He was walking.",

        "What word has five letters but sounds like it only has one?",
        "Queue.",

        "What can run but never walks, has a mouth but never talks, has a head but never weeps, has a bed but never sleeps?",
        "A river.",

        "What goes up but never goes down?",
        "Your age.",

        "What starts with the letter T, is filled with T and ends in T?",
        "A teapot.",

        "What invention lets you look right through a wall? ",
        "A window.",

        "Beth's mother has three daughters. One is called Laura, the other one is Sarah. What is the name of the third daughter?",
        "Beth.",

        "Say Racecar backwards.",
        "\"Racecar backwards.\"",

        "How can you throw a ball as hard as you can, to only have it come back to you, even if it doesn't bounce off anything?",
        "Throw the ball straight up in the air.",

        "What never asks questions but is often answered?",
        "A doorbell.",

        "What belongs to you but other people use it more than you?",
        "Your name.",

        "What did one wall say to the other wall?",
        "I'll meet you at the corner.",

        "I come in many different colors, get bigger when I'm full, and make a loud sound if I break. What am I?",
        "A balloon.",

        "This goes up and down, but never moves? What is it?",
        "A flight of stairs.",

        "What can be big, white, dirty and wicked?",
        "A lie.",

        "What has a thumb and four fingers but is not alive?",
        "A glove.",

        "Which weighs more, a pound of feathers or a pound of bricks?",
        "Neither. They both weigh one pound.",

        "How many months have 28 days?",
        "All 12 months.",

        "What comes once in a minute, twice in a moment, but never in a thousand years?",
        "The letter M.",

        "Two mothers and two daughters went out to eat. Everyone ate one burger, yet only three burgers were eaten in all. How is this possible?",
        "They were a grandmother, mother, and daughter.",

        "Using only addition, how do you add eight 8s and get the number 1,000?",
        "888 + 88 + 8 + 8 + 8 = 1000.",

        "If there are three apples and you take away two, how many do you have?",
        "If you take two apples, then, of course, you have two.",

        "What do the numbers 11, 69, and 88 all have in common?",
        "The read the same right side up and upside down.",

        "I am an odd number. Take away one letter and I become even. What number am I?",
        "Seven (take away the \"s\" and it becomes \"even\").",
   
        "I have a large money box, 10 inches wide and 5 inches tall. Roughly how many coins can I place in my empty money box?",
        "Just one, after which it will no longer be empty.",
   
        "Mrs. Black has two children. If the oldest child is a girl, what are the odds that the other child is also a girl?",
        "50 percent.",
   
        "If twos' company and three's a crowd, what are five and six?",
        "Eleven.",
   
        "Is an older one-hundred dollar bill worth more than a newer one?",
        "Yes. A $100 bill is worth more than a $1 bill (newer one).",
   
        "I am a three-digit number. My second digit is four times bigger than the third digit. My first digit is 3 less than my second digit. What number am I?",
        "141.",
   
        "If you multiply me by any other number, the answer will always remain the same. What number am I?",
        "Zero.",
   
        "If four people can repair four bicycles in four hours, how many bicycles can eight people repair in eight hours?",
        "16 bicycles.",
   
        "You walk into a room with a match, a kerosene lamp, a candle, and a fireplace. Which do you light first?",
        "The match.",
   
        "What word begins and ends with an E but only has one letter?",
        "Envelope.",
   
        "Railroad crossing, watch out for cars. Can you spell that without any Rs?",
        "T-H-A-T.",
   
        "A man was taking a walk outside when it started to rain. The man didn't have an umbrella, and he wasn't wearing a hat. His clothes got soaked, yet not a single hair on his head got wet. How was this possible?",
        "The man was bald.",
   
        "How many seconds are there in a year?",
        "Twelve. January 2nd, February 2nd, March 2nd, and so on.",
   
        "Name four days of the week that start with the letter \"T.\"",
        "Tuesday, Thursday, today, and tomorrow.",
   
        "A boy was rushed to the hospital emergency room. The ER doctor saw the boy and said, \"I cannot operate on this boy. He is my son.\" But the doctor was not the boy's father. How could that be?",
        "The doctor was his mom.",
   
        "What word looks the same backward and upside down?",
        "SWIMS.",
   
        "What does this mean? \"I RIGHT I\"",
        "Right between the eyes.",
   
        "A boy fell off a 20-foot ladder but did not get hurt. Why not?",
        "He fell off the bottom step.",
   
        "What five-letter word becomes shorter when you add two letters to it?",
        "Short.",
   
        "If you are running in a race and you pass the person in second place, what place are you in?",
        "Second place.",
   
        "How many letters are there in the alphabet?",
        "Eleven: T-H-E-A-L-P-H-A-B-E-T.",
   
        "The one who made it didn't want it. The one who bought it didn't need it. The one who used it never saw it. What is it?",
        "A coffin.",
   
        "What needs an answer but doesn't ask a question?",
        "A telephone.",
   
        "If I have it, I don't share it. If I share it, I don't have it. What is it?",
        "A secret.",
   
        "What is always late and never present now?",
        "Later.",
   
        "How far can a dog run into the woods?",
        "The dog can run into the woods only halfway - if it ran any farther it would run out of the woods!",
   
        "My name is Roger. I live on a farm. There are four other dogs on the farm with me. Their names are Snowy, Flash, Speedy, and Brownie. What do you think the fifth dog's name is?",
        "Roger.",
   
        "A cowboy rides into town on Friday, stays for three days, then leaves on Friday. How did he do it?",
        "His horse's name was Friday.",
   
        "If three dogs and one cat weren't standing under an umbrella, how did none of them get wet?",
        "It wasn't raining!",
   
        "How many animals did Moses take on the ark?",
        "Moses didn't take anything on the ark. Noah did.",
   
        "A dog is on a 10-foot chain but wants a bone that is 11 feet away. How can the dog get the bone?",
        "The chain isn't attached to anything.",
   
        "I travel very slowly when gliding along the ground. Maybe my shell weighs me down. In your garden, I am found. What am I?",
        "A snail.",
   
        "What has two heads, four eyes, six legs, and a tail?",
        "A cowboy riding his horse.",
   
        "I can jump and I can climb. With my many legs, I swing from tree to tree. I can build a house much bigger than me. What am I?",
        "A spider.",
   
        "I have four legs but no tail. Usually, you can only hear me at night. What am I?",
        "A frog.");

    $count = 76;

    function FisherYatesIndex($n) {

        # Create array of n elements containing indexes.
        $arr = [];

        for ($i = 0; $i < $n; $i++)
            $arr[$i] = $i;

        # Perform index shuffle.
        for($i = $n - 1; $i > 0; $i--) {
            $r = rand(0, $i); $tmp = $arr[$i];
            $arr[$i] = $arr[$r];
            $arr[$r] = $tmp; }

        return $arr; }

    # Recall prior variable state
    $id = $_SESSION['id'] ?? "";                # App name.

    # Prevent data corruption to next application.
    if ($id == "riddles") {
        $lastCmd = $_SESSION['cmd'] ?? 0;       # User command.
        $mode = $_SESSION['mode'] ?? 0;         # Current mode.
        $ndx = $_SESSION['ndx'] ?? 0;           # Current index.
        $rndNdx = $_SESSION['rndNdx'] ?? 0;     # Random index.
        $update = $_SESSION['update'] ?? 0; }   # Time from prior page update.

    else {
        $mode = 0;
        $ndx = 0;
        $rndNdx = FisherYatesIndex($count); 
        $update = 0; }

    # Get SoftKey selection.
    $cmd = $_GET['key'] ?? 0;

    # Check page refresh delay.
    if (time() - $update < $delay)

        # Process user request based on the key pressed.
        switch($cmd) {

        case 1 : # mode
            $mode = ++$mode % 2;
            break;

        case 2 : # previous
            $ndx = (--$ndx + $count) % $count;
            $mode = 0;
            break;

        case 3 : # next
            $ndx = ++$ndx % $count;
            $mode = 0;
            break;
        }

    else {
        # Advance to next item after displaying answer.
        $ndx = ++$ndx % $count; 
        $mode = 0; }

    # Update the indexes on both fields.
    $i = $rndNdx[$ndx] * 2;
    $j = $i + 1;

    switch($mode) {

    case 0 : # Question
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Brain Teasers - Question</Title>\n";
        echo "  <Text>$riddle[$i]</Text>\n";

        $label = "Answer";
        $msg = "Use arrows to view all text.";
        break;

    case 1 : # Answer
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Brain Teasers - Answer</Title>\n";
        echo "  <Text>$riddle[$j]</Text>\n";

        $label = "Back";
        $msg = "Use arrows to view all text.";
        break;
    }

    echo "  <SoftKeyItem>\n";
    echo "    <Name>$label</Name>\n";
    echo "    <URL>$urlPath?key=1</URL>\n";
    echo "    <Position>1</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Prev</Name>\n";
    echo "    <URL>$urlPath?key=2</URL>\n";
    echo "    <Position>2</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Next</Name>\n";
    echo "    <URL>$urlPath?key=3</URL>\n";
    echo "    <Position>3</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Exit</Name>\n";
    echo "    <URL>SoftKey:Exit</URL>\n";
    echo "    <Position>4</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <Prompt>$msg</Prompt>\n";
    echo "</CiscoIPPhoneText>";

    # Save current variable state.
    $_SESSION['id'] = "riddles";
    $_SESSION['cmd'] = $cmd;
    $_SESSION['mode'] = $mode;
    $_SESSION['ndx'] = $ndx;
    $_SESSION['rndNdx'] = $rndNdx;
    $_SESSION['update'] = time();
?>

