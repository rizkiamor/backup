<?php
include('../koneksi.php');
$dir_foto = "images/";

 $filename = $_FILES['gambar']['name'];
 $ext = pathinfo( $filename, PATHINFO_EXTENSION );
 $ekstensi = array('jpg','jpeg','png','gif','JPG'); // Ektensi yg diterima
    
    //filter ektensi gambar yang diterima
    if( in_array( $ext, $ekstensi ) ) {
        
        //maks ukuran gambar 500kb
        if( $_FILES['gambar']['size'] < 1000000 ) {
        
               $filename    = "foto-" . time() . "." .$ext;
                
                if ( move_uploaded_file( $_FILES['gambar']['tmp_name'], $dir_foto . $filename ) ) {
                    echo "Sukses";
					//alamat file
		$uploaddir='./files/';
		$alamatfile=$uploaddir.$filename;
				//data masuk
				mysql_query("INSERT INTO  `kartu_un`.`images` (
`id` ,`name` ,`image`)VALUES ('3',  '$alamatfile',  '$filename');");
                
				} else {
                   echo "Gagal";
                }
        } else {
            echo "Ukuran gambar terlalu besar, maksimum 1 MB.";
        }
    } else {
        echo "Format file tidak didukung.";
    }

?>