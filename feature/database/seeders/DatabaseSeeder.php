<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\dg_user;
use App\Models\dg_content;
use App\Models\dg_userwatchedgenre;
use App\Models\dg_contenthasgenre;
use App\Models\dg_creator;
use App\Models\dg_genre;

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
            $newUser->dg_points= $newUserData[3];
            $newUser->dg_formergoals= $newUserData[5];
            $newUser->dg_time_jan= $newUserData[6];
            $newUser->dg_time_feb= $newUserData[7];
            $newUser->dg_time_mar= $newUserData[8];
            $newUser->dg_time_apr= $newUserData[9];
            $newUser->dg_time_may= $newUserData[10];
            $newUser->dg_time_jun= $newUserData[11];
            $newUser->dg_time_jul= $newUserData[12];
            $newUser->dg_time_aug= $newUserData[13];
            $newUser->dg_time_sep= $newUserData[14];
            $newUser->dg_time_oct= $newUserData[15];
            $newUser->dg_time_nov= $newUserData[16];
            $newUser->dg_time_dec= $newUserData[17];
            
            $newUser->save();
        }
        fclose($userData);

        // All Creators in dg_creatorSeeder.txt seeded into the db
        $creatorData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_creatorSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($creatorData)) {
            $newCreatorData = explode(";", fgets($creatorData));
            
            $newCreaor= new dg_creator;
            $newCreaor->dg_name= $newCreatorData[1];
            
            $newCreaor->save();
        }
        fclose($creatorData);

        // All Genres in dg_genreSeeder.txt seeded into the db
        $genreData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_genreSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($genreData)) {
            $newGenreData = explode(";", fgets($genreData));
            
            $newGenre= new dg_genre;
            $newGenre->dg_name= $newGenreData[1];
            
            $newGenre->save();
        }
        fclose($genreData);

        // All Contents in dg_contentSeeder.txt seeded into the db
        $contentData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_contentSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($contentData)) {
            $newContentData = explode(";", fgets($contentData));
            
            $newContent= new dg_content;
            $newContent->dg_name= $newContentData[1];
            $newContent->dg_creatorID= $newContentData[2];
            
            $newContent->save();
        }
        fclose($contentData);

        // All Content-Genre-Relations in dg_contenthasgenreSeeder.txt seeded into the db
        $contentHasGenreData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_contenthasgenreSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($contentHasGenreData)) {
            $newContentHasGenreData = explode(";", fgets($contentHasGenreData));
            $newContentHasGenre= new dg_contenthasgenre;
            $newContentHasGenre->dg_contentID= $newContentHasGenreData[1];
            $newContentHasGenre->dg_genreID= $newContentHasGenreData[2];
            
            $newContentHasGenre->save();
        }
        fclose($contentHasGenreData);

        // All User-Genre-Relations in dg_userwatchedGenreSeeder.txt seeded into the db
        $userWatchedGenreData = fopen(dirname(__FILE__)."\..\..\SeederData\dg_userwatchedgenreSeeder.txt", "r") or die("Unable to open file!");

        while(!feof($userWatchedGenreData)) {
            $newUserWatchedGenreData = explode(";", fgets($userWatchedGenreData));
            
            $newUserWatchedGenre= new dg_userwatchedgenre;
            $newUserWatchedGenre->dg_timewatched= $newUserWatchedGenreData[1];
            $newUserWatchedGenre->dg_userID= $newUserWatchedGenreData[2];
            $newUserWatchedGenre->dg_genreID= $newUserWatchedGenreData[3];
            
            $newUserWatchedGenre->save();
        }
        fclose($userWatchedGenreData);


    }
}
