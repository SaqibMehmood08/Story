<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Kreait\Firebase;
// use Kreait\Firebase\Factory;
// use Firebase\Auth\FirebaseAuth;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// require_once 'vendor/autoload.php';


class FirebaseController extends Controller
{

            public function TestInsert()
            {
            return view('amTesting');
            }


        public function returnView()
        {
        return view('firebasetest');

         }

         public function ShowData()
        {
            return view('Show_firebase_Data');

         }
         public function deleteFirebaseData()
        {
            return view('deleteFirebaseData');

         }
         public function updateFirebaseData()
        {
            return view('update_firebase');

         }







         public function index()
                {

                    $path = storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');

                    if (!file_exists($path)) {
                        die("File not found");
                    }

                    if (!is_readable($path)) {
                        die("File not readable");
                    }

                    $json = file_get_contents($path);

                    if (!$json) {
                        die("Unable to read file");
                    }



        $firebase = (new Factory)
            ->withServiceAccount($json)
            ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
                $database = $firebase->createDatabase();
                $reference = $database->getReference('users');
                    $saqib = ['name' => 'Zahid mehmood', 'age' => 47, 'email' => 'ZahidMehmod@gmail.com'];
                $reference->push($saqib);


            }





public function  fetchData()
{
    $path = storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');

        if (!file_exists($path)) {
            die("File not found");
        }

        if (!is_readable($path)) {
            die("File not readable");
        }

        $json = file_get_contents($path);

        if (!$json) {
            die("Unable to read file");
        }



$firebase = (new Factory)
    ->withServiceAccount($json)
    ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
        $database = $firebase->createDatabase();
        $reference = $database->getReference('users/');
        $allUsers = $reference->getValue();

        echo '<pre>';
        print_r($allUsers);
        echo '</pre>';


}

public function  UpdateData()
{
    $path = storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');


        $json = file_get_contents($path);

$firebase = (new Factory)
    ->withServiceAccount($json)
    ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
        $database = $firebase->createDatabase();
        $reference = $database->getReference('users/saqib');
        $reference->update([
            'email' => 'saqibMalik@example.com'
        ]);

        echo '<pre>';
        print_r($reference->getValue());


}
public function  DeleteData()
{
    $path = storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');


        $json = file_get_contents($path);

$firebase = (new Factory)
    ->withServiceAccount($json)
    ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
        $database = $firebase->createDatabase();
        $reference = $database->getReference('users/saqib');
        $reference->remove();

        echo '<pre>';
        print_r($reference->getValue());
        echo '</pre>';


}
// public function  DeleteDatawithCondition()
// {
//     $path = storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');


//         $json = file_get_contents($path);

// $firebase = (new Factory)
//     ->withServiceAccount($json)
//     ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
//         $database = $firebase->createDatabase();
//         $users = $database->getReference('users');
//         $email_query = $users->orderByChild('email')->equalTo('saqib2@example.com');
//         $email_query->once('value', function ($snapshot) use ($email_query) {
//             $snapshot->getValue();
//             foreach ($snapshot->getValue() as $key => $value) {
//                 $users->getChild($key)->remove();
//             }
//         });


//         echo '<pre>';
//         print_r($reference->getValue());
//         echo '</pre>';


// }
}

