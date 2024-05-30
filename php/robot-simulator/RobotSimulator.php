<?php

/*
 * By adding type hints and enabling strict type checking, code can become
 * easier to read, self-documenting and reduce the number of potential bugs.
 * By default, type declarations are non-strict, which means they will attempt
 * to change the original type to match the type specified by the
 * type-declaration.
 *
 * In other words, if you pass a string to a function requiring a float,
 * it will attempt to convert the string value to a float.
 *
 * To enable strict mode, a single declare directive must be placed at the top
 * of the file.
 * This means that the strictness of typing is configured on a per-file basis.
 * This directive not only affects the type declarations of parameters, but also
 * a function's return type.
 *
 * For more info review the Concept on strict type checking in the PHP track
 * <link>.
 *
 * To disable strict typing, comment out the directive below.
 */
declare(strict_types=1);
class Robot
{
    public const DIRECTION_NORTH = 'north';
    public const DIRECTION_EAST  = 'east';
    public const DIRECTION_SOUTH = 'south';
    public const DIRECTION_WEST  = 'west';
    public const POSITION_X = 0;
    public const POSITION_Y = 1;
    /**
     *
     * @var int[]
     */
    protected $position;
    /**
     *
     * @var string
     */
    protected $direction;
    public function __construct(array $position, string $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
    }
    public function __get($name)
    {
        if ($name === 'direction') {
            return $this->direction;
        }
        if ($name === 'position') {
            return $this->position;
        }
    }
    public function turnRight(): self
    {
        if ($this->direction === Robot::DIRECTION_NORTH) {
            $this->direction = Robot::DIRECTION_EAST;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_EAST) {
            $this->direction = Robot::DIRECTION_SOUTH;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_SOUTH) {
            $this->direction = Robot::DIRECTION_WEST;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_WEST) {
            $this->direction = Robot::DIRECTION_NORTH;
            return $this;
        }
        return $this;
    }
    public function turnLeft(): self
    {
        if ($this->direction === Robot::DIRECTION_NORTH) {
            $this->direction = Robot::DIRECTION_WEST;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_WEST) {
            $this->direction = Robot::DIRECTION_SOUTH;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_SOUTH) {
            $this->direction = Robot::DIRECTION_EAST;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_EAST) {
            $this->direction = Robot::DIRECTION_NORTH;
            return $this;
        }
        return $this;
    }
    public function advance(): self
    {
        if ($this->direction === Robot::DIRECTION_NORTH) {
            $this->position[Robot::POSITION_Y]++;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_SOUTH) {
            $this->position[Robot::POSITION_Y]--;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_EAST) {
            $this->position[Robot::POSITION_X]++;
            return $this;
        }
        if ($this->direction === Robot::DIRECTION_WEST) {
            $this->position[Robot::POSITION_X]--;
            return $this;
        }
        
        return $this;
    }
    
    public function instructions(string $instructions): self
    {
        $instructionsArray = str_split($instructions);
        array_map(
            function ($instruction) {
                if (!in_array($instruction, ['L', 'R', 'A'])) {
                    throw new InvalidArgumentException('Invalid instruction supplied: ' . $instruction);
                }
            },
            $instructionsArray
        );
        foreach($instructionsArray as $instruction) {
            if ($instruction === 'L') {
                $this->turnLeft();
            }
            if ($instruction === 'R') {
                $this->turnRight();
            }
            if ($instruction === 'A') {
                $this->advance();
            }
        }
        
        return $this;
    }   
}
 
