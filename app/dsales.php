<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $title=""; include('includes/header.inc.php'); ?>
    </head>
    <body>
    
    <?php include('includes/headermenu.inc.php'); ?>

    <?php include('includes/appnav.inc.php'); ?>

    <div class="page-content">
                    <div class="page-info container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Livestock</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Daily Sales</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="main-wrapper container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Daily Sales</h5>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Egg Production</label>
                                                    <input type="number" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Egg Sold</label>
                                                    <input type="number" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Amount</label>
                                                    <input type="number" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Batch Number</label>
                                                    <input type="number" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>
   
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>

                                         
                <?php include('includes/footer.inc.php'); ?>
    </body>
</html>