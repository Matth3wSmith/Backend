<?php

function szelet($sor){
    return explode(";",$sor);
}
function tablazat()
{
    $adatok = '';
    $keszAdatok = array_map("szelet",file("save.txt"));
    
    if(isset($_GET["rendezes"])){
        if($_GET["rendezes"]=="asc"){
            //mi szerint rendezünk
            $index = intval($_GET["oszlop"])-1;
            usort($keszAdatok, function($a, $b) use ($index) {
                return $a[$index] <=> $b[$index]; // Növekvő sorrend
            });
        }
        else if($_GET["rendezes"]=="desc"){
            //mi szerint rendezünk
            $index = intval($_GET["oszlop"])-1;
            usort($keszAdatok, function($a, $b) use ($index) {
                return $b[$index] <=> $a[$index]; // Csökkenő sorrend
            });
        }
    }

    for($i=0; $i<count($keszAdatok); $i++){
        $adatok .='<tr>';
        $adatok .='<td>';
        $adatok .=$keszAdatok[$i][0];
        $adatok .='</td>';
        $adatok .='<td>';
        $adatok .=$keszAdatok[$i][1];
        $adatok .='</td>';
        $adatok .='<td>';
        $adatok .=$keszAdatok[$i][2];
        $adatok .='</td>';
        $adatok .='</tr>';
    }
    $szoveg = '
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card custom-card shadow-lg rounded-4 overflow-hidden border-0">

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <!-- 1. Oszlop -->
                                    <th scope="col" class="th-gradient-1 w-33 border-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-person-badge fs-5"></i>
                                                <span class="fw-bold text-uppercase tracking-wider">Név</span>
                                            </div>
                                            <a class="badge bg-light text-dark font-monospace rounded-pill btn" href="'.uri(2).'&rendezes=desc&oszlop=1'.'">
                                                <i class="bi bi-arrow-down fs-5"></i>
                                            </a>
                                            <a class="badge bg-light text-dark font-monospace rounded-pill btn" href="'.uri(2).'&rendezes=asc&oszlop=1'.'">
                                                <i class="bi bi-arrow-up fs-5" ></i>
                                            </a>
                                        </div>
                                    </th>

                                    <!-- 2. Oszlop -->
                                    <th scope="col" class="th-gradient-2 w-33 border-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-calendar fs-5"></i>
                                                <span class="fw-bold text-uppercase tracking-wider">Születési dátum</span>
                                            </div>
                                            <a class="badge bg-light text-dark font-monospace rounded-pill btn" href="'.uri(2).'&rendezes=desc&oszlop=2'.'">
                                                <i class="bi bi-arrow-down fs-5"></i>
                                            </a>
                                            <a class="badge bg-light text-dark font-monospace rounded-pill btn" href="'.uri(2).'&rendezes=asc&oszlop=2'.'">
                                                <i class="bi bi-arrow-up fs-5" ></i>
                                            </a>
                                        </div>
                                    </th>

                                    <!-- 3. Oszlop -->
                                    <th scope="col" class="th-gradient-3 w-33 border-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-people fs-5"></i>
                                                <span class="fw-bold text-uppercase tracking-wider">Becenév</span>
                                            </div>
                                            <a class="badge bg-light text-dark font-monospace rounded-pill btn" href="'.uri(2).'&rendezes=desc&oszlop=3'.'">
                                                <i class="bi bi-arrow-down fs-5"></i>
                                            </a>
                                            <a class="badge bg-light text-dark font-monospace rounded-pill btn" href="'.uri(2).'&rendezes=asc&oszlop=3'.'">
                                                <i class="bi bi-arrow-up fs-5" ></i>
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            '.$adatok.'
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    return $szoveg;
}

?>