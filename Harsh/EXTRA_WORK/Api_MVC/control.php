<?php

include_once('model.php'); // step 1


class control extends model   // step 2
{
	function __construct()
	{
		
		session_start();
		
		model::__construct();   // step 3
		
		$url=$_SERVER['PATH_INFO']; //http://localhost/students/28Dec_PHP_2023/Project/website/control.php
		
		switch($url)
		{
			case '/contact_get':	
				$res=$this->select('contacts');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Contact Found.", "status" => false));
				}
			break;
			
			// contact_single_get?id="2"  
			
			case '/contact_single_get': 	
				
				$id = $_GET['id'];
				
				$where=array("id"=>$id);
				$chk=$this->select_where('contacts',$where);
				$res=$chk->fetch_object();
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Contact Found.", "status" => false));
				}
			break;
			
			case '/contact_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$name = $data_arr["name"]; 
				$email = $data_arr["email"];
				$mobile = $data_arr["mobile"];
				$comment = $data_arr["comment"];
				
				$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"comment"=>$comment);
				
				$res=$this->insert('contacts',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "Contacts Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Failed Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/contact_delete':	
				
				//$data = json_decode(file_get_contents("php://input"), true);
				//$id = $data["id"];
				
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('contacts',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "Contacts Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Contacts Not Deleted", "status" => false));	
				}
			break;
			
			case '/contact_patch':	
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data["id"];
				$name = $data_arr["name"]; 
				$email = $data_arr["email"];
				$mobile = $data_arr["mobile"];
				$comment = $data_arr["comment"];
				
				$arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"comment"=>$comment);
				$where=array("id"=>$id);
				
				$res=$this->update_where('contacts',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Contacts Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Contacts Not Update", "status" => false));	
				}
			break;
			
			//  Blog ============================================================================================ 
			
			case '/blog_get':	
				$res=$this->select('blog');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Blog Found.", "status" => false));
				}
			break;
			
			case '/blog_single_get':	
	
				$id = $_GET['id'];			
				$where=array("id"=>$id);
				$chk=$this->select_where('blog',$where);
				$res=$chk->fetch_object();
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Blog Found.", "status" => false));
				}
			break;
			
			case '/blog_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$title = $data_arr["title"]; 
				$description = $data_arr["description"];
				$blog_img = $data_arr["blog_img"];
				
				$arr=array("title"=>$title,"description"=>$description,"blog_img"=>$blog_img);
				
				$res=$this->insert('blog',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "Blog Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Blog Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/blog_delete':	
			
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('blog',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "Blog Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Blog Not Deleted", "status" => false));	
				}
			break;
			
			case '/blog_patch':	
				
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data["id"];
				$title = $data_arr["title"]; 
				$description = $data_arr["description"];
				$blog_img = $data_arr["blog_img"];
				
				$arr=array("title"=>$title,"description"=>$description,"blog_img"=>$blog_img);
				$where=array("id"=>$id);
				
				$res=$this->update_where('blog',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Blog Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Blog Not Update", "status" => false));	
				}
			break;
			
			//  Categories ============================================================================================ 
			
			case '/categories_get':	
				$res=$this->select('categories');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Categories Found.", "status" => false));
				}
			break;
			
			case '/categories_single_get':	
	
				$id = $_GET['id'];			
				$where=array("id"=>$id);
				$chk=$this->select_where('categories',$where);
				$res=$chk->fetch_object();
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Categories Found.", "status" => false));
				}
			break;
			
			case '/categories_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$title = $data_arr["title"]; 
				$description = $data_arr["description"];
				$blog_img = $data_arr["blog_img"];
				
				$arr=array("title"=>$title,"description"=>$description,"blog_img"=>$blog_img);
				
				$res=$this->insert('categories',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "Categories Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Categories Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/categories_delete':	
			
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('blog',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "categories Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed categories Not Deleted", "status" => false));	
				}
			break;
			
			case '/categories_patch':	
				
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data["id"];
				$title = $data_arr["title"]; 
				$description = $data_arr["description"];
				$blog_img = $data_arr["blog_img"];
				
				$arr=array("title"=>$title,"description"=>$description,"blog_img"=>$blog_img);
				$where=array("id"=>$id);
				
				$res=$this->update_where('categories',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Categories Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Categories Not Update", "status" => false));	
				}
			break;
			
			
			//  services ============================================================================================ 
			
			case '/services_get':	
				$res=$this->select('services');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Services Found.", "status" => false));
				}
			break;
			
			case '/services_single_get':	
	
				$id = $_GET['id'];			
				$where=array("id"=>$id);
				$chk=$this->select_where('services',$where);
				$res=$chk->fetch_object();
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Services Found.", "status" => false));
				}
			break;
			
			case '/services_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$title = $data_arr["title"]; 
				$description = $data_arr["description"];
				$blog_img = $data_arr["blog_img"];
				
				$arr=array("title"=>$title,"description"=>$description,"blog_img"=>$blog_img);
				
				$res=$this->insert('categories',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "Services Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Services Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/services_delete':	
			
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('services',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "Services Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Services Not Deleted", "status" => false));	
				}
			break;
			
			case '/services_patch':	
				
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data["id"];
				$title = $data_arr["title"]; 
				$description = $data_arr["description"];
				$blog_img = $data_arr["blog_img"];
				
				$arr=array("title"=>$title,"description"=>$description,"blog_img"=>$blog_img);
				$where=array("id"=>$id);
				
				$res=$this->update_where('services',$arr,$where);
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Services Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Services Not Update", "status" => false));	
				}
			break;
			
				
			//  appointment ============================================================================================ 
			
			case '/appointment_get':	
				$res=$this->select('Appointment');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Appointment Found.", "status" => false));
				}
			break;
			
			case '/appointment_single_get':	
	
				$id = $_GET['id'];			
				$where=array("id"=>$id);
				$chk=$this->select_where('appointment',$where);
				$res=$chk->fetch_object();
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Appointment Found.", "status" => false));
				}
			break;
			
			case '/appointment_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$service_id = $data_arr["service_id"]; 
				$userid = $data_arr["userid"];
				$app_Date = $data_arr["app_Date"];
				
				$arr=array("service_id"=>$service_id,"userid"=>$userid,"app_Date"=>$app_Date);
				
				$res=$this->insert('appointment',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "Appointment Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Appointment Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/appointment_delete':	
			
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('appointment',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "Appointment Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Appointment Not Deleted", "status" => false));	
				}
			break;
			
			case '/appointment_patch':	
				
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data["id"];
				$service_id = $data_arr["service_id"]; 
				$userid = $data_arr["userid"];
				$app_Date = $data_arr["app_Date"];
				
				$arr=array("service_id"=>$service_id,"userid"=>$userid,"app_Date"=>$app_Date);
				$where=array("id"=>$id);
				
				$res=$this->update_where('appointment',$arr,$where);
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Appointment Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Appointment Not Update", "status" => false));	
				}
			break;
			
			//  user ============================================================================================ 
			
			case '/user_get':	
				$res=$this->select('user');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No user Found.", "status" => false));
				}
			break;
			
			case '/user_single_get':	
	
				$id = $_GET['id'];			
				$where=array("id"=>$id);
				$chk=$this->select_where('user',$where);
				$res=$chk->fetch_object();
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No user Found.", "status" => false));
				}
			break;
			
			
			case '/user_login':	
	
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$email = $data_arr["email"]; 
				$password = $data_arr["password"];
				
				$where=array("email"=>$email,"password"=>$password);
				
				$res=$this->select_where('user',$where);
				$chk=$res->num_rows;
				if($chk==1)
				{
					echo json_encode(array("message" => "Login Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Login Failed ", "status" => false));	
				}
			break;
			
			
			case '/user_post':	
			
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$service_id = $data_arr["service_id"]; 
				$userid = $data_arr["userid"];
				$app_Date = $data_arr["app_Date"];
				
				$arr=array("service_id"=>$service_id,"userid"=>$userid,"app_Date"=>$app_Date);
				
				$res=$this->insert('appointment',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "User Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "User Contacts Not Inserted ", "status" => false));	
				}
			break;
			
			case '/user_delete':	
			
				$id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete('user',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "User Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed User Not Deleted", "status" => false));	
				}
			break;
			
			case '/user_patch':	
				
				$data_arr = json_decode(file_get_contents("php://input"), true);
				
				$id = $data["id"];
				$name = $data_arr["name"]; 
				$email = $data_arr["email"];
				$password = $data_arr["password"];
				$mobile = $data_arr["mobile"];
				$img = $data_arr["img"];
				
				$arr=array("name"=>$name,"email"=>$email,"password"=>$password,,"mobile"=>$mobile,"img"=>$img);
				$where=array("id"=>$id);
				
				$res=$this->update_where('user',$arr,$where);
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "User Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed User Not Update", "status" => false));	
				}
			break;
			
			default:
				include_once('pnf.php');
			break;	
		}
	}
}


$obj=new control;

?>