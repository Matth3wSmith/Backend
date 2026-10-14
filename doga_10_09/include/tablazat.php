<?php
function vagdal($sor){
    $vag = explode(";",$sor);
    $tr = '<tr><td>'.$vag[0].'</td><td>'.$vag[1].'</td></tr>';
    return $tr;
}
function tablazat(){
    $adatok = implode(" ",array_map("vagdal",file("adatok.txt")));

    return '<div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Név</th>
                        <th scope="col">Üzenet</th>
                    </tr>
                </thead>
                <tbody>
                    '.$adatok.'
                </tbody>
            </table>
        </div>';

}

?>