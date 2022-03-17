



SELECT COUNT(`order`.orderid) as 'NO.ofOrder', SUM(orderprotb.normalprice) as 'total_sales_amount' FROM `order`  JOIN orderprotb on `order`.orderid=orderprotb.orderid 


public function actionAddRewardReward_points($sales_id)
    {
        $query = "SELECT * FROM sales_tb WHERE id = '$sales_id' AND status = 'Complete'";
        $db = $this->db();
        $result=mysqli_query($db,$query);
        if($result != false)
        {
           $row=mysqli_fetch_row($result);
           $curr = $row[2];
           $price = $row[3];
           if($curr == 'USD')
           {
            $points = $price;
           }
           else
            $points = $this->usd_convert($curr,$price);
           
           $exp_date=date('Y-m-d', strtotime('+1 year'));

           $sql_insert_querry = "INSERT INTO reward_tb(sales_id,points,expirydate,points_unused) VALUES('$sales_id','$points','$exp_date','$points')";                       //unused_points is set same as points on insert. Later subtracted after every use until 0.

           $reward_result=mysqli_query($db,$sql_insert_querry);

           if($reward_result)
            echo 'Inserted Successfully';
            else
                echo 'Failed';
        }
        else
            echo 'Order Not Found';
    }

         protected function usd_convert($price,$curr)
        {
            if($curr == 'INR')
                $price = round($price*0.013,2);
            else if($curr == 'MYR')
                $price = round($price*0.24,2);
            else if($curr == 'EUR')
                $price = round($price*1.13,2);
            return $price;
        }  


    protected function db()
    {
        $servername = "localhost";
        $database = "reward_system";
        $username = "root";
        $password = "";
        $charset = "utf8mb4";

        try {

        $con = mysqli_connect($servername,$username,$password,$database);

        
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }

        return $con;

        }

        catch (PDOException $e)

        {
        echo 'Connection failed: '. $e->getMessage();
        }
    }



   
   
 