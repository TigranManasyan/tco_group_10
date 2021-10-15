<?php
class Crud{

    protected $pdo;
    protected $response = [];
    public function __construct()
    {
        $db = new Db();
        $this->pdo = $db->connection();
    }

    public function delete($id) {
        $id = $_POST['id'];
        $sql = "DELETE FROM `posts` WHERE `id` = $id";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        if($query) {
            $response = $query->fetchAll();

            return json_encode($response);
        }

    }
    public function update($id, $name) {


        $sql = "UPDATE 
                    `posts` 
                SET 
                    `name` = '$name' 
                WHERE `id` = $id";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        if($query) {
            $response = $query->fetchAll();

            return json_encode($response);
        }
    }
    public function create($name) {
        $name = $_POST['name'];
        $sql = "INSERT INTO `posts` (`name`) VALUES ('$name')";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        if($query) {
            $response = $query->fetchAll();

            return json_encode($response);
        }
    }

}
$foo = new Crud();
$name = $_POST['name'];
$id = $_POST['id'];
if(isset($_POST['delete'])) {
    $foo->delete($id);
    location.reload();
}
if(isset($_POST['uptade'])) {
    $foo->update($id,$name);
    location.reload();
}
if(isset($_POST['insert'])) {
    $foo->create($name);
    location.reload();
}