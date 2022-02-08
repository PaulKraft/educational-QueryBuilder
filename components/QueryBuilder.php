<?php 


// database query class 

class QueryBuilder
{
	protected $pdo;
	

	// input pdo object

	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	// input table name, string $table
	// return table rows type array

	public function getAll($table){
		$sql = "SELECT * FROM {$table}";
		$statement = $this->pdo->prepare($sql);
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_ASSOC);		
	}

	// input string $table, int id
	// return table row type array

	public function getOne($table, $id){

		$sql = "SELECT * FROM posts WHERE id=:id";

		$statement = $this->pdo->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	// input string $table, array $data
	// add row to table in database

	public function create($table, $data){

		$keys = implode(", ", array_keys($data));
		$tags = ":" . implode(', :', array_keys($data));
		$sql = "INSERT INTO  {$table} ($keys) VALUES ($tags)";
		
		$statement = $this->pdo->prepare($sql);
		$statement->execute($data);
	}

	// input string $table, array $data, int $id
	// change row of table in database by id

	public function update($table, $data, $id){

		$keys = array_keys($data);

		$string = '';

		foreach ($keys as $key) {
			$string .= $key . '=:' . $key.',';
		}

		$keys = rtrim($string,',');

		$data["id"] = $id;

		$sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
		$statement = $this->pdo->prepare($sql);
		$statement->execute($data);

		}

	// input string $table, int $id
	// delete row of table in database by id

	public function delete($table, $id){
		
		$sql = "DELETE FROM {$table} WHERE id=:id";

		$statement = $this->pdo->prepare($sql);
		$statement->bindParam(':id', $id);
		$statement->execute();
		
	}



}


?> 
