//out_response yang berfungsi untuk meletakkan url yang dimaksud oleh ajax
var xmlhttp;
function simpan_kategori(){
var kode=document.getElementById("kd_alat").value;
var model=document.getElementById("model").value;
var kategori=document.getElementById("kd_kategori").value;
var merk=document.getElementById("merk").value;
var pembuat=document.getElementById("kd_pembuat").value;
var tahun=document.getElementById("thn_buat").value;
if(model==""){
	alert('masukkan model!!!');
	document.getElementById("model").focus();
	return false;
	}
else if(merk==""){
	alert('masukkan merk !!!');
	document.getElementById("merk").focus();
	return false;
	}
else if(tahun==""){
	alert('masukkan tahun !!!');
	document.getElementById("thn_buat").focus();
	return false;
	}

else{
	var url='../admin/alat_simpan.php';
	var post="kode="+kode+"&model="+model+"&kategori="+kategori+"&merk="+merk+"&pembuat="+pembuat+"&tahun="+tahun;
	ajax(url,post,"tambah");
	}
	}

function update_kategori(){
var kode=document.getElementById("kd_alat").value;
var model=document.getElementById("model").value;
var kategori=document.getElementById("kd_kategori").value;
var merk=document.getElementById("merk").value;
var pembuat=document.getElementById("kd_pembuat").value;
var tahun=document.getElementById("thn_buat").value;
if(model==""){
	alert('masukkan model!!!');
	document.getElementById("model").focus();
	return false;
	}
else if(merk==""){
	alert('masukkan merk !!!');
	document.getElementById("merk").focus();
	return false;
	}
else if(tahun==""){
	alert('masukkan tahun !!!');
	document.getElementById("thn_buat").focus();
	return false;
	}

else{
	var url='../admin/alat_update.php';
	var post="kode="+kode+"&model="+model+"&kategori="+kategori+"&merk="+merk+"&pembuat="+pembuat+"&tahun="+tahun;
	ajax(url,post,"tambah");
	}
	}
	
function tambah(a){
	var url="../admin/alat_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tambah");
	}
function tampil(){
	var url="../admin/alat_tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"tampil");
	}

	function update_alat(){
var kode=document.getElementById("kd_kategori").value;
var jenis=document.getElementById("jenis").value;
if(jenis==""){
	alert('masukkan jenis!!!');
	document.getElementById("jenis").focus();
	return false;
	}
else{
	var url='kategori_update.php';
	var post="kode="+kode+"&jenis="+jenis;
	ajax(url,post,"tampil");
	}
	}
		

function hapus_pembuat(kdhapus){
	var konfirmasi=confirm("anda yakin akan menghapusnya?");
	if (konfirmasi){
	var url="alat_hapus.php";
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
var url="alat_edit.php";
var post="kdedit="+kdedit;
var response="tambah";
ajax(url,post,response);
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