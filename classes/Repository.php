<?php
require_once 'autoloader.php';
class Repository
{
    private $db;
    public function __construct(
        protected $tableName
    ) {
        $this->db = ConnexionBD::getInstance();
    }
    // $whereConditions ['name' => 'aymen', 'email' => 'aymen@gmail.com']
    public function findAll() {
        $query = "select * from $this->tableName";
        $response = $this->db->query($query);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($id) {
        $query = "select * from $this->tableName where id = ?";
        $request = $this->db->prepare($query);
        $request->execute([$id]);
        return $request->fetch(PDO::FETCH_OBJ);
    }
// INSERT INTO `user` (`id`, `username`, `email`, `name`) VALUES (NULL, 'as', 'as@as.as', 'as');
    public function insert($data) {
        $keys = array_keys($data);
        $keyString = implode(",", $keys);
//        var_dump($keyString);
        $values= array_values($data);
        $preparedBlocs = array_fill(0, count($data), '?');
        $separtorString = implode(",", $preparedBlocs);
//        var_dump($separtorString);
        $request = $this->db->prepare("INSERT INTO $this->tableName (`id`, $keyString) VALUES (NULL, $separtorString)");
        $request->execute($values);
    }

    public function deleteById($id) {
        $query = "delete from $this->tableName where id = ?";
        $request = $this->db->prepare($query);
        $request->execute([$id]);
    }
}