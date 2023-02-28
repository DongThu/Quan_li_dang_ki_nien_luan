<?php

namespace CT271\Labs;

class LOPPHUTRACH
{
	private $db;

	private $id = -1;
	public $MaHP;
	public $TenHP;
	public $KyHieu;
	public $HocKy;
	public $NienKhoa;
	public $danhsach;

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

		if (isset($data['MaHP'])) {
			$this->MaHP = trim($data['MaHP']);
		}

		if (isset($data['TenHP'])) {
			$this->TenHP = trim($data['TenHP']);
		}

		if (isset($data['KyHieu'])) {
			$this->KyHieu = trim($data['KyHieu']);
		}

		if (isset($data['HocKy'])) {
			$this->HocKy = trim($data['HocKy']);
		}

		if (isset($data['NienKhoa'])) {
			$this->NienKhoa = trim($data['NienKhoa']);
		}

		if (isset($data['danhsach'])) {
			$this->danhsach = trim($data['danhsach']);
		}
		return $this;
	}
		
	public function getValidationErrors()
	{
		return $this->errors;
	}

	public function validate()
	{	

		if (strlen($this->MaHP) > 255 ) {
			$this->errors['MaHP'] = 'Notes must be at most 255 characters.';
		}
		if (strlen($this->TenHP) > 255 ) {
			$this->errors['TenHP'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->KyHieu) > 255 ) {
			$this->errors['KyHieu'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->HocKy) > 255 ) {
			$this->errors['HocKy'] = 'Notes must be at most 255 characters.';
		}


		if (strlen($this->NienKhoa) > 255) {
			$this->errors['NienKhoa'] = 'Notes must be at most 255 characters.';
		}

		if (strlen($this->danhsach) > 255) {
			$this->errors['danhsach'] = 'Notes must be at most 255 characters.';
		}

		

		return empty($this->errors);
	}


	public function all() 
	{ 
		$lopphutrach = []; 
		$stmt = $this->db->prepare('select *from lopphutrach'); 
		$stmt->execute(); 
		while ($row = $stmt->fetch()) { 
			$lpt = new LOPPHUTRACH($this->db); 
			$lpt->fillFromDB($row); 
			$lopphutrach[] = $lpt; 
		}
		return $lopphutrach; 
	}

	protected function fillFromDB(array $row) 
	{ 
		[ 
		  	'id' => $this->id, 
			'MaHP' => $this->MaHP,
			'TenHP' => $this->TenHP,
			'KyHieu' => $this->KyHieu, 
			'HocKy' => $this->HocKy, 
			'NienKhoa' => $this->NienKhoa,
			'danhsach' => $this->danhsach

		] = $row; 
		return $this; 
	}

	
}
