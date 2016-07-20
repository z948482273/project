<?php 
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=district;charset=utf8','root','');
	} catch (PDOException $e) {
		echo $e->getMessage();
		exit;
	}
 
 	$upid = isset($_GET['upid']) ? $_GET['upid'] : 0;

 	$stmt = $pdo->query('select * from district where upid='.$upid);

 	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

 	echo json_encode($data); 
