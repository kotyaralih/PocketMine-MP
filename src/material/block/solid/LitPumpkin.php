<?php

/**
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

class LitPumpkinBlock extends SolidBlock{
	public function __construct($meta = 0){
		parent::__construct(LIT_PUMPKIN, $meta, "Jack o'Lantern");
		$this->hardness = 5;
	}

    public function place(Item $item, Player $player, Block $block, Block $target, $face, $fx, $fy, $fz){
        $faces = array(
            0 => 1,
            1 => 2,
            2 => 3,
            3 => 0,
        );
        $this->meta = $faces[$player->entity->getDirection()];
        $this->level->setBlock($block, $this, true, false, true);
        return true;
    }
}