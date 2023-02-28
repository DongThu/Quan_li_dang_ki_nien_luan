<?php

namespace CT271\Labs;

class ketqua_cn
{
	private $db;

    private $STT = -1;
	public $NhanXet;
	public $BaiNop;
	public $DiemSo;
    public $DiemChu;

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
		if (isset($data['NhanXet'])) {
			$this->NhanXet = trim($data['NhanXet']);
		}

		if (isset($data['BaiNop'])) {
			$this->BaiNop = trim($data['BaiNop']);
		}

        if (isset($data['DiemSo'])) {
			$this->DiemSo = trim($data['DiemSo']);
		}
        if (isset($data['DiemChu'])) {
			$this->DiemChu = trim($data['DiemChu']);
		}

		return $this;
	}
		
	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{	
		if (!$this->NhanXet) {
			$this->errors['NhanXet'] = 'Invalid name.';
		}
		if (strlen($this->BaiNop) > 255 ) {
			$this->errors['HoTen'] = 'Notes must be at most 255 characters.';
		}
        if (strlen($this->DiemSo) > 255 ) {
			$this->errors['DiemSo'] = 'Notes must be at most 255 characters.';
		}
        if (strlen($this->DiemChu) > 255 ) {
			$this->errors['DiemChu'] = 'Notes must be at most 255 characters.';
		}
		return empty($this->errors);
	}


	public function all() 
	{ 
		$ketquas = []; 
		$stmt = $this->db->prepare('select * from ketquas'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$kq = new ketqua_cn($this->db); 
			$kq->fillFromDB($row); 
			$ketquas[] = $kq; 
		}
		return $ketquas; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
		  'NhanXet' => $this->NhanXet, 
		  'BaiNop' => $this->BaiNop,
          'DiemSo' => $this->DiemSo,
          'DiemChu' => $this->DiemChu 
		] = $row; 
		return $this; 
	}
	public function save() 
	{ 
		$result = false; 
		
		if ($this->STT >= 0) { 
			$stmt = $this->db->prepare('update detais set MSSV = :MSSV,
					 HoTen = :HoTen, TenDeTai = :TenDeTai, NoiDung = :NoiDung, GhiChu = :GhiChu 
					 where STT = :STT'); 
			$result = $stmt->execute([ 
				'MSSV' => $this->MSSV, 
				'HoTen' => $this->HoTen, 
				'TenDeTai' => $this->TenDeTai,
				'NoiDung' => $this->NoiDung,
				'GhiChu' => $this->GhiChu,   
				'STT' => $this->STT]); 
			} else { 
				$stmt = $this->db->prepare( 
					'insert into detais (MSSV, HoTen, TenDeTai, NoiDung, GhiChu) 
					values (:MSSV, :HoTen, :TenDeTai,:NoiDung ,:GhiChu)'); 
				$result = $stmt->execute([ 
					'MSSV' => $this->MSSV, 
					'HoTen' => $this->HoTen, 
					'TenDeTai' => $this->TenDeTai,
					'NoiDung' => $this->NoiDung,
					'GhiChu' => $this->GhiChu]); 
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
