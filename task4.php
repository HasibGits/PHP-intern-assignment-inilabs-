<?php


class Player { 
    public function playerPosition() {
        echo "Position of football players\n";
    }
}


class Bellingham extends Player {
    public function playerPosition() {
        echo "Bellingham plays in CM\n";
    }
}


class Rudigar extends Player {
    public function playerPosition() {
        echo "Rudigar plays in CB\n";
    }
}

class ViniJR extends Player {
    public function playerPosition() {
        echo "ViniJR plays in LW\n";
    }
}


function findPlayerPosition(Player $player) {
    $player->playerPosition();
}



findPlayerPosition(new Bellingham()); // Outputs: Bellingham plays in CM
findPlayerPosition(new Rudigar()); // Outputs: Rudigar plays in CB
findPlayerPosition(new ViniJR()); // Outputs: ViniJR plays in LW

?>
