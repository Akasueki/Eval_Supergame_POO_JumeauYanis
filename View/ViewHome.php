
<?php

require_once 'View.php';

class ViewHome extends View
{
    
    public function displayMain(){
    echo '
    <main>

        <h1>Ajouter un joueur</h1>

        <form action="" method="POST">

            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" required>

            <br><br>

            <label for="score">Score :</label>
            <input type="number" id="score" name="score" required>

            <br><br>

            <label for="team">Team :</label>
            <select id="team" name="team">
                <option value="1">Aucune</option>
                <option value="2">TeamRocket</option>
                <option value="3">DreamTeam</option>
            </select>

            <br><br>

            <button type="submit">Ajouter le joueur</button>

        </form>

        <p>' . htmlspecialchars($this->message) . '</p>

        <hr>

        <h2>Liste des joueurs</h2>

        <table border="1">

            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Score</th>
                    <th>Team</th>
                </tr>
            </thead>

            <tbody>';

    foreach ($this->players as $player) {
        echo '
                <tr>
                    <td>' . htmlspecialchars($player['pseudo']) . '</td>
                    <td>' . htmlspecialchars($player['score']) . '</td>
                    <td>' . htmlspecialchars($player['id_team']) . '</td>
                </tr>';
    }

    echo '
            </tbody>

        </table>

    </main>';

    return $this;
}


    public function displayAll()
    {
        $this->displayHeader();
        $this->displayMain();
        $this->displayFooter();

        return $this;
    }

private $players = [];
private $message = '';

public function setPlayers($players){
    $this->players = $players;
}

public function setMessage($message){
    $this->message = $message;
}
}
