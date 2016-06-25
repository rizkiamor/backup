// JavaScript Document
//out_response yang berfungsi untuk meletakkan url yang dimaksud oleh ajax
var xmlhttp;

//simpan query
function simpan_s(){
var kode=document.getElementById("admin").value;
var model=document.getElementById("user").value;
var kategori=document.getElementById("pass").value;
var merk=document.getElementById("sekolahan").value;
var pembuat=document.getElementById("akses").value;

if(model==""){
	alert('masukkan username!!!');
	document.getElementById("model").focus();
	return false;
	}
else if(kategori==""){
	alert('masukkan password !!!');
	document.getElementById("merk").focus();
	return false;
	}
else{
	var url='../sesepuh/s_simpan.php';
	var post="kode="+kode+"&model="+model+"&kategori="+kategori+"&merk="+merk+"&pembuat="+pembuat;
	ajax(url,post,"tambah");
	}
	}
//tambah form 
function tambah(a){
	var url="../sesepuh/s_tbh.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tambah");
	}
//tampil form
function tampil(){
	var url="../sesepuh/s_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampil");
	}

function cek(){
var pembuat=document.getElementById("kd_pembuat").value;
if(pembuat==""){
	alert('masukkan jenis!!!');
	document.getElementById("pembuat").focus();
	return false;
	}
else{
	var url='alat_cek.php';
	var post="pembuat="+pembuat;
	ajax(url,post,"nama");
	}
	}

function ceki(nama){
	if(nama==""){
	tutup();	
	}
	else{
	var url="alat_cek.php";
	var post="wcari="+nama;
	var response="tambah";
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
		if(response=="nama"){
		document.getElementById("nama").innerHTML=xmlhttp.responseText;
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