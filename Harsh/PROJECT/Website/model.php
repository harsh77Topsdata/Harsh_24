<?php

class model
{

	public $conn = "";
	function __construct()
	{

		$this->conn = new Mysqli('localhost', 'root', '', 'fitness');
	}
	function select($tbl)
	{

		$sel = "select * from $tbl";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;
	}

	function insert($tbl, $arr)
	{

		//$data=array("name"=>$name,"email"=>$email,"comment"=>$comment);
		$col_arr = array_keys($arr);
		$col = implode(",", $col_arr); // name,email,comment

		$value_arr = array_values($arr);
		$value = implode("','", $value_arr);

		$ins = "insert into $tbl ($col) values ('$value')";   // query
		$run = $this->conn->query($ins);  // run 
		return $run;
	}

	function select_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "select * from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			echo $del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}


	function delete_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "delete from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			echo $del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}





}
$obj = new model;
?><?php

class model
{

	public $conn = "";
	function __construct()
	{

		$this->conn = new Mysqli('localhost', 'root', '', 'fitness');
	}
	function select($tbl)
	{

		$sel = "select * from $tbl";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;
	}

	function insert($tbl, $arr)
	{

		//$data=array("name"=>$name,"email"=>$email,"comment"=>$comment);
		$col_arr = array_keys($arr);
		$col = implode(",", $col_arr); // name,email,comment

		$value_arr = array_values($arr);
		$value = implode("','", $value_arr);

		$ins = "insert into $tbl ($col) values ('$value')";   // query
		$run = $this->conn->query($ins);  // run 
		return $run;
	}

	function select_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "select * from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			echo $del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}


	function delete_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "delete from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			echo $del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}





}
$obj = new model;
?>