//out_response yang berfungsi untuk meletakkan url yang dimaksud oleh ajax
var xmlhttp;
function simpano(){
var kode=document.getElementById("kd_petugas").value;
var nama=document.getElementById("nama").value;
var j_kel=document.getElementById("j_kel").value;
var alamat=document.getElementById("alamat").value;
var telp=document.getElementById("telpon").value;
var user=document.getElementById("user").value;
var pass=document.getElementById("pass").value;
var hak=document.getElementById("hak").value;
if(nama==""){
	alert('masukkan status!!!');
	document.getElementById("nama").focus();
	return false;
	}


else{
	var url='../admin/petugas_simpan.php';
	var post="kode="+kode+"&nama="+nama+"&j_kel="+j_kel+"&alamat="+alamat+"&telp="+telp+"&user="+user+"&pass="+pass+"&hak="+hak;
	ajax(url,post,"tambah");
	}
	}
	
	function update(){
var kode=document.getElementById("kd_petugas").value;
var nama=document.getElementById("nama").value;
var j_kel=document.getElementById("j_kel").value;
var alamat=document.getElementById("alamat").value;
var telp=document.getElementById("telpon").value;
var user=document.getElementById("user").value;
var pass=document.getElementById("pass").value;
var hak=document.getElementById("hak").value;
if(nama==""){
	alert('masukkan status!!!');
	document.getElementById("nama").focus();
	return false;
	}


else{
	var url='../admin/petugas_update.php';
	var post="kode="+kode+"&nama="+nama+"&j_kel="+j_kel+"&alamat="+alamat+"&telp="+telp+"&user="+user+"&pass="+pass+"&hak="+hak;
	ajax(url,post,"tambah");
	}
	}
	
function tambah(a){
	var url="../admin/petugas_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tambah");
	}
function tampil(){
	var url="../admin/petugas_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampil");
	}


function hapus(kdhapus){
	var konfirmasi=confirm("anda yakin akan menghapusnya?");
	if (konfirmasi){
	var url="petugas_hapus.php";
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

function edit(kdedit){
var url="petugas_edit.php";
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