<?php

namespace CT271\Labs;

class DSach
{
	private $db;

	private $STT = -1;
	public $HocKy;
	public $NienKhoa;
	public $MSSV;
	public $HoTen;
	public $TenDeTai;
	public $NoiDung;
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
		if (isset($data['MSSV'])) {
			$this->MSSV = trim($data['MSSV']);
		}

		if (isset($data['HoTen'])) {
			$this->HoTen = trim($data['HoTen']);
		}

		if (isset($data['TenDeTai'])) {
			$this->TenDeTai = trim($data['TenDeTai']);
		}

		if (isset($data['NoiDung'])) {
			$this->NoiDung = trim($data['NoiDung']);
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

		if (strlen($this->MSSV) > 255 ) {
			$this->errors['MSSV'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->HoTen) > 255 ) {
			$this->errors['HoTen'] = 'Notes must be at most 255 characters.';
		}



		if (strlen($this->TenDeTai) > 255 ) {
			$this->errors['TenDeTai'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->HocKy) > 255 ) {
			$this->errors['HocKy'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->NienKhoa) > 255 ) {
			$this->errors['NienKhoa'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->NoiDung) > 255 ) {
			$this->errors['NoiDung'] = 'Notes must be at most 255 characters.';
		}


		if (strlen($this->GhiChu) > 255) {
			$this->errors['GhiChu'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->Loai) > 255) {
			$this->errors['Loai'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->NXDT) > 255) {
			$this->errors['NXDT'] = 'Notes must be at most 255 characters.';
		}

		return empty($this->errors);
	}


	public function all() 
	{ 
		$detais = []; 
		$stmt = $this->db->prepare('select detais.TenDeTai, detais.NoiDung, tt_sv.MSSV, tt_sv.HoTen, detais.GhiChu, detais.HocKy, detais.NienKhoa, detais.Loai, detais.NXDT, detais.STT
									from detais
									inner join tt_sv on detais.MSSV = tt_sv.MSSV'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$ds= new DSach($this->db); 
			$ds->fillFromDB($row); 
			$detais[] = $ds; 
		}
		return $detais; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
			'HocKy' => $this->HocKy, 
			'NienKhoa' => $this->NienKhoa, 
			'STT' => $this->STT, 
			'MSSV' => $this->MSSV,
			'HoTen' => $this->HoTen,
			'TenDeTai' => $this->TenDeTai, 
			'NoiDung' => $this->NoiDung, 
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
			$stmt = $this->db->prepare('update detais set TenDeTai = :TenDeTai, NoiDung = :NoiDung, GhiChu = :GhiChu, NXDT = :NXDT
					 where STT = :STT'); 
			$result = $stmt->execute([ 
				 
				'TenDeTai' => $this->TenDeTai,
				'NoiDung' => $this->NoiDung,
				'GhiChu' => $this->GhiChu, 
				'NXDT' => $this->NXDT,  
				'STT' => $this->STT]); 
			} else { 
				$stmt = $this->db->prepare( 
					'insert into detais (TenDeTai, NoiDung,GhiChu,NXDT) 
					values (:TenDeTai,:NoiDung,:GhiChu,:NXDT)'); 
				$result = $stmt->execute([ 
					'TenDeTai' => $this->TenDeTai,
					'NoiDung' => $this->NoiDung,
					'GhiChu' => $this->GhiChu,
					'NXDT' => $this->NXDT
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
