<?php
	
	require_once('db.php');

	function getproductsById($id){

		$conn = getConnection();

		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllproducts(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row); 
		}

		return $users;
	}

	function insertproducts($products){

		$conn = getConnection();
		$sql = "insert into products values('', '{$products['proname']}', '{$products['buyprice']}', '{$products['sellprice']})";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateproducts($products){

		$conn = getConnection();
		$sql = "update products set proname='{$products['proname']}', buyprice='{$products['buyprice']}', sellprice='{$products['sellprice']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteproducts($id){
		$conn = getConnection();
		$sql = "delete from products where id={$id}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>