<?php

class model{

    public $conn="";

    function __construct(){
        
        $this->conn=new mysqli('localhost','root','','task');
    }

    function select($tbl)
    {
        $sel="select * from $tbl";
        $run=$this->conn->query($sel);

        while($fetch_run=$fetch_object())
        {
            $arr=$fetch[];
        }
        return $arr;
    }

    function insert($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $col=implode (",",$col_arr);

        $col_value=array_values($arr);
        $col=implode (",",$col_value);

        $ins="insert * into $tbl($col) value($values)";
        $run=$this->conn->query($ins);

        return $run;
        
    }

    function select_where($tbl,$arr)
    {
        $column_arr=array_keys($arr);
        $column_values=array_values($arr);

        $sel="select * from $tbl where 1=1";
        $i=0;

        foreach($arr as $w) 
        {
            echo $sel.="and $column_arr[$i]='$column_value[$i]'";
            $i++;
        }
        $run=$this->conn->query($sel);
        return $run;
    }

    function delete_where($tbl,$arr)
    {
        $column_arr=array_keys($arr);
        $column_values=array_values($arr);

        $del="delete * from $tbl where 1=1";
        $i=0;

        foreach($arr as $w) 
        {
            echo $del.="and $column_arr[$i]='$column_value[$i]'";
            $i++;
        }
        $run=$this->conn->query($del);
        return $run;
    }

    function update_where($tbl,$arr,$where)
    {
        $column_arr=array_keys($arr);
        $column_arr=array_values($arr);

        $upd="update $tbl set";
        $j=0;
        $count=count($arr);

        foreach($arr as $w) 
        {
            if($count=j+1)
            {
                $upd.="and $column_arr[$j]='$column_arr[$j]'";
            }
            else 
            {
                $upd.="and $column_arr[$j]='$column_arr[$j]'";
                $j++;
            }
        }

        $wcolumn_arr=array_keys($arr);
        $wcolumn_arr=array_values($arr);

        $upd="where 1=1";
        $i=0;

        foreach($where as $w) 
        {
            echo $upd.="and $wcolumn_arr[$i]='$wcolumn_arr[$i]'";
            $i++;
        }

        $run=$this->conn->query($upd);
        return $run;
    }

}

$obj = new model;

?>