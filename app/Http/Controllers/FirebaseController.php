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





        // return view('yourview', ['data' => $data]);

     // // $serviceAccount = ServiceAccount::fromJson($json);

        // $firebase = (new Factory)
        //     ->withServiceAccount($json)
        //     ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');

        // $database = $firebase->createDatabase();

        // $blog = $database->getReference('blog');

        // $data = $blog->getValue();
        // $path = 'storage\app\firebase\banolive-35958-firebase-adminsdk-djawo-6301bc4297.json';
// $json = file_get_contents($path);
// $serviceAccount = json_decode($json);

    }
// }




                // $factory = (new Factory)->withServiceAccount(storage_path('storage/app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json'));

        // $path='storage\app\firebase\banolive-35958-firebase-adminsdk-djawo-6301bc4297.json';
        // $json = file_get_contents($path);
        // $serviceAccount = json_decode($json);

        // $firebase = (new Factory)
        //     ->withServiceAccount($serviceAccount)
        //     ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
        // $database = $firebase->createDatabase();

        // $blog = $database
        // ->getReference('blog');

        // echo '<pre>';
        // print_r($blog->getvalue());
        // echo '</pre>';
    // }
    // public function checkConnection()
    // {
    //     try {
    //         $firebase = FirebaseAuth::getInstance();

    //         if ($firebase->isAuth()) {
    //             return "Connection to Firebase services is established";
    //         } else {
    //             return "Error connecting to Firebase services";
    //         }
    //     } catch (\Exception $e) {
    //         return $e->getMessage();
    //     }
    // }
    public function checkDatabase(){



        // $factory = (new Factory)->withServiceAccount(storage_path('storage/app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json'));

    // if (!file_exists(storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json'))) {
    //     throw new Exception('Service account key not found');
    // }
    // else{

    //     $path='storage/app/firebase/banolive-35958-firebase-adminsdk-djawo-9d64489daf.json';
    //         $firebase = (new Factory)
    //             ->withServiceAccount($path)
    //             ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');







    // $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'storage/app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');
    // $firebase = (new Factory)->withServiceAccount($serviceAccount)->create();

    // // Check if we are able to connect to Firebase
    // try {
    //     $database = $firebase->getDatabase();
    //     echo 'Connection to Firebase established';
    // } catch (\Kreait\Firebase\Exception\Auth\InvalidAuthConfig $e) {
    //     echo 'Invalid credentials in service account configuration';
    // } catch (\Kreait\Firebase\Exception\Auth\AuthError $e) {
    //     echo 'An error occurred while trying to authenticate with the Firebase service account';
    // } catch (\Kreait\Firebase\Exception\ApiException $e) {
    //     echo 'An error occurred while communicating with the Firebase API: ' . $e->getMessage();
    // }




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
public function  DeleteDatawithCondition()
{
    $path = storage_path('app/firebase/banolive-35958-firebase-adminsdk-djawo-6301bc4297.json');


        $json = file_get_contents($path);

$firebase = (new Factory)
    ->withServiceAccount($json)
    ->withDatabaseUri('https://banolive-35958-default-rtdb.firebaseio.com/');
        $database = $firebase->createDatabase();
        $users = $database->getReference('users');
        $email_query = $users->orderByChild('email')->equalTo('saqib2@example.com');
        $email_query->once('value', function ($snapshot) use ($email_query) {
            $snapshot->getValue();
            foreach ($snapshot->getValue() as $key => $value) {
                $users->getChild($key)->remove();
            }
        });


        echo '<pre>';
        print_r($reference->getValue());
        echo '</pre>';


}
}

