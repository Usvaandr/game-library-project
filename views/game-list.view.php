<?php require 'views/partials/header.php'?>

    <div class="container">
        <div class="row">
            <h1>Games Library</h1>
            <h3>List of <strong><?=$publisherName; ?></strong> games:</h3>
        </div>
<!--    Printed data table-->
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Game's Name</th>
                    <th scope="col">Year Released</th>
                    <th scope="col">Publisher ID (Reference)</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($games as $game) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?>
                        </th>
                        <td><?= $game->name; ?></td>
                        <td><?= $game->year; ?></td>
                        <td><?= $game->publisherID; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
<!--    Submit Form-->
        <div class="row">
            <form method="POST" action="/">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputGame" class="col-form-label">Add new Game:</label>
                    </div>
                    <div class="col-auto">
                        <input name="newGameName" id="inputGame" placeholder="name" class="form-control">
                    </div>
                    <div class="col-auto">
                        <input name="newGameYear" id="inputGame" placeholder="year" class="form-control">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require 'views/partials/footer.php' ?>
