
<?php
function urlapHtml(){

return '<section id="kapcsolat" class="d-flex align-items-center">
    <div class="container">
        <h2 class="display-5 fw-bold text-center mb-5">Add meg az adataid!</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <form action="'.uri(1).'" method="post">
                            <div class="mb-3">
                                <label for="nev" class="form-label">Teljes név:</label>
                                <input type="text" class="form-control" name="nev" id="nev" placeholder="Kovács János">
                            </div>
                            <div class="mb-3">
                                <label for="szuletes" class="form-label">Születési dátum:</label>
                                <input type="date" class="form-control" name="szuletes" id="szuletes" >
                            </div>
                            <div class="mb-3">
                                <label for="becenev" class="form-label">Becenév:</label>
                                <input class="form-control" type="text" id="becenev" name="becenev" placeholder="Pepa">
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-dark btn-lg">Adat elküldése</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>';
}

function feldolgozas(){

    if(isset($_POST["submit"])){
        file_put_contents('save.txt', $_POST['nev'] .";". $_POST['szuletes'] . ';'. $_POST['becenev'] . PHP_EOL, FILE_APPEND);
        header("location:".uri(1));
        exit;
    }
}