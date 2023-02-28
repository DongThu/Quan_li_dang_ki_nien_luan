<?php

namespace CT271\Labs;

class Info_gv_cn
{
	private $db;

	public $MSCB;
	public $HoTenCB;
	public $Email;
	public $sdt;
	public $NgayinhCB;
	public $GioiTinhCB;
	public $BoMon;
	public $ChuyenNganh;
    public $NamGiangDay;
    public $Khoa;

	private $errors = [];

	public function getId()
	{
		return $this->MSCB;
	}

	public function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function fill(array $data)
	{
		if (isset($data['MSCB'])) {
			$this->MSCB = trim($data['MSCB']);
		}

		if (isset($data['HoTenCB'])) {
			$this->HoTenCB = trim($data['HoTenCB']);
		}

		if (isset($data['Email'])) {
			$this->Email = trim($data['Email']);
		}

		if (isset($data['sdt'])) {
			$this->sdt = trim($data['sdt']);
		}

		if (isset($data['NgaySinhCB'])) {
			$this->NgaySinhCB = trim($data['NgaySinhCB']);
		}

		if (isset($data['GioiTinhCB'])) {
			$this->GioiTinhCB = trim($data['GioiTinhCB']);
		}

		if (isset($data['BoMon'])) {
			$this->BoMon = trim($data['BoMon']);
		}
		if (isset($data['ChuyenNganh'])) {
			$this->ChuyenNganh = trim($data['ChuyenNganh']);
		}
		if (isset($data['NamGiangDay'])) {
			$this->NamGiangDay = trim($data['NamGiangDay']);
		}
		if (isset($data['Khoa'])) {
			$this->Khoa = trim($data['Khoa']);
		}


		return $this;
	}
		
	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{	
		if (!$this->MSCB) {
			$this->errors['MSCB'] = 'Invalid name.';
		}
		if (strlen($this->HoTenCB) > 255 ) {
			$this->errors['HoTenCB'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->Email) > 255 ) {
			$this->errors['Email'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->sdt) > 255 ) {
			$this->errors['sdt'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->NgaySinhCB) > 255 ) {
			$this->errors['NgaySinhCB'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->GioiTinhCB) > 255 ) {
			$this->errors['GioiTinhCB'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->BoMon) > 255 ) {
			$this->errors['BoMon'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->ChuyenNganh) > 255 ) {
			$this->errors['ChuyenNganh'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->NamGiangDay) > 255) {
			$this->errors['NamGiangDay'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->Khoa) > 255) {
			$this->errors['Khoa'] = 'Notes must be at most 255 characters.';
		}

		return empty($this->errors);
	}


	public function all() 
	{ 
		$infos = []; 
		$stmt = $this->db->prepare('select * from tt_gv'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$ttgv = new Info_gv_cn($this->db); 
			$ttgv->fillFromDB($row); 
			$tt_gv[] = $ttgv; 
		}
		return $tt_gv; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
		  'MSCB' => $this->MSCB, 
		  'HoTenCB' => $this->HoTenCB, 
		  'Email'=>$this->Email,
		  'sdt'=>$this->sdt,
		  'NgaySinhCB' => $this->NgaySinhCB, 
		  'GioiTinhCB' => $this->GioiTinhCB, 
		  'BoMon' => $this->BoMon,
		  'ChuyenNganh' => $this->ChuyenNganh,
		  'NamGiangDay' => $this->NamGiangDay,
		  'Khoa' => $this->Khoa
		] = $row; 
		return $this; 
	}
}
