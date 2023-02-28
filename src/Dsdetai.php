<?php

namespace CT271\Labs;

class Dsdetai
{
	private $db;

	private $id = -1;
	public $MSSV;
	public $HoTen;
	public $TenDeTai;
	public $NoiDung;
	public $GhiChu;
	public $DiemSo;
	public $NhanXet;
	public $NXDT;
	private $errors = [];

	public function getId()
	{
		return $this->id;
	}

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function fill(array $data)
	{

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

		if (strlen($this->NoiDung) > 255 ) {
			$this->errors['NoiDung'] = 'Notes must be at most 255 characters.';
		}


		if (strlen($this->GhiChu) > 255) {
			$this->errors['GhiChu'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->NXDT) > 255) {
			$this->errors['NXDT'] = 'Notes must be at most 255 characters.';
		}

		

		return empty($this->errors);
	}


	public function all() 
	{ 
		$dsdetais = []; 
		$stmt = $this->db->prepare('select *from dsdetais'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$dsdetai = new Dsdetai($this->db); 
			$dsdetai->fillFromDB($row); 
			$dsdetais[] = $dsdetai; 
		}
		return $dsdetais; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
		  	'id' => $this->id, 
			'MSSV' => $this->MSSV,
			'HoTen' => $this->HoTen,
			'TenDeTai' => $this->TenDeTai, 
			'NoiDung' => $this->NoiDung, 
			'GhiChu' => $this->GhiChu,
			'NXDT' => $this->NXDT

		] = $row; 
		return $this; 
	}

	
	public function save() 
	{ 
		$result = false; 
		
		if ($this->id >= 0) { 
			$stmt = $this->db->prepare('update dsdetais set MSSV = :MSSV, HoTen = :HoTen, TenDeTai = :TenDeTai, NoiDung = :NoiDung, GhiChu = :GhiChu, NXDT = :NXDT
					 where id = :id'); 
			$result = $stmt->execute([ 
				'MSSV' => $this->MSSV,
				'HoTen' => $this->HoTen,
				'TenDeTai' => $this->TenDeTai,
				'NoiDung' => $this->NoiDung,
				'GhiChu' => $this->GhiChu,
				'NXDT' => $this->NXDT, 
   
				'id' => $this->id]); 
			} else { 
				$stmt = $this->db->prepare( 
					'insert into dsdetais (MSSV, HoTen, TenDeTai, NoiDung, GhiChu) 
					values (:MSSV,:HoTen,:TenDeTai,:NoiDung,:GhiChu)'); 
				$result = $stmt->execute([ 
					'MSSV' => $this->MSSV,
					'HoTen' => $this->HoTen,
					'TenDeTai' => $this->TenDeTai,
					'NoiDung' => $this->NoiDung,
					'GhiChu' => $this->GhiChu

				]); 
				if ($result) { 
					$this->id = $this->db->lastInsertId(); 
				} 
			}
			
			return $result; 
		}

		public function find($id) 
		{ 
			$stmt = $this->db->prepare('select * from dsdetais where id = :id'); 
			$stmt->execute(['id' => $id]); 
			
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
		public function delete() 
		{ 
			$stmt = $this->db->prepare('delete from dsdetais where id = :id'); 
			return $stmt->execute(['id' => $this->id]); 
		}
}
