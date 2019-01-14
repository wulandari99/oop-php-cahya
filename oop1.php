<?php

class orang {
	public $nama = 'cahya wulandari'
	public $jeniskelamin;

	public function minum()
	{
		return $this->nama.' sedang minum <br>';

	}

}
$saya = new orang;
$saya->nama = 'cahya wulandar';
echo $saya->minum();

$saya->nama = 'wulan'
echo $saya->makan();