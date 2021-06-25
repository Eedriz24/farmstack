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
                                <li class="breadcrumb-item active" aria-current="page">New Batch</li>
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
                                        <h5 class="card-title">New Batch</h5>
                                        <form>

                                        <div class="form-group">
                                                <label for="exampleFormControlSelect1">Batch Category</label>
                                                <select class="form-control custom-select" id="exampleFormControlSelect1">
                                                    <option>Poultry</option>
                                                    <option>Pigs</option>
                                                    <option>Fishry</option>
                                                    <option>Goat</option>
                                                    <option>Cattle</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Batch Name</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Batch">
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Breed</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Breed">
                                               
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Arrival Date</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Date">
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Number of Stock</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Save Date</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                                                    
                <?php include('includes/footer.inc.php'); ?>
    </body>
</html>