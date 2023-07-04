<?php
namespace core\database;
use PDO;
class QueryBuilder
{
        public $cardnumber;
        public $name;
        public $exdatte;
        public $cvv;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function insert ()
    {
        try
        {
            if (isset($_POST['submit']))
            {
                $this->cardnumber = $_POST['cardnumber'];
                $this->name = $_POST['name'];
                $this->exdatte = $_POST['date'];
                $this->cvv = $_POST['cvv'];
                $sql = "INSERT INTO payment VALUES (?,?,?,?)";
                $stmt = $this->pdo->prepare($sql);
                if ($stmt->execute([$this->cardnumber, $this->name, $this->exdatte, $this->cvv]) === true)
                {
                        echo '<script>alert("Payment Info Saved")</script>';
                        return view("app/views/index.php");
                }
                else
                {
                    return view("app/views/index.php");
                }
//                $stmt->execute([$this->cardnumber, $this->name, $this->exdatte, $this->cvv]);
//                echo '<script>alert("Payment Info Saved")</script>';
//                return view("app/views/index.php");
            }
        }
        catch (PDOException $e)
        {
            return view("app/views/index.php");
        }

    }
    public function selectall($table)
    {
        $sql=sprintf("SELECT * FROM %s",$table);
        try {
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function select($table)
    {
        $sql=sprintf("SELECT * FROM %s",$table);
        try {
            $stmt=$this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
