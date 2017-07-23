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
                <?php if(!@include('include/'.($currpage?$currpage:'welcome').'.html')) include('include/404.html'); ?>            
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
<script src="http://<?php echo($rooturi); ?>js/jquery.min.js"></script>
<script src="http://<?php echo($rooturi); ?>js/bootstrap.min.js"></script>
<script>
// alert("<?php echo(explode("/Saathi",$_SERVER['REQUEST_URI'])[1]); ?>");
</script>
</html>