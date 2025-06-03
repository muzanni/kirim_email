<?php 
ob_start();

include 'koneksi.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';



$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from data where id='$id'");
$d = mysqli_fetch_assoc($data);

$nama = $d['nama'];
$email = $d['email'];
$alamat = $d['alamat'];
$path = 'file/' . $d['file'];
$judul = "Contoh Kirim Email";
$pesan = "hallo".$nama." Dengan Email :".$email." Dengan Alamat".$alamat;



$mail = new PHPMailer(true);
try {                       
	$mail->SMTPDebug = 2;  
	$mail->isSMTP();
	$mail->Host       = 'smtp.gmail.com';
	$mail->SMTPAuth   = true;
	$mail->Username   = 'moezanni@gmail.com';
	$mail->Password   = 'njyupmencgcsadzb';
	$mail->SMTPSecure = 'tls';
	$mail->Port       = 587;  
	

	$mail->setFrom('moezanni@gmail.com', 'Kirim Email');
	$mail->addAddress($email); 

	$mail->isHTML(true);
	$mail->AddAttachment($path);
	$mail->Subject = $judul;    
	$mail->Body = $pesan;	

	$mail->send();
	header("location:index.php?alert=berhasil");
}catch (Exception $e) {
	header("location:index.php?alert=gagal");

}

?>