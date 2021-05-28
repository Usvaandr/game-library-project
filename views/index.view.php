<?php require 'views/partials/header.php' ?>

<!--Main Content-->
    <div class="container">
        <div class="row">
            <h1>Games Library</h1>
            <h3>List of Publishers:</h3>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Publisher's Name</th>
                <th scope="col">Net Worth</th>
                <th scope="col">Country</th>
                <th scope="col">Year Founded</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($publishers as $publisher) : ?>
            <tr>
                <th scope="row"><?= $i++; ?>
                </th>
                <td><?= $publisher->name; ?></td>
                <td><?= $publisher->value; ?></td>
                <td><?= $publisher->country; ?></td>
                <td><?= $publisher->founded; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
<!--Submit Form-->
        <div class="form1">
        <form method="POST" action="/addPublisher">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPublisher" class="col-form-label">Add new Publisher:</label>
                </div>
                <div class="col-auto">
                    <input name="newPublisher" id="inputPublisher" placeholder="Publisher's name" class="form-control">
                </div>
                <div class="col-auto">
                    <input name="newPublisherValue" id="inputPublisher" placeholder="Net Worth" class="form-control">
                </div>
                <div class="col-auto">
                    <input name="newPublisherCountry" id="inputPublisher" placeholder="Country" class="form-control">
                </div>
                <div class="col-auto">
                    <input name="newPublisherFounded" id="inputPublisher" placeholder="Year Founded" class="form-control">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
        </div>
    </div>

<?php require 'views/partials/footer.php' ?>

<!--<ul class="list-group">-->
<!--    --><?php //foreach ($publishers as $publisher) : ?>
<!--        <li class="list-group-item"> echo $publisher->name; </li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
