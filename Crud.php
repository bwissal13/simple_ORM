<?php



class Crud
{
    

   private $conex;


    public function __construct(){
        $conex = new Conex(); 
        $this->conex ->getConnection();
    }
    

    public function insertRecord($table, $data)
    {
        $columns = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table($columns) VALUES($values)";

        $stmt = $this->conex->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $this->conex->errorInfo()[2]);
        }

        $stmt->execute(array_values($data));

        return $stmt->rowCount();
    }

    public function updateRecord($table, $data, $id)
    {
        $args = array();

        foreach ($data as $key => $value) {
            $args[] = "$key = ?";
        }

        $sql = "UPDATE $table SET " . implode(',', $args) . " WHERE id = ?";

        $stmt = $this->conex->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $this->conex->errorInfo()[2]);
        }

        $params = array_merge(array_values($data), [$id]);
        $stmt->execute($params);

        return $stmt->rowCount();
    }


    public function deleteRecord($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = ?";

        $stmt = $this->conex->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $this->conex->errorInfo()[2]);
        }

        $stmt->execute([$id]);

        return $stmt->rowCount();
    }


    public function selectRecords($table, $columns = "*", $where = null)
    {
        $sql = "SELECT $columns FROM $table";

        if ($where !== null) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->conex->prepare($sql);

        if (!$stmt) {
            die("Error in prepared statement: " . $this->conex->errorInfo()[2]);
        }

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function closeConnection()
    {
        $this->conex = null;
    }
}
// $test= new Crud();
// $test->insertRecord("users",['First_name'=> "ana",'Last_name'=>"taniana",'Email'=>"chihaja","Phone"=>15]);
// $test1 = new Crud() ;
// $test1->updateRecord("users",['First_name'=> "anaaatest",'Last_name'=>"tanianatest",'Email'=>"chihajatest","Phone"=>15],1);
// $test3 = new Crud();
// $test3-> deleteRecord("users",1);
// $test3 = new Crud();
// $test3-> selectRecords("users","First_name= 'ana'");
