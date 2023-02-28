<?php

namespace CT271\Labs;

class Info_sv_cn
{
	private $db;

	public $MSSV;
	public $HoTen;
	public $Email;
	public $sdt;
	public $Ngayinh;
	public $GioiTinh;
	public $Lop;
	public $NganhHoc;
    public $KhoaHoc;
    public $Khoa;

	private $errors = [];

	public function getId()
	{
		return $this->MSSV;
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

		if (isset($data['Email'])) {
			$this->Email = trim($data['Email']);
		}

		if (isset($data['sdt'])) {
			$this->sdt = trim($data['sdt']);
		}

		if (isset($data['NgaySinh'])) {
			$this->TenDeTai = trim($data['NgaySinh']);
		}

		if (isset($data['GioiTinh'])) {
			$this->NoiDung = trim($data['GioiTinh']);
		}

		if (isset($data['Lop'])) {
			$this->GhiChu = trim($data['Lop']);
		}
		if (isset($data['NganhHoc'])) {
			$this->GhiChu = trim($data['NganhHoc']);
		}
		if (isset($data['KhoaHoc'])) {
			$this->GhiChu = trim($data['Khoa']);
		}
		if (isset($data['Khoa'])) {
			$this->GhiChu = trim($data['Khoa']);
		}


		return $this;
	}
		
	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{	
		if (!$this->MSSV) {
			$this->errors['MSSV'] = 'Invalid name.';
		}
		if (strlen($this->HoTen) > 255 ) {
			$this->errors['HoTen'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->NgaySinh) > 255 ) {
			$this->errors['NgaySinh'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->GioiTinh) > 255 ) {
			$this->errors['GioiTinh'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->Lop) > 255 ) {
			$this->errors['Lop'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->NganhHoc) > 255 ) {
			$this->errors['NganhHoc'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->KhoaHoc) > 255) {
			$this->errors['KhoaHoc'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->Khoa) > 255) {
			$this->errors['Khoa'] = 'Notes must be at most 255 characters.';
		}

		return empty($this->errors);
	}


	public function all() 
	{ 
		$infos = []; 
		$stmt = $this->db->prepare('select * from tt_sv'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$info = new Info_sv_cn($this->db); 
			$info->fillFromDB($row); 
			$tt_sv[] = $info; 
		}
		return $tt_sv; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
		  'MSSV' => $this->MSSV, 
		  'HoTen' => $this->HoTen,
		  'Email' => $this->Email,
		  'sdt' => $this->sdt, 
		  'NgaySinh' => $this->NgaySinh, 
		  'GioiTinh' => $this->GioiTinh, 
		  'Lop' => $this->Lop,
		  'NganhHoc' => $this->NganhHoc,
		  'KhoaHoc' => $this->KhoaHoc,
		  'Khoa' => $this->Khoa
		] = $row; 
		return $this; 
	}
}
