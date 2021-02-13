<?php
$con = mysql_connect("localhost","root","", "surat")
mysql_select_db("surat",$con)
if(isset($_GET['q'])){
	$q=$_GET['q'];
	$stmt=$con->prepare("select*from warga where warga LIKE ? Nama LIKE ?");
	$param="%$q%";
	$stmt->bind_param("ss",$param,$param);
	$data=array();
	if($stmt->execute()){
		$result=$stmt->get_result();
		if($result->num_rows>0){
			while($row=$result->mysql_fetch_assoc()){
				$id=$row['id'];
				$penduduk=$row['NIK'].''.$row['Nama'];
				$data[]=array('id'=>$id,'text'=>$penduduk);
				# code...
			}
			$stmt->close();
			}else{
				$data[]=array('id'=>0,'text'=>'Warga tidak ditemukan');
			}
			echo json_encode($data);
		}
	}
}