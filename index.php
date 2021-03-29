<?php

require 'src/Fighter.php';

// First Labour : Heracles vs Nemean Lion
// use your Figher class here


$heracles = new Fighter('🧔 Héraclès', 20, 6);
$lion = new Fighter('🦁 Lion de Némée', 11, 13);

$round = 1;
echo '<ul>';

while( $heracles->isAlive() && $lion->isAlive() ) {
    echo "<li>🕛 Round $round</li>";

    $heracles->fight($lion);
    echo "<li>" . $heracles->getName() . ' attaque ' . $lion->getName() . '.</li>';
    echo "<li>" .$lion->getName() . ' : ' . $lion->getLife() . '💙.</li>';

    if($lion->isAlive()) {
        $lion->fight($heracles);
        echo "<li>" .$lion->getName() . ' attaque ' . $heracles->getName() . '.</li>';
        echo "<li>" .$heracles->getName() . ' : ' . $heracles->getLife() . '💙.</li>';
    }

    $round++;
}

echo '</ul>';

if($heracles->isAlive()) {
    echo '<p>'. $lion->getName() .' est vaincu !</p>';
    echo '<p>'. $heracles->getName() .' a gagné !</p>';
} else {
    echo '<p>'. $lion->getName() .' est vaincu !</p>';
    echo '<p>'. $heracles->getName() .' a gagné !</p>';
}

?>


