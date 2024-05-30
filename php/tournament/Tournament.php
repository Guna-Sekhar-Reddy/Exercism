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

class Tournament
{
    public function __construct()
    {
        
    }

    public function tally($scores){
        $score_table=array("Team                           | MP |  W |  D |  L |  P");
        $line_length=strlen($score_table[0]);
        $team_scores=explode("\n",$scores);

        $table=array();

        foreach($team_scores as $team_score){
            if(!empty($team_score)){
            list($team1,$team2,$status)= explode(";",$team_score);
            switch($status){
                case "win" :
                    $teamA=array(1,1,0,0,3);
                    $teamB=array(1,0,0,1,0);
                    break;
                case "loss" :
                    $teamA=array(1,0,0,1,0);
                    $teamB=array(1,1,0,0,3);
                    break;
                case "draw" :
                    $teamA=array(1,0,1,0,1);
                    $teamB=$teamA;
                    break;
            }

                if (array_key_exists($team1, $table)) {
                    for ($i = 0; $i < 5; $i++) {
                        $table[$team1][$i] += $teamA[$i];
                    }
                } else {
                    $table[$team1] = $teamA;
                }

             if(array_key_exists($team2,$table)){
           for($i=0;$i<5;$i++){
            $table[$team2][$i]+=$teamB[$i];
           }
                 }
    else {
    $table[$team2]=$teamB;
    } 
            }
        }
                if (count($table) > 0) {
            ksort($table);
            arsort($table);
            foreach ($table as $key => $v) {
                $table_row = "|  {$v[0]} |  {$v[1]} |  {$v[2]} |  {$v[3]} |  {$v[4]}";
                $padding = str_repeat(" ", $line_length - (strlen($key) + strlen($table_row)));
                array_push($score_table, $key . $padding . $table_row);
            }            
        }
        return implode("\n", $score_table);
    }
 
}
