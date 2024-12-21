<?php include_once("header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="images/<?php echo $fetch->image ?>" alt="">
        </div>
       <div class="col-md-6 ml-4 pt-4 border">
            <form action="" method="post">
                <div class="form-group">
                    <h1>Title:  <?php echo $fetch->Name ?></h1>
                </div>
                <div class="form-group">
                    <h1>Product Type:   <?php echo $fetch->Types ?></h1>
                </div>
                <div class="form-group">
                    <h1>Product Type:   <?php echo $fetch->Price ?></h1>
                </div>
                <div class="form-group">
                   <label for="qty"><h1>Product Qty</h1></label>
                   <input type="number" name="qty" id="qty" class="form-control">
                </div>
                <div class="form-group">
                   <label for="address"><h1>Product Address</h1></label>
                   <textarea name="address" id="address" cols="20" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Place Order" class="btn-primary" name="submit">
                </div>
            </form>
       </div>
    </div>
</div>

<?php include_once("footer.php"); ?>