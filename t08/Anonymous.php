<?

function get_anonymous( ...$strings){
	return new class(...$strings) {
        private $name;
        private $alias;
        private $affiliation;

		function __construct(...$strings){
			$this->name = $strings[0];
			$this->alias =  $strings[1];
			$this->affiliation =  $strings[2];
		}
		public function getName()
        {
            return $this->name;
        }


        public function getAlias()
        {
                return $this->alias;
        }


        public function getAffiliation()
        {
                return $this->affiliation;
        }
    };
}


// $mandarin= get_anonymous("Unknown", "Mandarin", "Ten Rings");
// print(implode("\n", array("name"=> $mandarin->getName(),"alias"=> $mandarin->getAlias(),"affiliation"=> $mandarin->getAffiliation())));