<?php
class Connect
{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db   = "smkilhamidb";
	
	private $nama;
	private $jenisKelamin;
	private $tempat;
	private $tanggalLahir;
	private $kelas;
	private $jrs;
	
	public function _Construct(){}
	public function connect()
	{
		mysql_connect($this->host,$this->user,$this->pass);
		$M = mysql_select_db($this->db);
		if(!$M){echo("X");}
	}
	private function sNama($nama){$this->nama = $nama;}
	private function gNama(){return $this->nama;}
	private function sJenisKelamin($jenisKelamin){$this->jenisKelamin = $jenisKelamin;}
	private function gJenisKelamin(){return $this->jenisKelamin;}
	private function sTempat($tempat){$this->tempat = $tempat;}
	private function gTempat(){return $this->tempat;}
	private function sTanggalLahir($tanggalLahir){$this->tanggalLahir = $tanggalLahir;}
	private function gTanggalLahir(){return $this->tanggalLahir;}
	
	private function sKelas($kelas){$this->kelas = $kelas;}
	private function gKelas(){return $this->kelas;}
	
	private function sJrs($jrs){$this->jrs;}
	private function gJrs(){return $this->jrs;}
	
	public function saveSiswa($nama,$jenisKelamin,$tempat,$tanggalLahir,$kelas,$jrs)
	{
		$this->sNama($nama);
		$this->sJenisKelamin($jenisKelamin);
		$this->sTempat($tempat);
		$this->sTanggalLahir($tanggalLahir);
		$this->sKelas($kelas);
		$this->sJrs($jrs);
	
		$nama			=$this->gNama();
		$jenisKelamin	=$this->gJenisKelamin();
		$tempat			=$this->gTempat();
		$tanggalLahir 	=$this->gTanggalLahir();
		$kelas			=$this->gKelas();
		$jrs 			=$this->gJrs();
		
		$my = mysql_query("INSERT INTO siswa VALUES('','$nama','$jenisKelamin','$tempat','$tanggalLahir','$kelas','$jrs')");
		if(!$my)
		{
			echo "X";
		}
		else
		{
			header("location:index.php");
		}
	}
}
?>