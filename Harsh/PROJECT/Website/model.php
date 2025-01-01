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
			 $del .= " and $column_arr[$i]='$values_arr[$i]'";
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

	function update_where($tbl,$arr,$where)
	{
		// update cust set name='raj',email='raj@gmail.com' where id=11
		$column_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$upd="update $tbl set ";  // 1=1 means query contnue
		$j=0;
		$count=count($arr);
		foreach($arr as $w)
		{
			if($count==$j+1)
			{
				$upd.=" $column_arr[$j]='$values_arr[$j]'";
			}
			else
			{
				$upd.=" $column_arr[$j]='$values_arr[$j]',";
				$j++;
			}
		}
		$wcolumn_arr=array_keys($where);
		$wvalues_arr=array_values($where);
		
		$upd.=" where 1=1";  // 1=1 means query contnue
		$i=0;
		foreach($where as $w)
		{
			echo $upd.=" and $wcolumn_arr[$i]='$wvalues_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);  // query run on db
		return $run;
		
	}
	


}
$obj = new model;
?>

