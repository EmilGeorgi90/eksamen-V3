<?php
$row = $_SESSION["search"];
for($i = 0; $i < count($row); $i++){
    
    //takes the input from $row into the tables;    
    ?>
    <articel class="articel justify-content-between d-flex flex-wrap flex-grow ">
            <img src="<?php echo $row[$i][ 'imgSrc']?>" alt="
                      <?php echo $row[$i][ 'imgAlt']?>" class="articel-img">
            <h2 class="articel-title col-12">
                <?php echo $row[$i][ 'overskrift']?>
            </h2>

            <p class="articel-p col-12">
                <?php for($j = 0; $j < $row[$i][ 'rating']; $j++){
            echo "<i class='fa fa-star star' aria-hidden='true'></i>";
            }
            if($j < 5){
                    for ($k = $j; $k < 5; $k++){
                        echo '<i class="fa fa-star-o" aria-hidden="true"></i>';
        }} ?>
                <div>
            </p>
            <p class="articel-p">oprettet:
                <?php echo $row[$i][ 'timestamp']?> af
                <?php echo $row[$i][ 'username']?>

            </p>

            <p class="articel-p">
                <?php echo $row[$i][ 'articleText']?>
                <br>
                <a class="læs-mere" href="#">læs mere</a>
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
        </articel>
        <?php
                        
                    }
                    ?>
