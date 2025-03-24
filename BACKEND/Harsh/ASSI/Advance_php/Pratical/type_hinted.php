<?php 
	class Type_Hinted
	{
		public function details(string $name,int $age,array $skills):string{$skill_list=implode(", ", $skills);
		return "Name: $name, Age: $age, Skills: $skill_list";
		}
	}

	$obj= new Type_Hinted;
	echo $obj->details("Deepak",25,["PHP","JavaScript","C++"]);
?>