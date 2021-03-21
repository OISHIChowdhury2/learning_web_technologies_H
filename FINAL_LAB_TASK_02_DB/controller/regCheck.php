<?php
	session_start();
	require_once('../model/productModel.php');

	if(isset($_POST['addproduct'])){

		$proname = $_POST['proname'];
		$buyprice = $_POST['buyprice'];
		$sellprice = $_POST['sellprice'];

		if($proname == "" || $buyprice == "" || $sellprice== "")
		{
			echo "null submission...";
		}else{

			if($sellprice !== $buyprice){

				$db = [
							'proname' => $proname,
							'buyprice' => $buyprice,
							'sellprice' => $sellprice
						];

				$status = insertdb($db);

				if($status){
					header('location: ../view/Display.php');
				
				}else{
					echo "error";
				}

			}else{
				echo "sellprice& confirm sellpricemismatch..";
			}
		}

	}
?>