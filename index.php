<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import csv data</title>
    <style>
        .center {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
            top:50%;
            margin-top:10%;
            }
            button{
                float:right;
            }
    </style>
</head>
<body>
    <img src="./cloudems-logo.png" alt="" srcset="">
    <div class="center">
    <?php

if(isset($_POST['submit']) && is_uploaded_file($_FILES['filename']['tmp_name'])){
    // echo "<script>alert('inside sumbit');</script>";
    // Connect to the database
    $connection = mysqli_connect("localhost", "root", "", "icloudems");

   // Open the uploaded file
    $handle = fopen($_FILES['filename']['tmp_name'], "r");

    // Skip the first five rows
    // fgetcsv($handle, 1000, ",", 5);

        // // Skip the first three rows
        // for ($i = 0; $i < 5; $i++) {
        //     fgetcsv($handle, 1000, ",", "'");
        // }

    $skip = 0;
    
    // Loop through each line of the file
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

        if($skip != 0 && $skip != 1 && $skip != 2 && $skip != 3 && $skip != 4 && $skip != 5){
        // echo "<script>alert('data');</script>";

        // Escape the data and insert it into the table
        $sr = mysqli_real_escape_string($connection, $data[0]);
        $date = mysqli_real_escape_string($connection, $data[1]);
        $academic_year = mysqli_real_escape_string($connection, $data[2]);
        $session = mysqli_real_escape_string($connection, $data[3]);
        $alloted_category = mysqli_real_escape_string($connection, $data[4]);
        $voucher_type = mysqli_real_escape_string($connection, $data[5]);
        $voucher_no = mysqli_real_escape_string($connection, $data[6]);
        $roll_no = mysqli_real_escape_string($connection, $data[7]);
        $adminno_uniqueid = mysqli_real_escape_string($connection, $data[8]);
        $status = mysqli_real_escape_string($connection, $data[9]);
        $fee_category = mysqli_real_escape_string($connection, $data[10]);
        $faculty = mysqli_real_escape_string($connection, $data[11]);
        $program = mysqli_real_escape_string($connection, $data[12]);
        $department = mysqli_real_escape_string($connection, $data[13]);
        $batch = mysqli_real_escape_string($connection, $data[14]);
        $receipt_no = mysqli_real_escape_string($connection, $data[15]);
        $fee_head = mysqli_real_escape_string($connection, $data[16]);
        $due_amount = mysqli_real_escape_string($connection, $data[17]);
        $paid_amount = mysqli_real_escape_string($connection, $data[18]);
        $concession_amount = mysqli_real_escape_string($connection, $data[19]);
        $scholarship_amount = mysqli_real_escape_string($connection, $data[20]);
        $reverse_concession_amount = mysqli_real_escape_string($connection, $data[21]);
        $write_off_amount = mysqli_real_escape_string($connection, $data[22]);
        $adjusted_amount = mysqli_real_escape_string($connection, $data[23]);
        $refund_amount = mysqli_real_escape_string($connection, $data[24]);
        $fund_trancfer_amount = mysqli_real_escape_string($connection, $data[25]);
        $remarks = mysqli_real_escape_string($connection, $data[26]);

        $query = "INSERT INTO bulk_ledger (`Sr`, `Date`, `Academic Year`,`Session`,`Alloted Category`,
        `Voucher Type`,`Voucher No.`,`Roll No.`,`Admno/UniqueId`,`Status`,`Fee Category`,`Faculty`,`Program`,`Department`,`Batch`,
        `Receipt No.`,`Fee Head`,`Due Amount`,`Paid Amount`,`Concession Amount`,`Scholarship Amount`,`Reverse Concession Amount`,
        `Write Off Amount`,`Adjusted Amount`,`Refund Amount`,`Fund TranCfer Amount`,`Remarks`) VALUES ('$sr', '$date','$academic_year',
        '$session','$alloted_category','$voucher_type','$voucher_no','$roll_no','$adminno_uniqueid','$status','$fee_category','$faculty',
        '$program','$department','$batch','$receipt_no','$fee_head','$due_amount','$paid_amount','$concession_amount','$scholarship_amount',
        '$reverse_concession_amount','$write_off_amount','$adjusted_amount','$refund_amount','$fund_trancfer_amount','$remarks')";
 
        mysqli_query($connection, $query) or die(mysqli_error($connection));
     
        }
        $skip++;
    }

    // Close the file
    fclose($handle);

    // Display a success message
    echo "File imported successfully.";
} else{
    ?>
          <form enctype='multipart/form-data' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
            <input type="file" name="filename" id="">
            <input type="submit" value="Upload" name="submit" style="float:right;">
            <!-- <button type="submit" >Upload file</button> -->
        </form>
  
    <?php
}

?>
      </div>
</body>
</html>