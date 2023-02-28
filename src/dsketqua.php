<?php

namespace CT271\Labs;

class dsketqua
{

	private $db;

	private $id = -1;
	public $HocKy;
	public $NienKhoa;
	public $MSSV;
	public $HoTen;
	public $TenDeTai;
	public $NoiDung;
	public $GhiChu;
	public $DiemSo;
	public $NhanXet;
	
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

		if (isset($data['DiemSo'])) {
			$this->DiemSo = trim($data['DiemSo']);
		}

		if (isset($data['NhanXet'])){
			$this->NhanXet = trim($data['NhanXet']);
		}
		if (isset($data['HocKy'])) {
			$this->HocKy = trim($data['HocKy']);
		}

		if (isset($data['NienKhoa'])) {
			$this->NienKhoa = trim($data['NienKhoa']);
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

		if ( $this->DiemSo >= 0 && $this->DiemSo <= 10) {
		}
		else{
			
			$this->errors['DiemSo'] = 'Điểm phải có giá trị từ 0 - 10';
		}

		if (strlen($this->NhanXet) > 255 ) {
			$this->errors['NhanXet'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->HocKy) > 255 ) {
			$this->errors['HocKy'] = '';
		}

		if (strlen($this->NienKhoa) > 255 ) {
			$this->errors['NienKhoa'] = '';
		}

		

		return empty($this->errors);
	}


	public function all() 
	{ 
		$dsdetais = []; 
		$stmt = $this->db->prepare('select *from dsdetais'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$dsdetai = new dsketqua($this->db); 
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
			'DiemSo' => $this->DiemSo,
			'NhanXet' => $this->NhanXet,
			'HocKy' => $this->HocKy, 
			'NienKhoa' => $this->NienKhoa  
			

		] = $row; 
		return $this; 
	}

	
	public function save() 
	{ 
			$result = false; 
			
			if ($this->id >= 0) { 
				$stmt = $this->db->prepare('update dsdetais set TenDeTai = :TenDeTai, NoiDung = :NoiDung, GhiChu = :GhiChu, DiemSo = :DiemSo, NhanXet = :NhanXet
						where id = :id'); 
				$result = $stmt->execute([ 
					
					'TenDeTai' => $this->TenDeTai,
					'NoiDung' => $this->NoiDung,
					'GhiChu' => $this->GhiChu,
					'DiemSo' => $this->DiemSo,
					'NhanXet' => $this->NhanXet,
	
					'id' => $this->id]); 
				} else { 
					$stmt = $this->db->prepare( 
						'insert into dsdetais (TenDeTai, NoiDung,GhiChu,DiemSo, NhanXet) 
						values (:TenDeTai,:NoiDung,:GhiChu,:DiemSo,:NhanXet)'); 
					$result = $stmt->execute([ 
						'TenDeTai' => $this->TenDeTai,
						'NoiDung' => $this->NoiDung,
						'GhiChu' => $this->GhiChu,
						'DiemSo' => $this->DiemSo,
						'NhannXet' => $this->NhanXet,

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


