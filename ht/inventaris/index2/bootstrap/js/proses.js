// JavaScript Document
var xmlhttp;
/* profil */
function permintaan(){
	var url="./crud/permintaan/permintaan_tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function tambah(){
	var url="./crud/aku.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function permintaan_proses(){
	var url="./crud/permintaan/permintaan_proses.php"+Math.random();
	var post="";
	ajax(url,post,"aksi")

}
function tambah1(){
	var url="./crud/user/user.php"+Math.random();
	var post="";
	ajax(url,post,"aksi")
}
fuction permintaan_ok(){
	var url="./crud/permintaan/permintaan_ok.php"+Math.random();
	var post="";
	ajax(url,post,"hasil")
}
function user_edit(kdedit){
	var url="./crud/user/user_update.php";
	var post="kdedit="+kdedit;
	var response="aksi";
	ajax(url,post,response);
	}

function users_update(){
	var u=document.getElementById("username_u").value;
	var p=document.getElementById("password_u").value;
	var k=document.getElementById("kategori_u").value;

	var url='crud/user/user_update_simpan.php';
	var post='u='+u+"&p="+p+"&k="+k;
	ajax(url,post,"hasil");
	}

function user_simpan(){
	var u=document.getElementById("username_u").value;
	var p=document.getElementById("password_u").value;
	var k=document.getElementById("kategori_u").value;

	var url='crud/user/user_tambah.php';
	var post='u='+u+"&p="+p+"&k="+k;
	ajax(url,post,"aksi");
	alert("Data Berhasil Disimpan");
	return true;
	}

function user_hapus(kdhapus){
		var konfirmasi=confirm("anda yakin hapus ?");
	if (konfirmasi){
		var url="./crud/user/user_hapus.php";
		var post="kdhapus="+kdhapus;
		var response="aksi";
		ajax(url,post,response);
		alert("anda telah Menghapus");
		return true;
		}
	else{
		alert("Hapus Batal")
		return false;
		}}
/* sperpart */
function sperpart(){
	var url="./crud/sperpart/sperpart.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}


/* proses js*/
function out_response(response){

	if(response=="isi"){
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}
	if(response=="cobak"){
		document.getElementById("cobak").innerHTML=xmlhttp.responseText;
		}
	if(response=="hasil"){
		document.getElementById("hasil").innerHTML=xmlhttp.responseText;
		}
	if(response=="aksi"){
		document.getElementById("aksi").innerHTML=xmlhttp.responseText;
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
