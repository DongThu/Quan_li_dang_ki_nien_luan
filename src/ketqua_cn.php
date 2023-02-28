<?php

namespace CT271\Labs;

class ketqua_cn
{

	private $db;

	private $STT = -1;
	public $MSSV;
	public $DiemSo;
	public $NhanXet;
	public $HoTen;
	
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

		if (isset($data['MSSV'])) {
			$this->MSSV = trim($data['MSSV']);
		}
				
		if (isset($data['DiemSo'])) {
			$this->DiemSo = trim($data['DiemSo']);
		}


		if (isset($data['NhanXet'])){
			$this->NhanXet = trim($data['NhanXet']);
		}

		if (isset($data['HoTen'])) {
			$this->HoTen = trim($data['HoTen']);
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
		if ( $this->DiemSo >= 0 && $this->DiemSo <= 10) {
		}
		else{
			
			$this->errors['DiemSo'] = 'Điểm phải có giá trị từ 0 - 10';
		}

		if (strlen($this->NhanXet) > 255 ) {
			$this->errors['NhanXet'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->HoTen) > 255 ) {
			$this->errors['HoTen'] = 'Notes must be at most 255 characters.';
		}


		return empty($this->errors);
	}


	public function all() 
	{ 
		$ketquas = []; 
		$stmt = $this->db->prepare('select ketquas.STT, ketquas.MSSV, ketquas.DiemSo, ketquas.NhanXet, tt_sv.HoTen   
									from ketquas
									inner join tt_sv on ketquas.MSSV = tt_sv.MSSV'); 
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
		  'STT' => $this->STT, 
		  'MSSV' => $this->MSSV, 
		  'DiemSo' => $this->DiemSo,
		  'NhanXet' => $this->NhanXet,
		  'HoTen' => $this->HoTen
		] = $row; 
		return $this; 
	}

	
	public function save() 
	{ 
		$result = false; 
		
		if ($this->STT >= 0) { 
			$stmt = $this->db->prepare('update ketquas set DiemSo = :DiemSo, NhanXet = :NhanXet
					 where STT = :STT'); 
			$result = $stmt->execute([ 
				'DiemSo' => $this->DiemSo,
				'NhanXet' => $this->NhanXet,
				'STT' => $this->STT]); 
			} else { 
				$stmt = $this->db->prepare( 
					'insert into ketquas (DiemSo, NhanXet) 
					values (:DiemSo,:NhanXet)'); 
				$result = $stmt->execute([ 
					'DiemSo' => $this->DiemSo,
					'NhannXet' => $this->NhanXet,
				]); 
				if ($result) { 
					$this->SST = $this->db->lastInsertId(); 
				} 
			}
			
			return $result; 
		}

		public function find($STT) 
		{ 
			$stmt = $this->db->prepare('select * from ketquas where STT = :STT'); 
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

