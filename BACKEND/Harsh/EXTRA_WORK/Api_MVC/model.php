<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

class model
{
	public $conn="";
	
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','pro_tbl');
	}
	
	function select($tbl)
	{
		$sel="select * from $tbl";  
		$run=$this->conn->query($sel);  
		while($fetch=$run->fetch_object()) 
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function select_join($tbl1,$tbl2,$on)
	{
		$sel="select * from $tbl1 join $tbl2 on $on";  
		$run=$this->conn->query($sel);  
		while($fetch=$run->fetch_object()) 
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	
	function insert($tbl,$arr)
	{
		$col_arr=array_keys($arr);
		$column=implode(",",$col_arr); 
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr); 

		echo $ins="insert into $tbl ($column) value ('$value')"; 
		$run=$this->conn->query($ins); 
		return $run;
	}
	function delete($tbl,$where)
	{
		$col_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$del="delete from $tbl where 1=1"; 
		$i=0;
		foreach($where as $w)
		{
			echo $del.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);  
		return $run;
	}
	
	function select_where($tbl,$where)
	{
		$col_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl where 1=1";  
		$i=0;
		foreach($where as $w)
		{
			echo $sel.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  
		return $run;
	}
	
	function select_where_join($tbl1,$tbl2,$on,$where)
	{
		$col_arr=array_keys($where);
		$value_arr=array_values($where);
		
		$sel="select * from $tbl1 join $tbl2 on $on where 1=1";  
		$i=0;
		foreach($where as $w)
		{
			echo $sel.=" and $col_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  
		return $run;
	}
	
	
	function update_where($tbl,$arr,$where)
	{
		$col_arr=array_keys($arr);
		$value_arr=array_values($arr);
		$j=0;
		$upd="update $tbl set";  
		$count=count($arr);
		foreach($arr as $d)
		{
			if($count==$j+1)
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]'";
			}
			else
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]',";
				$j++;
			}			
		}
		$upd.=" where 1=1";
		$col_where=array_keys($where);
		$value_where=array_values($where);
		$i=0;
		foreach($where as $w)
		{
			echo $upd.=" and $col_where[$i]='$value_where[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);  
		return $run;
	}
	
	
	
}
$obj=new model;

?>