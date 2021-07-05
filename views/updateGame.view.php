<?php require 'views/partials/header.php'?>

<div class="updater-view-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Update Game</h2>
                <p>Please edit the input values and submit to update the game record.</p>
                <form action="/updateGameValues?publisherID=<?= $publisherID; ?>&gameID=<?= $gameID; ?>" method="post">
                    <div class="form-group">
                        <label>Game's Name</label>
                        <input type="text" name="updatedGameName" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?= $name; ?>">
                        <span class="invalid-feedback"><?= $name_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Year Released</label>
                        <input type="text" name="updatedGameYear" class="form-control <?php echo (!empty($year_err)) ? 'is-invalid' : ''; ?>" value="<?= $year; ?>">
                        <span class="invalid-feedback"><?= $year_err; ?></span>
                    </div>
                    <div>
                        <label>Select Publisher</label>
                        <select name="updatedGamePublisher" class="form-select" aria-label="Default select example">
                            <option selected value="<?= $publisherID; ?>"><?= $publisherName; ?></option>
                            <?php foreach ($publishers as $publisher) : ?>
                            <option value="<?= $publisher->id; ?>"><?= $publisher->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary form1">Submit</button>
                    <a href="/games?publisherID=<?= $publisherID; ?>" class="btn btn-secondary ml-2 form1">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php' ?>
