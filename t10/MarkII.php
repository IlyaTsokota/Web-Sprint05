<?

require_once("./Update.php");

class MarkII{
	use Update;
 	public $arr = array('2 x Repulsors', 'M134 7.62mm Minigun', '2 x FN F2000 Tacticals', 'Sidewinder"Ex-Wife" Self-Guided Missile','24 Shotgun', 'Milkor MGL 40mm Grenade Launcher');

	 public function makeBoom(){
		 return $this->arr[0];
	 }
}