<?php
echo"<form method='POST' >
     Bilangan <input type='text' size='50' placeholder='masukkan bilangan dan pisahkan dengan tanda koma' name='input' /><br />
     <input type='submit' />
     </form>";

if($_POST){ // jika form melakukan aksi POST, maka sources dibawah akan di eksekusi
   $data=explode(",",$_POST["input"]);// fungsi explode menjadikan data kedalam bentuk array berdasarkan delimiter

   for($i=0; $i<count($data); $i++){  // count(array) merupakan fungsi menghitung jumlah variabel dalam bentuk array
       for($j=$i+1; $j<count($data); $j++){
            if($data[$i]>$data[$j]){
               $temp=$data[$i];
               $data[$i]=$data[$j];
               $data[$j]=$temp;
            }
        }
    echo $data[$i]." ";
    }
}

/*
KATA INDEX
1. ARRAY ==>  sekumpulan variabel yang memiliki tipe data yang sama dan dinyatakan dengan nama yang sama.
2. EXPLODE ==> fungsi php yang berguna menjadikan variabel kedalam bentuk array berdasarkan delimiter
3. DELIMITER ==> variabel pemisah ex(1,2,3,1) , maka (,) adalah delimiter
3. COUNT ==> fungsi php yang menghitung jumlah banyak data dalam array ex : count(array(a,b,c)) count =3.
4. ECHO ==> fungsi php yang menampilkan string.
5. $_POST ==> fungsi php mengambil data POST dari url
6. $temp , merupakan variabel temporary(history/penampung)
7. $data merupakan variabel ARRAY
8. ex (example/contoh)

THANK YOU VERY MUCH
*/

