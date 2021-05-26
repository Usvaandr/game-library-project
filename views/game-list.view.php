<?php require 'views/partials/header.php'?>


    <div class="container">
        <div class="row">
            <h1>Games Library</h1>
            <h3>List of Publisher's games:</h3>
            <h6>(Publisher should be fetched from previous page)</h6>
            <h6>(Games should be displayed from the database)</h6>

        </div>

<!--    Printed data table-->
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Game's Name</th>
                    <th scope="col">Year of Release</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Game1</td>
                    <td>2001</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Game2</td>
                    <td>1998</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
<!--                colspan="2" shows how many row columns this value takes-->
                </tr>
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