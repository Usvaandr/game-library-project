<?php require 'views/partials/header.php'?>

<div class="updater-view-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Update Publisher</h2>
                <p>Please edit the input values and submit to update the publisher record.</p>
                <form action="/updatePublisherValues?publisherID=<?= $publisherID; ?>" method="post">
                    <div class="form-group">
                        <label>Publisher's Name</label>
                        <input type="text" name="updatedPublisherName" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?= $name; ?>">
                        <span class="invalid-feedback"><?php echo $name_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Net Worth</label>
                        <input type="text" name="updatedPublisherValue" class="form-control <?php echo (!empty($value_err)) ? 'is-invalid' : ''; ?>" value="<?= $value; ?>">
                        <span class="invalid-feedback"><?php echo $value_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="updatedPublisherCountry" class="form-control <?php echo (!empty($country_err)) ? 'is-invalid' : ''; ?>" value="<?= $country; ?>">
                        <span class="invalid-feedback"><?php echo $country_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Year Founded</label>
                        <input type="text" name="updatedPublisherFounded" class="form-control <?php echo (!empty($founded_err)) ? 'is-invalid' : ''; ?>" value="<?= $year; ?>">
                        <span class="invalid-feedback"><?php echo $founded_err;?></span>
                    </div>
                    <button type="submit" class="btn btn-primary form1">Submit</button>
                    <a href="/" class="btn btn-secondary ml-2 form1">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php' ?>
