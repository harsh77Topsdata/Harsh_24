<html>
	<head>
		<title>Grade System</title>
	</head>
	<body>
		<h1>My Grading System</h1><hr>
		<form action="" method="post">
			<p>Mark of English:
				<input type="number" name="eng" placeholder="enter the mark of english">
			</p>
			
			<p>Mark of Gujarati:
				<input type="number" name="guj" placeholder="enter the mark of gujarati">
			</p>
			
			<p>Mark of Hindi:
				<input type="number" name="hin" placeholder="enter the mark of hindi">
			</p>
			
			<p>Mark of Maths:
				<input type="number" name="math" placeholder="enter the mark of maths">
			</p>
			
			<p>Mark of Computer:
				<input type="number" name="com" placeholder="enter the mark of computer">
			</p>
			
			<p>
				<input type="submit" name="submit" value="submit">
			</p>
			<hr>
		</form>
	</body>
</html>

<?php 
	if(isset($_REQUEST['submit']))
	{
		$eng=$_REQUEST['eng'];
		$guj=$_REQUEST['guj'];
		$hin=$_REQUEST['hin'];
		$math=$_REQUEST['math'];
		$com=$_REQUEST['com'];
		
		//Total of Subject
		$total=$eng+$guj+$hin+$math+$com;
		//percentage 
		$per=($total/500)*100;	
		
		echo "Total marks of all subject:	".$total."<br>";
		
		if($per>=90)
		{
			echo "Student passed with A+ Grade<br>";
		}
		elseif($per>=80)
		{
			echo "Student passed with A Grade<br>";
		}
		elseif($per>=70)
		{
			echo "Student passed with B+ Grade<br>";
		}
		elseif($per>=60)
		{
			echo "Student passed with B Grade<br>";
		}
		elseif($per>=50)
		{
			echo "Student passed with C+ Grade<br>";
		}
		elseif($per>=40)
		{
			echo "Student passed with C Grade<br>";
		}
		else
		{
			echo "You're Fail";
		}
	}
	
?>