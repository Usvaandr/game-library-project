<?php require 'views/partials/header.php' ?>

<!--Main Content-->
    <div class="container">
        <div class="row">
            <h1>Games Library</h1>
            <h3>List of Publishers:</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">First Publisher</li>
                <li class="list-group-item">Second Publisher</li>
                <li class="list-group-item">Third Publisher</li>
                <li class="list-group-item">Fourth Publisher</li>
                <li class="list-group-item">Fifth Publisher</li>
            </ul>
        </div>

<!--Submit Form-->
        <form method="POST" action="/">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPublisher" class="col-form-label">Add new Publisher:</label>
                </div>
                <div class="col-auto">
                    <input name="newPublisher" id="inputPublisher" placeholder="Publisher's name" class="form-control">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>



    </div>


<?php require 'views/partials/footer.php' ?>