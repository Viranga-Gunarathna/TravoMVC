<?php

class Hotel extends Controller{

    function __construct()
    {
        parent::__construct();
    }

function index(){
    session_start();
    $this->view->isHotel = $this->model->selectHotel($_SESSION['username']);
    $this->view->render('hotel/hotel_home');
}
function availability(){
    session_start();
    $this->view->isHotel = $this->model->selectHotel($_SESSION['username']);
    //$this->view->users = $this->model->getData();
    $this->view->render('hotel/hotel_availability');
}
function faq(){
    session_start();
    $this->view->isHotel = $this->model->selectHotel($_SESSION['username']);
    $this->view->faq = $this->model->getFaq();
    $this->view->render('hotel/hotel_faq');
}
function hotelBooking(){
    session_start();
    $this->view->isHotel = $this->model->selectHotel($_SESSION['username']);
    $this->view->render('hotel/hotel_booking');
}
function hotelUpdate(){
    session_start();
    $this->view->isHotel = $this->model->selectHotel($_SESSION['username']);
    $this->view->render('hotel/hotel_update');
}
function updateHotel(){
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($this->model->selectHotel($_SESSION['username'])){
            $HotelDetails=$this->model->selectHotel($_SESSION['username']);
        }

        while ($rows = mysqli_fetch_array($HotelDetails)){
            $id=$rows['hotelID'];
            $name=$rows['name'];
            $regNo=$rows['regNo'];
            $licenceNo=$rows['licenceNo'];
            $address1=$rows['address_line1'];
            $address2=$rows['address_line2'];
            $city=$rows['city'];
            $location=$rows['location'];
            $email=$rows['email'];
            $contact1=$rows['contact1'];
            $contact2=$rows['contact2'];
            $description=$rows['description'];
            $webUrl=$rows['webUrl'];
            $password=$rows['password'];
            $hotelType=$rows['hotel_type'];
            $repName=$rows['rep_name'];
            $repEmail=$rows['rep_email'];
            $repContact1=$rows['rep_contact1'];
            $repContact2=$rows['rep_contact2'];

    }
        if(isset($_POST['submitbtn'])){
            $hotel_id=$id;
            $new_name=trim($_POST['name']);
            $new_regNo=trim($_POST['regNo']);
            $new_licenceNo=trim($_POST['licenceNo']);
            $new_address1=trim($_POST['address_line1']);
            $new_address2=trim($_POST['address_line2']);
            $new_city=trim($_POST['city']);
            $new_location=trim($_POST['location']);
            $new_email=trim($_POST['email']);
            $new_contact1=trim($_POST['contact1']);
            $new_contact2=trim($_POST['contact2']);
            $new_description=trim($_POST['description']);
            $new_webUrl=trim($_POST['webUrl']);
            $new_password=trim($_POST['password']);
            $new_hotelType=trim($_POST['hotel_type']);
            $new_repName=trim($_POST['rep_name']);
            $new_repEmail=trim($_POST['rep_email']);
            $new_repContact1=trim($_POST['rep_contact1']);
            $new_repContact2=trim($_POST['rep_contact2']);


            //check whether newly entered data is empty
 
            if(empty($new_name)){
                $new_name=$name;
            }
            if(empty($new_regNo)){
                $new_regNo=$regNo;
            }
            if(empty($new_licenceNo)){
                $new_licenceNo=$licenceNo;
            }
            if(empty($new_address1)){
                $new_address1=$address1;
            }
            if(empty($new_address2)){
                $new_address2=$address2;
            }
            if(empty($new_city)){
                $new_city=$city;
            }
            if(empty($new_location)){
                $new_location=$location;
            }
            if(empty($new_email)){
                $new_email=$email;
            }
            if(empty($new_contact1)){
                $new_contact1=$contact1;
            }
            if(empty($new_contact2)){
                $new_contact2=$contact2;
            }
            if(empty($new_description)){
                $new_description=$description;
            }
            if(empty($new_webUrl)){
                $new_webUrl=$webUrl;
            }
            if(empty($new_password)){
                $new_password=$password;
            }else{
                $new_password = password_hash($new_password, PASSWORD_DEFAULT);
            }
            if(empty($new_hotelType)){
                $new_hotelType=$hotelType;
            }
            if(empty($new_repName)){
                $new_repName=$repName;
            }
            if(empty($new_repEmail)){
                $new_repEmail=$repEmail;
            }
            if(empty($new_repContact1)){
                $new_repContact1=$repContact1;
            }
            if(empty($new_repContact2)){
                $new_repContact1=$repContact2;

            
            if($this->model->updateHotel($new_name,$new_regNo,$new_licenceNo,$new_address1,$new_address2,$new_city,$new_location,$new_email,$new_contact1,$new_contact2,$new_description,$new_webUrl,$new_password,$new_hotelType,$new_repName,$new_repEmail,$new_repContact1,$new_repContact2,$hotel_id)){
                header('location: '.URLROOT.'/hotel/hotel_update');   
            } else {
                die('Something went wrong.');
            }
            
        }
    }
    }
 }
 function logout() {
    session_start();
    session_unset();
    session_destroy();
    header('location: http://localhost/TRAVO');
}
}