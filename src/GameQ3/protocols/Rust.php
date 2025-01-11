<?php
/**
 * This file is part of GameQ3.
 *
 * GameQ3 is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * GameQ3 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


namespace GameQ3\protocols;


// Players array is unusable, as it consists of "hidden"-0 rows for each player.

class Rust extends \GameQ3\Protocols\Source {
	protected $name = "rust";
	protected $name_long = "Rust";

	protected $query_port = 28016;
	protected $connect_port = 28015;
	//protected $ports_type = self::PT_DIFFERENT_NONCOMPUTABLE_VARIABLE;

	
	public function init() {
		$this->forceRequested('settings', true);
		
		$this->forceRequested('players', false);
		$this->result->setIgnore('players', true);

		parent::init();
	}
	
	protected function _process_details($packets) {
		parent::_process_details($packets);
	
		if ($keywords = $this->result->getGeneral("keywords")) {
			preg_match_all('/(mp|cp|qp)([\d]+)/', $keywords, $matches);
			$this->result->addGeneral('max_players', intval($matches[2][0]));
			$this->result->addGeneral('num_players', intval($matches[2][1]));
			$this->result->addGeneral('q_players', intval($matches[2][2]));
		}
	}
}
