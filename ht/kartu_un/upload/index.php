

<!doctype html>
<html>
<head>

  <meta charset="utf-8">
  <title>Form Upload Foto Siswa</title>

  <style>
    #progress { position:relative; width:300px;color:#111; border: 1px solid #ddd; padding: 1px; border-radius: 3px;display: none; }
    #bar { background-color: #d2322d; width:0%; height:20px; border-radius: 3px; }
    #percent { position:absolute; display:inline-block; top:3px; left:48%; }
  </style>
  <script src="jquery.min.js"></script>
  <script src="jquery.form.js"></script>

			
			<link rel="stylesheet" href="css/style-mobile.css" />
			
		
</head>
<body>
<table border="0">
<td>
<div>
 <?php
 include('form1.php');
 ?>
 <?php
 include('form2.php');
 ?>
 <?
 include('form3.php');
 ?>
 <?
 include('form4.php');
 ?>
 <?
 include('form5.php');
 ?>
 <?
 include('form6.php');
 ?>
 <?
 include('form7.php');
 ?>
 <?
 include('form8.php');
 ?>
 <?
 include('form9.php');
 ?>
 <?
 include('form10.php');
 ?>
 </div>
 </td>
 <td width="450">
 <center>
 <!-- untuk progress bar -->
    <div id="progress">
        <div id="bar"></div>
        <div id="percent">0%</div>
    </div>
    <br/>
    <!-- pesan setelah proses upload -->
    <div id="message"></div></center>
 <script>

$(document).ready(function() {

    //Foto
    var options = { 
        beforeSend: function() 
        {
            $("#progress").show();
            $("#bar").width('0%');
            $("#message").html("");
            $("#percent").html("0%");
            $("#upload-gambar").attr("disabled",""); // Membuat button upload jadi tidak bisa terklik

        },
        uploadProgress: function(event, position, total, percentComplete) 
        {
            $("#bar").width(percentComplete+'%');
            $("#percent").html(percentComplete+'%');  
        },
        success:function(data, textStatus, jqXHR) { 
            if ( data.trim() == "Sukses"){
                
                $("#percent").html("100%");
                $("#upload-gambar").removeAttr("disabled"); // Mengaktifkan kembali buton upload
                //Jika anda ingin menghilang progress bar setelah upload selesai hilangkan komentar script dibawah ini
                //$("#progress").hide();
                $("#message").html('Berhasil mengupload Gambar');

            } else {
                $("#progress").hide();
                $("#message").html(data);
                $("#upload-gambar").removeAttr("disabled");
                $("#upload-gambar").html("Upload");
            }
        },
        error: function()
        {
            $("#message").html("<span style='color:red'> ERROR: Tidak dapat mengupload</span>");

        }
         
    }; 

     // kirim form dengan opsi yang telah dibuat diatas
     $("#form-upload").ajaxForm(options);
	  $("#form-upload1").ajaxForm(options);
	  $("#form-upload3").ajaxForm(options);
	  $("#form-upload4").ajaxForm(options);
	  $("#form-upload5").ajaxForm(options);
	  $("#form-upload6").ajaxForm(options);
	  $("#form-upload7").ajaxForm(options);
	  $("#form-upload8").ajaxForm(options);
	  $("#form-upload9").ajaxForm(options);
	  $("#form-upload10").ajaxForm(options);

});
</script>
 
 </td>
 </table>
</body>
</html>
