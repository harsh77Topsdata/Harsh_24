<?php

use Dba\Connection;

class model{
    public $conn="";
    function __construct(){

        $this->conn=new mysqli('localhost','root','','Harsh');
    }

    function select($tbl)
    {
        $sel="select * from $tbl";
        $run=$this->conn->query($sel);

        while($fetch=$run->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    function insert($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $col=implode(",",$col_arr);

        $col_value=array_values($arr);
        $col=implode(",",$col_value);

        $ins="insert into $tbl ($col) value($value)";
        $run=$this->conn->query($ins);

        return $run;
    }

    function select_where($tbl,$arr)
    {
        $column_arr=array_keys($arr);
        $values_arr=array_values($arr);

        $sel="select * from $tbl where 1=1";
        $i=0;

        foreach($arr as $w)
        {
            echo $sel.=" and $column_arr[$i]='$values_arr[$i]'";
            $i++;

        }
        $run=$this->conn->query($sel);
        return $run;
    }

    function delet_where($tbl,$arr)
    {
        $column_arr=array_keys($arr);
        $values_arr=array_values($arr);

        $del="delete * from $tbl where  1=1";
        $i=0;

        foreach($arr as $w)
        {
            echo $del.="and $column_arr[$i]='$values_arr[$i]'";
            $i++;
        }

        $run=$this->conn->query($del);
        return $run;

    }

    function update_where($tbl,$arr,$where)
    {
        $column_arr=array_keys($arr);
        $values_arr=array_values($arr);

        $upd="update $tbl set";
        $j=0;
        $count=count($arr);

        foreach($arr as $w)
        {
            if($count==j+1)
            {
                $upd.="and $column_arr[$j]='$values_arr[$j]'";
            }
            else
            {
                $upd.="and $column_arr[$j]='$values_arr[$j]'";
                $j++;
            }
        }
       
        $wcolumn_arr=array_keys($arr);
        $wvalues_arr=array_values($arr);

        $upd.="where 1=1";
        $i=0;

        foreach($where as $w)
        {
            echo $del.="and $wcolumn_arr[$i]='$wvalues_arr[$i]'";
            $i++;
        }

        $run=$this->conn->query($upd);
        return $run;
    }
}

$obj =new model;

?>