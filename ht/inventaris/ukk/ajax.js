//out_response yang berfungsi untuk meletakkan url yang dimaksud oleh ajax
var xmlhttp;
function tambah(a){
	var url="../admin/pembuat_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tambah");
	}
function tampil(){
	var url="../admin/pembuat_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampil");
	}
function simpan_pembuat(){
var kode=document.getElementById("kd_pembuat").value;
var nama=document.getElementById("nm_pembuat").value;
var kota=document.getElementById("kota_pembuat").value;
if(nama==""){
	alert('masukkan nama anda!!!');
	document.getElementById("nm_pembuat").focus();
	return false;
	}
if(kota==""){
	alert('masukkan nama kota anda!!!');
	document.getElementById("kota_pembuat").focus();
	return false;
	}
else{
	var url='pembuat_simpan.php';
	var post="kode="+kode+"&nama="+nama+"&kota="+kota;
	ajax(url,post,"tampil");
	}
	}
		
function update(){
var kode=document.getElementById("kd_pembuat").value;
var nama=document.getElementById("nm_pembuat").value;
var kota=document.getElementById("kota_pembuat").value;
if(nama==""){
	alert('masukkan nama anda!!!');
	document.getElementById("nm_pembuat").focus();
	return false;
	}
if(kota==""){
	alert('masukkan nama kota anda!!!');
	document.getElementById("kota_pembuat").focus();
	return false;
	}
else{
	var url='admin/pembuat_update.php';
	var post="kode="+kode+"&nama="+nama+"&kota="+kota;
	ajax(url,post,"tambah");
	}
	}	
function hapus_pembuat(kdhapus){
	var konfirmasi=confirm("anda yakin akan menghapusnya?");
	if (konfirmasi){
	var url="pembuat_hapus.php";
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

function edit_pembuat(kdedit){
	var url="pembuat_edit.php";
	var post="kdedit="+kdedit;
	var response="tambah";
	ajax(url,post,response);
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