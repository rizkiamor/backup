// JavaScript Document
var xmlhttp;

function tambah(){
	var url="petugas_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tambah");
	}

function hapus(){
var kode=document.getElementById("kode").value;
var yaqin=confirm("apakah anda yaqin mau menghapus ini???")
if(yaqin==true){
	var url='kategori_hapus.php';
	var post="kode="+kode;
	ajax(url,post,"tampilo");
	}else{
	return false;
		}
	}
function tutup()
{
	document.getElementById("tampilo").innerHTML="";
}

function tutupForm()
{
 document.getElementById("formnya").innerHTML="";	
}

function simpan_petugas(){
var kode=document.getElementById("kd_petugas").value;
var nama=document.getElementById("nama").value;
var sex=document.getElementById("sex").value;
var alamat=document.getElementById("alamat").value;
var telp=document.getElementById("telpon").value;
var user=document.getElementById("user").value;
var pass=document.getElementById("pass").value;
var hak=document.getElementById("hak").value;
if(nama==""){
	alert('masukkan nama!!!');
	document.getElementById("nama").focus();
	return false;
	}
if(alamat==""){
	alert('masukkan alamat!!!');
	document.getElementById("alamat").focus();
	return false;
	}
if(telp==""){
	alert('masukkan telpon!!!');
	document.getElementById("telpon").focus();
	return false;
	}
if(user==""){
	alert('masukkan user!!!');
	document.getElementById("user").focus();
	return false;
	}
if(pass==""){
	alert('masukkan pass!!!');
	document.getElementById("pass").focus();
	return false;
	}
else{
	var url='petugas_simpan.php';
	var post="kode="+kode+"&nama="+nama+"&sex="+sex+"&alamat="+alamat+"&telp="+telp+"&user="+user+"&pass="+pass+"&hak="+hak;
	ajax(url,post,"simpan");
	}
	}
	
function hapuslah(kdhapus){
	var konfirmasi=confirm("anda yakin akan menghapusnya?");
	if (konfirmasi){
	var url="kategori_hapus.php";
	var post="kdhapus="+kdhapus;
	var response="tampilo";
	ajax(url,post,response);
	alert("anda telah menghapusnya");
	return true;
}
else{
alert("anda membatalkan penghapusan");
return false;
}
}

function update_petugas(){
var kode=document.getElementById("kd_petugas").value;
var nama=document.getElementById("nama").value;
var sex=document.getElementById("sex").value;
var alamat=document.getElementById("alamat").value;
var telp=document.getElementById("telpon").value;
var user=document.getElementById("user").value;
var pass=document.getElementById("pass").value;
var hak=document.getElementById("hak").value;
if(nama==""){
	alert('masukkan nama!!!');
	document.getElementById("nama").focus();
	return false;
	}
if(alamat==""){
	alert('masukkan alamat!!!');
	document.getElementById("alamat").focus();
	return false;
	}
if(telp==""){
	alert('masukkan telpon!!!');
	document.getElementById("telpon").focus();
	return false;
	}
if(user==""){
	alert('masukkan user!!!');
	document.getElementById("user").focus();
	return false;
	}
if(pass==""){
	alert('masukkan pass!!!');
	document.getElementById("pass").focus();
	return false;
	}
else{
	var url='petugas_update.php';
	var post="kode="+kode+"&nama="+nama+"&sex="+sex+"&alamat="+alamat+"&telp="+telp+"&user="+user+"&pass="+pass+"&hak="+hak;
	ajax(url,post,"simpan");
	}
	}
	
function edit_petugas(kdedit){
	var url="petugas_edit.php";
	var post="kdedit="+kdedit;
	var response="tambah";
	ajax(url,post,response);
}
function tampil(){
	var url="petugas_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampilo");
	}
	function profil(){
	var url="profil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampilo");
	}
	


function out_response(response){
	if (response=="edit_form"){
	document.getElementById("formnya").innerHTML=xmlhttp.responseText;
		}
	if(response=="tambah"){
		document.getElementById("formnya").innerHTML=xmlhttp.responseText;
		}
	if(response=="tampilo"){
		document.getElementById("tampilo").innerHTML=xmlhttp.responseText;
		}
		
	if(response=="simpan"){
		document.getElementById("formnya").innerHTML=xmlhttp.responseText;
		}
		if(response=="hapus_data"){
document.getElementById("tampilo").innerHTML=xmlHTTP=xmlhttp.responseText;
}
if(response=="simpan_perubahan")	{
document.getElementById("formnya").innerHTML=xmlhttp.responseText;
}	
if (response=="cari"){
		document.getElementById("tampilo").innerHTML=xmlhttp.responseText;
	}
}

		
function ajax(url,post,response){
	xmlhttp=GetXmlHttpObject();
	xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4){
		if(xmlhttp.status==200){
		out_response(response);	
			}else{
				ajax_fail();
				}
	}
	}
	xmlhttp.open("POST",url,true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(post);
}
function ajax_fail(){
	slert('maaf ada gangguan penerimaan data, silahkan coba lagi atau refresh web browser anda');
	return false;
	}
function GetXmlHttpObject(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
		}
	if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
		}else{
			alert('browser anda tidak mendukung ajax');}
			return false;
	}

