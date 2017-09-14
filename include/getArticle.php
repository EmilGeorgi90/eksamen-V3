<?php
include "connect.php";
$j;
//select all from db
                    $sql = "SELECT * FROM articles ORDER BY id desc";
//prepare the sql statement
$stmt = $conn->prepare($sql);
//executes the sql statement
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$row = $stmt->fetchAll();

//while there are text in array
                    for($i = 0; $i < count($row); $i++){
//takes the input from $row into the tables;    
?>
    <articel class="articel justify-content-between d-flex flex-wrap flex-grow ">
        <div class="card card-info">
            <img class="card-img-top" src="<?php echo $row[$i][ 'imgSrc']?>" alt="
                      <?php echo $row[$i][ 'imgAlt']?>" class="articel-img">
            <div class="card-block p-0">
                <div class="card-text-top">
                <h4 class="card-title">
                    <?php echo $row[$i][ 'overskrift']?>
                </h4>
                <p class="articel-p col-12">
                    <?php for($j = 0; $j < $row[$i][ 'rating']; $j++){
            echo "<i class='fa fa-star star' aria-hidden='true'></i>";
            }
            if($j < 5){
                    for ($k = $j; $k < 5; $k++){
                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
        }} ?>
                </p>
                </div>
                <div class="article-text col-12">
                <div class="card-text col-12">
                    <?php echo $row[$i]['timestamp']." af ". $row[$i]['username']?>
                    <br>
                    <?php print_r($row[$i][ 'articleText'])?>
                </div>
            

            <a class="læs-mere" href="#">Læs mere</a>
            <div class="rediger">



                <?php 
    //check if the cookies is set
                            if(isset($_COOKIE[$cookie_name])){
                                //checking if the username are the same as blogger
            if($row[$i]['username'] == $_COOKIE[$cookie_name] || $_COOKIE["userLevel"] > 1)
    {
        //the delete form        
        ?>
                <form action="include/delete.php" method="post">
                    <input type="" name="overskrift" hidden value="<?php echo $row[$i]['overskrift'] ?>">
                    <input type="submit" value="delete"> </form>

                <?php
            //if userlevel is bigger then 1 then you can delete anyway
                    }}
            ?>
            </div>
            </div>
            </div>
        </div>
    </articel>
    <?php
                        
                    }
                    ?>
