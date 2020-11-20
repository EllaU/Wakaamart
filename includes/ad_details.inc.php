<?php

   
    
 

    class Product{
        public $getId;
        public $getName;
        public $getDes;
        public $getCurrency;
        public $getPrice;
        public $getWeight;
        public $getDate;
        public $getLocation;
        public $getDelivery;
        public $getStatus;
        public $getCategory;
        public $getCondition;
        public $getMID;
        public $getFeatures;
        public $getPic;

       function __construct($getId){
            $this->getId = $getId;
            $this->setProductName();
            $this->getProductName();
            $this->getDes();
            $this->getFeatures();
            $this->getCurrency();
            $this->getPrice();
            $this->getWeight();
            $this->getDate();
            $this->getLocation();
            $this->getDelivery();
            $this->getStatus();
            $this->getCategory();
            $this->getPic();

            $this->getCondition();
            $this->getMID();

       }

       function setProductName(){
        include 'database.inc.php';

        $sql = "select * from product where id='$this->getId';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
    
        if($resultCheck>0){
            if($row=mysqli_fetch_assoc($result)){
                $this->getName = $row['pname'];
                $this->getDes = $row['description'];
                $this->getCurrency = $row['currency'];
                $this->getPrice = $row['price'];
                $this->getWeight = $row['weight'];
                $this->getDate = $row['dat'];
                $this->getLocation = $row['location'];
                $this->getDelivery = $row['delivery'];
                $this->getStatus = $row['stat'];
                $this->getCategory = $row['category'];
                $this->getCondition = $row['condi'];
                $this->getMId = $row['mid'];
                $this->getFeatures = $row['feature'];
                $this->getPic = $row['pic'];
                

                // exit();
            }
        }else{
            echo "null";
            exit();
        }
       }

       function getProductName(){
           return $this->getName;
       }
       function getFeatures(){
        return $this->getFeatures;
    }
        function getDes(){
            return $this->getDes;
        }
        function getCurrency(){
            return $this->getCurrency;
        }
        function getPrice(){
            return $this->getPrice;
        }
        function getWeight(){
            return $this->getWeight;
        }
        function getDate(){
            $t = $this->getDate;
            return date("d-m-y",$t);
        }
        function getLocation(){
            return $this->getLocation;
        }
        function getDelivery(){
            return $this->getDelivery;
        }
        function getStatus(){
            if($this->getStatus=="1"){
                return "Valid";
            }   
             
        }
        function getPic(){
            return $this->getPic;
        }
        function getCategory(){
            include  'database.inc.php';
            $sql ="select * from category where id='$this->getCategory';";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            return $row['name'];
        } 
        function getCondition(){
            return $this->getCondition;
        } 
        function getMId(){
            return $this->getMId;
        }

    }

    
       if(isset($_POST['submit'])){
        $cName = $_POST["cName"];
        $cEmail = $_POST['cEmail'];
        header("Location:https://wa.me/$mPhone?text=I'm%20$cName%20and%20I'm%20interested%20in%20your%20$pName%20for%20sale");
        exit();
    }
?>


