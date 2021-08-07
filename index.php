<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<body>




    <div class="container mt-5">

        <!-- Display any info -->

        <!-- 新增完顯示通知 -->
        
        
        <?php if($_REQUEST['info']=='added'){ ?>
          
            <div class="alert alert-success" role="alert">
                Post has been added successfully
            </div>
       
    <?php }else if ($_REQUEST['info']=='update' ){ ?>
            <div div class="alert alert-success" >
                Post has been updated successfully
            </div>
        <?php }else if($_REQUEST['info']=='delete'){ ?>

            <div class="alert alert-danger">
                Post has been deleted successfully
            </div>

        <?php } ?>

      
        



        <!-- Create a new Post button -->

        <!-- 新增一欄的連結 -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>         <!-- 這裡的$query代表選取DB裡面的data資料表以$value為參數-->
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 18rem;">
                        <div class="card-body" style="width:18rem">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>                    <!-- 從$q裡面拿到title依序陣列 -->

                            <p>
                            <?php 
                                if(strlen($q['content'])>12){                  
                                echo substr($q['content'],0,12)?>...... 
                            <?php 
                                }else{
                                echo $q['content'];
                                }?>
                            </p>


                           
                            
                            
                                             <!-- 從$q裡面拿到content依序陣列 -->
                            <a href="view.php?id=<?php echo $q['id'];?>" class="btn btn-light">Read More</a>    <!-- 從$q裡面拿到id依序陣列丟到網址上面來做view也面的變數-->
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


