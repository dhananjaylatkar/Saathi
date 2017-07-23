<?php require('include/header.php'); ?>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-8 text-left">
            <h1><?php echo(($currpage?ucfirst($currpage):'Welcome'));?></h1>
                <?php include('/include/'.($currpage?$currpage:'welcome').'.html'); ?>            
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <hr>
                <h3>Test</h3>
                <p>Lorem ipsum...</p>

            </div>
            
            <div class="col-sm-2 sidenav">
                <div class="well">
                    <p>A Quote</p>
                </div>
                <div class="well">
                    <p>Another info box</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
alert("<?php console.log(explode("/Saathi",$_SERVER['REQUEST_URI'])[1]); ?>");
</script>
</html>