
<?php

require_once 'Model.php';

class ModelPlayer
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = connect();

        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function findAll()
    {
        try {
            $query = $this->db->prepare(
                'SELECT * FROM player'
            );

            $query->execute();

            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function findByPseudo($pseudo)
    {
        try {
            $query = $this->db->prepare(
                'SELECT * FROM player WHERE pseudo = :pseudo'
            );

            $query->execute([
                'pseudo' => $pseudo
            ]);

            return $query->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function add($pseudo, $score, $id_team)
    {
        try {
            $query = $this->db->prepare(
                'INSERT INTO player (pseudo, score, id_team)
                 VALUES (:pseudo, :score, :id_team)'
            );

            $query->execute([
                'pseudo' => $pseudo,
                'score' => $score,
                'id_team' => $id_team
            ]);

        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $query = $this->db->prepare(
                'DELETE FROM player WHERE id = :id'
            );

            $query->execute([
                'id' => $id
            ]);

        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }

    public function update($id, $pseudo, $score, $id_team)
    {
        try {
            $query = $this->db->prepare(
                'UPDATE player
                 SET pseudo = :pseudo,
                     score = :score,
                     id_team = :id_team
                 WHERE id = :id'
            );

            $query->execute([
                'id' => $id,
                'pseudo' => $pseudo,
                'score' => $score,
                'id_team' => $id_team
            ]);

        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}

?>