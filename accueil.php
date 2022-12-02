<?php
    session_start();

    if(!isset($_SESSION['id']) && !isset($_SESSION['mdp'])){
        $_SESSION['erreurConnect']=false;
        header("location: connect_id.php");
    }else{
      include 'header.php';
        ?>
<body>
    <?php include 'fond.php'; ?>
    <?php include 'navbar.php';?>
</body>
</html>

<?php
include 'footer.php';
        }
?>
