<?

require_once("./Building.php");

class Tower extends Building{
	
	private $elevator;
	private $arc_capacity;
	private $height;

	public function hasElevator()
	{
		return $this->elevator;
	}

	public function setElevator($elevator)
	{
		$this->elevator = $elevator;

		return $this;
	}

	public function getArcCapacity()
	{
		return $this->arc_capacity;
	}

	public function setArcCapacity($arc_capacity)
	{
		$this->arc_capacity = $arc_capacity;

		return $this;
	}
 
	public function getHeight()
	{
		return $this->height;
	}

	public function setHeight($height)
	{
		$this->height = $height;

		return $this;
	}

	public function getFloorHeight() : float{
		return $this->height / $this->floors;
	}

	public function toString(): string
	{
		
		$str = parent::toString();
	    $props = [
			"Elevator : " . ($this->elevator ? '+' : '-'),
			"Arc reactor capacity : " . $this->arc_capacity,
			"Height : " . $this->height,
			"Floor height : " . $this->getFloorHeight()
		];

		foreach ($props as $p)
			$str = $str . $p . "\n";
		return $str;
	}
}


// $StarkTower= new Tower(93, "Different", "Manhattan, NY");$StarkTower->setElevator(true);
// $StarkTower->setArcCapacity(70);
// $StarkTower->setHeight(1130);
// echo $StarkTower->toString();