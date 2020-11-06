<?php
require "dbconnection/db.php";
$conn = dbconnect();
$sql = "SELECT * FROM bills";
$sql1 = "SELECT * FROM flat_and_parking_details";
$result = mysqli_query($conn,$sql);
$count_generate = 0;
$count_update = 0;
if(mysqli_num_rows($result)>0)
{
    $row = mysqli_fetch_assoc($result);
    $commoncharges = $row["CommonCharges"];
    $watercharges = $row["WaterCharges"];
    $sinkingfund = $row["SinkingFund"];
    $buildingrepairfund = $row["BuildingRepairFund"];
    $twowheelercharges = $row["twowheelerParkingCharges"];
    $fourwheelercharges = $row["fourwheelerParkingCharges"];
    $insurance = $row["InsurancePremium"];
    $others = $row["Others"];
}

$result = mysqli_query($conn,$sql1);

if(mysqli_num_rows($result)>0)
{
    while($row1 = $result->fetch_assoc())
  {

    $flataddress = $row1["FlatAddress"];
    $flatowner = $row1["FlatOwner"];
    $cmn_charges = $commoncharges * $row1["FlatArea(sqft)"];
    $twowheeler_charges = $twowheelercharges * $row1["2-Wheelers"];
    $fourwheeler_charges = $fourwheelercharges * $row1["4-Wheelers"];

    $sql2 = "SELECT * from remainingbills where FlatAddress = '$flataddress'";
    $result1 = mysqli_query($conn,$sql2);

    if(mysqli_num_rows($result1)>0)
    {
        $row2 = mysqli_fetch_assoc($result1);
        $duebills = $row2["DueBills"];
        $current_total = $cmn_charges + $watercharges + $sinkingfund + $buildingrepairfund + $twowheeler_charges + $fourwheeler_charges + $insurance + $others;
        $total = $current_total + $duebills;

        $mydate=getdate(date("U"));
        $current = $mydate[month]."-".$mydate[year];
        $seen_status = 0;

        $sql5 = "SELECT * from paymenthistory where MonthandYear='$current' and FlatOwner='$flatowner'";
        $result4 = mysqli_query($conn,$sql5);
        if(mysqli_num_rows($result4)==0){
        $sql3 = "INSERT INTO duebills
        VALUES ('$current','$flataddress', '$flatowner', '$cmn_charges','$watercharges','$sinkingfund','$buildingrepairfund','$twowheeler_charges',
        '$fourwheeler_charges','$insurance','$others','$duebills','$total','$seen_status')";

        if(mysqli_query($conn,$sql3)){
            echo "Duebills Generated Successfully";
            $count_generate = $count_generate + 1;


                $sql4 = "UPDATE remainingbills SET DueBills = '$total' WHERE FlatAddress='$flataddress'";

                if(mysqli_query($conn,$sql4)){
                echo "remainingbills Updated Successfully";
                $count_update = $count_update + 1;

                }
                else{
                echo "remainingbills Updation failed";
                }
        
        }
    }
        else{
            echo "Duebills Generation Failed";
        }
                                
    }


  }
  if($count_generate == $count_update && $count_generate>0 )
  header("Location:generatebillsuccess.php");

  else
  header("Location:generatebillfailure.php");
}
?>