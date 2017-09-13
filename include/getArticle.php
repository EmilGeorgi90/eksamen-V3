<?php
include "connect.php";
//select all from db
                    $sql = "SELECT * FROM articles ORDER BY id desc";
//prepare the sql statement
$stmt = $conn->prepare($sql);
//executes the sql statement
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$_SESSION["articleName"] = $row = $stmt->fetchAll();

//while there are text in array
                    for($i = 0; $i < count($row); $i++){
//takes the input from $row into the tables;    
$_SESSION["currentCard"][$i] = $row[$i];
?>
    <articel class="articel"> 

        <h2 class="articel-title">product title: <?php echo $row[$i][ 'overskrift']?></h2>
        <hr class="style14">
        <div>
        <p class="articel-p">kategori:
            <?php echo $row[$i][ 'kategori']?>
        </p>
        <p class="articel-p">rating:
            <?php echo $row[$i][ 'rating']?>
        </p>
        <p class="articel-p">card description:
            <?php echo $row[$i][ 'articleText']?>
        </p>
        <p class="articel-p">uploaded:
            <?php echo $row[$i][ 'timestamp']?>
        </p>
        <p class="articel-p">forfatter:
            <?php echo $row[$i][ 'username']?>
        </p>
        </div>
        
        <img src="<?php echo $row[$i][ 'imgSrc']?>" alt="
                      <?php echo $row[$i][ 'imgAlt']?>" class="articel-img">
        <?php 
    //check if the cookies is set
                            if(isset($_COOKIE[$cookie_name])){
                                //checking if the username are the same as blogger
            if($row[$i]['username'] == $_COOKIE[$cookie_name] || $_COOKIE["userLevel"] > 1)
    {
        //the delete form        
        ?>
            <form action="include/delete.php" method="post" class="form-control">
                <input type="text" name="cardName" hidden value="<?php echo $row[$i]['overskrift'] ?>">  
                <input type="submit" value="delete" class="submit"> </form>
                <div class="">
                <button class="submit" value="update">update
              
            <?php
            //if userlevel is bigger then 1 then you can delete anyway
                    }}
            ?>
    </articel>
    <?php
                        
                    }
                    ?>