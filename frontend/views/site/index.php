<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
<script LANGUAGE="JavaScript">
//window.print();
</script>
    <div class="jumbotron">
        <h1>Scanner Movil Admin Site!</h1>

        <p class="lead">Here you can see and explore your data.</p>

        <p><a class="btn btn-lg btn-success" href="product"">Manage your products</a></p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>How im doing it today</h2>
                <p>In this seccion you can explore you scanned products for the current day, this can change in real time 
				so you may want to refresh this page to see the if there are any change.</p>
                <p><a class="btn btn-lg btn-success" href="/scanner/index.php?r=product/index">See products &raquo;</a></p><!-- btn btn-default -->
            </div>
            <div class="col-lg-4">																										
                <h2>See Historical data</h2>
                <p>In this section you can see all scanned products, with time this section can grow big, ask you administrator
                   to delete some data if necessary.</p>
                <p><a class="btn btn-lg btn-success" href="scanned_products">See all scanned &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Not defined</h2>
                <p>This section its just in case a new idea want to be implemented.</p>
                <p><a class="btn btn-default" href="product">In developmet;</a></p>
            </div>
        </div>
    </div>
</div>