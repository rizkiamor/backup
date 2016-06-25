//out_response yang berfungsi untuk meletakkan url yang dimaksud oleh ajax
var xmlhttp;
function simpano(){
var kode=document.getElementById("kd_karyawan").value;
var status=document.getElementById("status").value;
var nama=document.getElementById("nama").value;
var ruang=document.getElementById("ruang").value;
var j_kel=document.getElementById("j_kel").value;
var alamat=document.getElementById("alamat").value;
var telpon=document.getElementById("telp").value;
if(status==""){
	alert('masukkan status!!!');
	document.getElementById("status").focus();
	return false;
	}
else if(nama==""){
	alert('masukkan nama !!!');
	document.getElementById("nama").focus();
	return false;
	}
else if(ruang==""){
	alert('masukkan ruang !!!');
	document.getElementById("ruang").focus();
	return false;
	}
else if(alamat==""){
	alert('masukkan alamat !!!');
	document.getElementById("alamat").focus();
	return false;
	}
else if(telpon==""){
	alert('masukkan telpon !!!');
	document.getElementById("telp").focus();
	return false;
	}

else{
	var url='../admin/karyawan_simpan.php';
	var post="kode="+kode+"&status="+status+"&nama="+nama+"&ruang="+ruang+"&j_kel="+j_kel+"&alamat="+alamat+"&telpon="+telpon;
	ajax(url,post,"tambah");
	}
	}
	
function tambah(a){
	var url="../admin/karyawan_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tambah");
	}
function tampil(){
	var url="../admin/karyawan_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampil");
	}

function update(){
var kode=document.getElementById("kd_karyawan").value;
var status=document.getElementById("status").value;
var nama=document.getElementById("nama").value;
var ruang=document.getElementById("ruang").value;
var j_kel=document.getElementById("j_kel").value;
var alamat=document.getElementById("alamat").value;
var telpon=document.getElementById("telp").value;
if(status==""){
	alert('masukkan status!!!');
	document.getElementById("status").focus();
	return false;
	}
else if(nama==""){
	alert('masukkan nama !!!');
	document.getElementById("nama").focus();
	return false;
	}
else if(ruang==""){
	alert('masukkan ruang !!!');
	document.getElementById("ruang").focus();
	return false;
	}
else if(alamat==""){
	alert('masukkan alamat !!!');
	document.getElementById("alamat").focus();
	return false;
	}
else if(telpon==""){
	alert('masukkan telpon !!!');
	document.getElementById("telp").focus();
	return false;
	}

else{
	var url='../admin/karyawan_update.php';
	var post="kode="+kode+"&status="+status+"&nama="+nama+"&ruang="+ruang+"&j_kel="+j_kel+"&alamat="+alamat+"&telpon="+telpon;
	ajax(url,post,"tambah");
	}
	}
		

function hapus(kdhapus){
	var konfirmasi=confirm("anda yakin akan menghapusnya?");
	if (konfirmasi){
	var url="karyawan_hapus.php";
	var post="kdhapus="+kdhapus;
	var response="tampil";
	ajax(url,post,response);
	alert("anda telah menghapusnya");
	return true;
}
else{
alert("anda membatalkan penghapusan");
return false;
}
}

function edit_kar(kdedit){
var url="karyawan_edit.php";
var post="kdedit="+kdedit;
var response="tambah";
ajax(url,post,response);
}

function cari(jenis){
	if(jenis==""){
	tutup();	
	}
	else{
	var url="kategori_cari.php";
	var post="wcari="+jenis;
	var response="tampil";
	ajax(url,post,response)
	}
}
	
function out_response(response){
	if (response=="laksanakan"){
		document.getElementById("data_view").innerHTML=xmlhttp.responseText;
		}
		if (response=="tambah"){
	document.getElementById("tambah").innerHTML=xmlhttp.responseText;
		}
	if(response=="tampil"){
		document.getElementById("tampil").innerHTML=xmlhttp.responseText;
		}
}

//ajax
function ajax(url,post,response)
{
 xmlhttp=GetXmlHttpObject();
 xmlhttp.onreadystatechange=function()
 {
  if(xmlhttp.readyState==4)
  {
   if(xmlhttp.status==200)
   {
    out_response(response);
   }
   else{ajax_fail();}
  }
 }
 xmlhttp.open("POST",url,true);
 xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
 xmlhttp.send(post);
}
//----------------------
//ajax_fail
function ajax_fail()
{
 alert("Maaf ada gangguan penerimaan data, silahkan coba lagi atau refresh browser anda.");
 return false;
}
//----------------------
//pilih xmlhttp berdasarkan browser
function GetXmlHttpObject()
{
 if(window.XMLHttpRequest)
 {
  return new XMLHttpRequest();
 }
 if(window.ActiveXObject)
 {
  return new ActiveXObject("Microsoft.XMLHTTP");
 }
 else
 {alert("Maaf browser anda tidak mendukung ajax.");}
 return false;
}
//------------------------