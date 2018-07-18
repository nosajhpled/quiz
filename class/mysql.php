<?php
class MySQL
{
	private $mysqlConnection;
	public $count;
	public $preparedStatement;

public function __construct($mySQLCredentials,$preparedStatement = '')
 {
	 $this->MySQLConnect($mySQLCredentials);
	 $this->preparedStatement = $preparedStatement;
 }

	private function MySQLConnect($credentials)
	{
		/*$credentials = array(
				'user' => "",
				'password' => "",
				'host' => "",
				'database' => "");*/

		try
		{
		$this->mysqlConnection = new PDO(
						'mysql:host='.$credentials['host'].';dbname='.$credentials['database'],
						$credentials['user'],
						$credentials['password']);
		}
		catch (PDOException $e)
		{
			die($e->getMessage());
		}
	}

	public function Query($query)
	{
		//$this->mysqlConnection->($query);
	}
	public function NonQuery($query)
	{
		//$this->count = $dbh->exec($query);
	}

	public function PreparedStatement($values)
	{
		//$preparedS$this = $this->mysqlConnection->prepare($this->preparedStatement);
		//$preparedS$this->execute($values);

	}

	public function Close()
	{
		this->mysqlConnection->closeCursor();
	}

	public function StoreProcedure($storedProcedure,$parametersValues)
	{
		$parameters = implode(',',array_keys($parametersValues));
		$callStoredProcedure = $this->mysqlConnection->prepare("CALL ".$storedProcedure."(".$parameters.")");
		foreach($parametersValues as $key=>$val)
		{
    	$callStoredProcedure->bindParam($key, $val);
		}

    try {
      $callStoredProcedure->execute();
    }
    catch (PDOException $e)
    {
        die($e->getMessage());
    }
	}
}

?>
