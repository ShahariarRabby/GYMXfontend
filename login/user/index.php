<?php include "userpartial/head.php" ?>

<div class="container">
    <div class="row userprofile">
        <?php include "userpartial/profilesummery.php" ?>
        <div class="col-lg-9 col-md-8 col-12" id="usercotent">
            <div class="spacer">
                <div id="tabs">
                    <?php include "userpartial/taboption.php" ?>
                    <div id="tabs-1">

<?php 
    if(isset($_GET['source'])){
        $source= $_GET['source'];
        switch($source){
            case 1:
                include "userpartial/edituser.php" ;
                break;               
            default:
                include "userpartial/showuser.php" ;
                break;
        } 
    }else{
        include "userpartial/showuser.php" ;
    }
?>
                    </div>
                    <?php include "userpartial/tab2.php" ?>
                    <?php include "userpartial/tab3.php" ?>
                    <?php include "userpartial/tab4.php" ?>
                    <?php include "userpartial/tab5.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "userpartial/footer.php" ?>