// JavaScript Document
var xmlhttp;
/* home */
$(document).ready(function(){
setTimeout(home,400);
$('#enterTb').keypress(function (e) {
		 if (e.which == 13) {
				home();
	}
	});
	});

function home(){
	var url="./home.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi")
}
/*end - home*/
/* siswa */
function siswa(){
	var url="./siswa.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi")
}
/*end - siswa */
/*sekolahan*/
function sekolah(){
	var url="./sekolah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi")
}
/*end=-sekolah*/
/*bantuan*/
function bantuan(){
	var url="./bantuan.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi")
}
/*end - bantuan */
/*kategori*/
function kategori(){
	var url="./kategori.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi")
}
function kategoritambah(){
	var i=document.getElementById("id").value;
	var u=document.getElementById("kategoria").value;
	var url='./kategori/tambah.php';
	var post='i='+i+"&u="+u;
	ajax(url,post,"tampil");
	sweetAlert("Data Berhasil Disimpan");
	return true;
	}
function kategoriedit(kdedit){
	var url="./kategori/edit.php";
	var post="kdedit="+kdedit;
	var response="lihat";
	ajax(url,post,response);
	}
function kategoriupdate(){
	var i=document.getElementById("id").value;
	var u=document.getElementById("kategoria").value;
	var url='./kategori/update.php';
	var post='i='+i+"&u="+u;
	ajax(url,post,"tampil");
	sweetAlert("Data Berhasil Disimpan");
	return true;
	}
function kategorihapus(kdhapus){
	var konfirmasi=confirm("anda yakin hapus ?");
	if (konfirmasi){
	var url="./kategori/hapus.php";
	var post="kdhapus="+kdhapus;
	var response="tampil";
	ajax(url,post,response);
	alert("anda telah Menghapus");
	return true;
	}
	else{
	swall("Hapus Batal")
	return false;
	}
	}
/*end - kategori*/
/*berita*/
/*end -berita*/
/*pertanyaan*/
/*end - pertanyaan*/
/*kritik - saran*/
/*end - kritik saran*/
/*user*/
function user(){
	var url="./user.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function usertambah(){
	var i=document.getElementById("id").value;
	var u=document.getElementById("user").value;
	var p=document.getElementById("pass").value;
	var k=document.getElementById("nama").value;
	var url='./user/tambah.php';
	var post='i='+i+"&u="+u+"&p="+p+"&k="+k;
	ajax(url,post,"tampil");
	sweetAlert("Data Berhasil Disimpan");
	return true;
	}
function useredit(kdedit){
	var url="./user/edit.php";
	var post="kdedit="+kdedit;
	var response="lihat";
	ajax(url,post,response);
	}
function userupdate(){
	var i=document.getElementById("id").value;
	var u=document.getElementById("user").value;
	var p=document.getElementById("pass").value;
	var k=document.getElementById("nama").value;
	var url='./user/update.php';
	var post='i='+i+"&u="+u+"&p="+p+"&k="+k;
	ajax(url,post,"tampil");
	sweetAlert("Data Berhasil Disimpan");
	return true;
	}
function userhapus(kdhapus){
	var konfirmasi=confirm("anda yakin hapus ?");
	if (konfirmasi){
	var url="./user/hapus.php";
	var post="kdhapus="+kdhapus;
	var response="tampil";
	ajax(url,post,response);
	alert("anda telah Menghapus");
	return true;
	}
	else{
	swall("Hapus Batal")
	return false;
	}
	}

/*end-user*/
function coba(){
	sweetAlert("Data Berhasil Disimpan");
	}

function scr(){
	var url="./crud/upload/scr.php?rand="+Math.random();
	var post="";
	ajax(url,post,"foto")
}



/* proses js*/
function out_response(response){

	if(response=="tampil"){
		document.getElementById("tampil").innerHTML=xmlhttp.responseText;
		}
		if(response=="cari"){
			document.getElementById("cari").innerHTML=xmlhttp.responseText;
			}
	if(response=="isi"){
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}
	if(response=="lihat"){
		document.getElementById("lihat").innerHTML=xmlhttp.responseText;
		}
	if(response=="aksi"){
		document.getElementById("aksi").innerHTML=xmlhttp.responseText;
		}
	if(response=="print"){
		document.getElementById("print").innerHTML=xmlhttp.responseText;
		}
	if(response=="foto"){
		document.getElementById("foto").innerHTML=xmlhttp.responseText;
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
	alert('maaf ada gangguan penerimaan data, silahkan coba lagi atau refresh web browser anda');
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
