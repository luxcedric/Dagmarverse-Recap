<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dg_user;
use App\Models\dg_coach;
use App\Models\dg_goals;
use App\Models\dg_themes;
use App\Models\dg_time;
use App\Models\dg_usersetgoal;
use App\Models\dg_userwatchedcontentfromcoach;
use App\Models\dg_userwatchedthemes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // All Users in dg_userSeeder.txt seeded into the db
        $userData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_userSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($userData)) {
            $newUserData = explode(";", fgets($userData));
            
            $newUser= new dg_user;
            $newUser->dg_registration= $newUserData[1];
            $newUser->dg_name= $newUserData[2];
               
            $newUser->save();
        }
        fclose($userData);

        // All Creators in dg_creatorSeeder.txt seeded into the db
        $coachData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_coachSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($coachData)) {
            $newCoachData = explode(";", fgets($coachData));
            
            $newCoach= new dg_coach;
            $newCoach->dg_name= $newCoachData[1];
            
            $newCoach->save();
        }
        fclose($coachData);

        // All Genres in dg_genreSeeder.txt seeded into the db
        $themeData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_themeSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($themeData)) {
            $newThemeData = explode(";", fgets($themeData));
            
            $newtheme= new dg_themes;
            $newtheme->dg_name= $newThemeData[1];
            
            $newtheme->save();
        }
        fclose($themeData);

        
        // All Goals in dg_goalsSeeder.txt seeded into the db
        $goalsData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_goalsSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($goalsData)) {
            $newGoalsData = explode(";", fgets($goalsData));

            $newGoal= new dg_goals;
            $newGoal->dg_name= $newGoalsData[1];
            $newGoal->dg_prio= $newGoalsData[2];
            $newGoal->dg_beschreibung= $newGoalsData[3];
            $newGoal->dg_bild_URL= $newGoalsData[4];
            
            $newGoal->save();
        }
        fclose($goalsData);

        // All Contents in dg_contentSeeder.txt seeded into the db
        $timeData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_timeSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($timeData)) {
            $newtimeData = explode(";", fgets($timeData));
            
            $newContent= new dg_time;
            $newContent->dg_jan= $newtimeData[1];
            $newContent->dg_feb= $newtimeData[2];
            $newContent->dg_mar= $newtimeData[3];
            $newContent->dg_apr= $newtimeData[4];
            $newContent->dg_mai= $newtimeData[5];
            $newContent->dg_jun= $newtimeData[6];
            $newContent->dg_jul= $newtimeData[7];
            $newContent->dg_aug= $newtimeData[8];
            $newContent->dg_sep= $newtimeData[9];
            $newContent->dg_okt= $newtimeData[10];
            $newContent->dg_nov= $newtimeData[11];
            $newContent->dg_dez= $newtimeData[12];
            
            $newContent->save();
        }
        fclose($timeData);

        // All Content-Genre-Relations in dg_contenthasgenreSeeder.txt seeded into the db
        $usersetgoalData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_usersetgoalSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($usersetgoalData)) {
            $newContentHasGenreData = explode(";", fgets($usersetgoalData));
            $newContentHasGenre= new dg_usersetgoal;
            print_r($newContentHasGenreData);
            $newContentHasGenre->dg_goalID= $newContentHasGenreData[2];
            $newContentHasGenre->dg_userID= $newContentHasGenreData[1];
            
            $newContentHasGenre->save();
        }
        fclose($usersetgoalData);

        // All User-Genre-Relations in dg_userwatchedGenreSeeder.txt seeded into the db
        $userWatchedGenreData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_userwatchedcontentfromCoachSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($userWatchedGenreData)) {
            $newUserWatchedGenreData = explode(";", fgets($userWatchedGenreData));
            
            $newUserWatchedGenre= new dg_userwatchedcontentfromcoach;
            $newUserWatchedGenre->dg_timewatched= $newUserWatchedGenreData[1];
            $newUserWatchedGenre->dg_userID= $newUserWatchedGenreData[2];
            $newUserWatchedGenre->dg_coachID= $newUserWatchedGenreData[3];
            
            $newUserWatchedGenre->save();
        }
        fclose($userWatchedGenreData);

        // All User-Genre-Relations in dg_userwatchedGenreSeeder.txt seeded into the db
        $userwatchedthemes = fopen(dirname(__FILE__)."\..\..\SeederData\dg_userwatchedthemesSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($userwatchedthemes)) {
            $newUserWatchedthemesData = explode(";", fgets($userwatchedthemes));
            
            $newUserWatchedGenre= new dg_userwatchedthemes;
            $newUserWatchedGenre->dg_timewatched= $newUserWatchedthemesData[1];
            $newUserWatchedGenre->dg_userID= $newUserWatchedthemesData[2];
            $newUserWatchedGenre->dg_themesID= $newUserWatchedthemesData[3];
            
            $newUserWatchedGenre->save();
        }
        fclose($userwatchedthemes);

    }
}
