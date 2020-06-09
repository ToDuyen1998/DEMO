<?php
class CongNhan{
	private $nhancong;
	function __construct($nhancong)
	{
		$this->nhancong = $nhancong;
	}
	public function Sort()
	{
		for($i=0; $i<sizeof($this->nhancong)-1; $i++){
			for($j=$i; $j<sizeof($this->nhancong); $j++){
				if($this->nhancong[$i]['speed'] > $this->nhancong[$j]['speed']){
					$temp = $this->nhancong[$i];
					$this->nhancong[$i] = $this->nhancong[$j];
					$this->nhancong[$j] = $temp;
				}
			}
		}
	}
	public function Show()
	{
		$j=1;
		for ($i=0; $i < sizeof($this->nhancong); $i = $i+2) {
			echo "Cặp "."<br>1. Họ Tên:".$this->nhancong[$i]['name']." - Tốc Độ: ".$this->nhancong[$i]['speed']."<br>2. Họ Tên: ".$this->nhancong[$i+1]['name']." - Tốc Độ: ".$this->nhancong[$i+1]['speed']."<br>Tốc Độ Cặp: ".$this->nhancong[$i]['speed']."<br>=================<br>";
		}
	}
}
?>
<?php 
	$nhancong = array(
		array('name' => "cong nhan 1", 'speed' => 10),
		array('name' => "cong nhan 2", 'speed' => 20),
		array('name' => "cong nhan 3", 'speed' => 30),
		array('name' => "cong nhan 3", 'speed' => 40),
		array('name' => "cong nhan 3", 'speed' => 50),
		array('name' => "cong nhan 4", 'speed' => 60),
		array('name' => "cong nhan 5", 'speed' => 60),
		array('name' => "cong nhan 6", 'speed' => 80),
		array('name' => "cong nhan 7", 'speed' => 90),
		array('name' => "cong nhan 8", 'speed' => 100),
		array('name' => "cong nhan 9", 'speed' => 110),
		array('name' => "cong nhan 10", 'speed' => 120),
		array('name' => "cong nhan 11", 'speed' => 130),
		array('name' => "cong nhan 12", 'speed' => 140),
		array('name' => "cong nhan 13", 'speed' => 150),
		array('name' => "cong nhan 14", 'speed' => 160),
	);
	$temp = new CongNhan($nhancong);
	$temp->Sort();
	$temp->Show();
?>