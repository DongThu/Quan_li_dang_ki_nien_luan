<?php

namespace CT271\Labs;

class Detai
{
	private $db;

	private $STT = -1;
	public $HocKy;
	public $NienKhoa;
	public $TenDeTai;
	public $NoiDung;
	public $MSCB;
	public $HoTenCB;
	public $GhiChu;
	public $Loai;
	public $NXDT;
	private $errors = [];

	public function getId()
	{
		return $this->STT;
	}

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function fill(array $data)
	{
		if (isset($data['HocKy'])) {
			$this->HocKy = trim($data['HocKy']);
		}

		if (isset($data['NienKhoa'])) {
			$this->NienKhoa = trim($data['NienKhoa']);
		}

		if (isset($data['TenDeTai'])) {
			$this->TenDeTai = trim($data['TenDeTai']);
		}

		if (isset($data['NoiDung'])) {
			$this->NoiDung = trim($data['NoiDung']);
		}

		if (isset($data['HoTenCB'])) {
			$this->HoTenCB = trim($data['HoTenCB']);
		}
		if (isset($data['GhiChu'])) {
			$this->GhiChu = trim($data['GhiChu']);
		}

		if (isset($data['Loai'])) {
			$this->Loai = trim($data['Loai']);
		}
		if (isset($data['NXDT'])) {
			$this->NXDT = trim($data['NXDT']);
		}
		return $this;
	}
		
	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{	

		if (strlen($this->HoTenCB) > 255 ) {
			$this->errors['HoTenCB'] = '';
		}


		if (strlen($this->TenDeTai) > 255 ) {
			$this->errors['TenDeTai'] = '';
		}

		if (strlen($this->HocKy) > 255 ) {
			$this->errors['HocKy'] = '';
		}

		if (strlen($this->NienKhoa) > 255 ) {
			$this->errors['NienKhoa'] = '';
		}

		if (strlen($this->NoiDung) > 255 ) {
			$this->errors['NoiDung'] = '';
		}


		if (strlen($this->GhiChu) > 255) {
			$this->errors['GhiChu'] = '';
		}

		if (strlen($this->Loai) > 255) {
			$this->errors['Loai'] = '';
		}

		if (strlen($this->NXDT) > 255) {
			$this->errors['NXDT'] = '';
		}

		return empty($this->errors);
	}


	public function all() 
	{ 
		$detais = []; 
		$stmt = $this->db->prepare('select detais.TenDeTai, detais.NoiDung, tt_gv.HoTenCB, detais.GhiChu, detais.HocKy, detais.NienKhoa, detais.Loai, detais.NXDT, detais.STT
									from detais
									inner join tt_gv on detais.MSCB = tt_gv.MSCB'); 
		$stmt->execute(); 
		$row = $stmt->fetch();
			$detai = new Detai($this->db); 
			$detai->fillFromDB($row); 
			$detais[] = $detai; 
		
		return $detais; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
		  'STT' => $this->STT, 
		//'MSSV' => $this->MSSV,
		// 'HoTen' => $this->HoTen,
		  'HocKy' => $this->HocKy, 
		  'NienKhoa' => $this->NienKhoa, 
		  'TenDeTai' => $this->TenDeTai, 
		  'NoiDung' => $this->NoiDung, 
		  'HoTenCB' => $this->HoTenCB,
		  'GhiChu' => $this->GhiChu,
		  'Loai' => $this->Loai,
		  'NXDT' => $this->NXDT

		] = $row; 
		return $this; 
	}

	
	public function save() 
	{ 
		$result = false; 
		
		if ($this->STT >= 0) { 
			$stmt = $this->db->prepare('update detais set Loai = :Loai, TenDeTai = :TenDeTai, NoiDung = :NoiDung
					 where STT = :STT'); 
			$result = $stmt->execute([ 
				 
				'Loai' => $this->Loai,
				'TenDeTai' => $this->TenDeTai,
				'NoiDung' => $this->NoiDung,
				'STT' => $this->STT]); 
			} else { 
				$stmt = $this->db->prepare( 
					'insert into detais (Loai,TenDeTai, NoiDung) 
					values (:Loai,:TenDeTai,:NoiDung)'); 
				$result = $stmt->execute([ 
					'Loai' => $this->Loai, 
					'TenDeTai' => $this->TenDeTai,
					'NoiDung' => $this->NoiDung,
				]); 
				if ($result) { 
					$this->SST = $this->db->lastInsertId(); 
				} 
			}
			
			return $result; 
		}

		public function find($STT) 
		{ 
			$stmt = $this->db->prepare('select * from detais where STT = :STT'); 
			$stmt->execute(['STT' => $STT]); 
			
			if ($row = $stmt->fetch()) { 
				$this->fillFromDB($row); 
				return $this; 
			}
			
			return null; 
		
		}
		
		public function update(array $data) 
		{ 
			$this->fill($data); 
			if ($this->validate()) { 
				return $this->save(); 
			}
			return false; 
		}

}
