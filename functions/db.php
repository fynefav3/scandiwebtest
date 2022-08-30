<?php
class DB
{
    protected $dbHost     = "185.224.138.112";
    protected $dbUsername = "u947126269_demo";
    protected $dbPassword = "Pass@12345";
    protected $dbName     = "u947126269_demo";

    public function __construct()
    {
        if (!isset($this->db)) {
            try {
                $conn = new PDO("mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName, $this->dbUsername, $this->dbPassword);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // $check = $conn->query("SELECT COUNT(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = products");
                // if (!$check->fetchColumn()) {
                //     $stmt = $conn->prepare("CREATE TABLE `products`(
                //         `id` INT (11) NOT NULL AUTO_INCREMENT, 
                //         `sku` VARCHAR (255) NOT NULL,
                //         `name` VARCHAR (255) NOT NULL,
                //         `price` VARCHAR (255) NOT NULL,
                //         `productType` VARCHAR (255) NOT NULL,
                //         `attribute` VARCHAR (255) DEFAULT NULL,
                //         UNIQUE (sku),
                //         PRIMARY KEY (id)
                //         ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");

                //     $stmt->execute();
                //     $stmt->closeCursor();
                // }

                $this->db = $conn;
            } catch (PDOException $e) {
                die("Failed to connect with MySQL: " . $e->getMessage());
            }
        }
    }

    public function create($table, $data)
    {
        if (!empty($data) && is_array($data)) {
            $col = implode(',', array_keys($data));
            $value = ":" . implode(',:', array_keys($data));
            $sql = "INSERT INTO " . $table . " (" . $col . ") VALUES (" . $value . ")";

            $query = $this->db->prepare($sql);

            foreach ($data as $key => $val) {
                $query->bindValue(':' . $key, $val);
            }

            $query->execute();
            return true;
        } else {
            return false;
        }
    }

    public function read($table)
    {
        $sql = "SELECT * FROM $table ORDER BY sku ASC";

        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function delete($table, $ids)
    {
        if (!empty($ids) && is_array($ids)) {
            foreach ($ids as $id) {
                $sql = "DELETE FROM $table WHERE id = $id";
                $this->db->exec($sql);
            }

            return true;
        } else {
            return false;
        }
    }
    // protected function closeConnection()
    // {
    //     if ($this->conn != null) {
    //         $this->conn->close();
    //         $this->conn = null;
    //     }
    // }




}
