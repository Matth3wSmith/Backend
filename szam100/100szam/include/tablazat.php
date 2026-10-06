<?php
    //10*10-es bootstrap táblázat
    function tablazat($szamok, $rendezett=false){
        if (!$szamok) {
            $szoveg='<h2>Nincsenek még számok</h2>';
            return $szoveg;
        }
        $szoveg = "";
        $szoveg.='<table class="table table-striped mt-2">';
        $szoveg.='<thead><tr><th colspan="11" class="display-4 text-info text-center">';
        if($rendezett){
            $szoveg.='Számok rendezett megjelenítése</th></tr>';
            $szoveg.='<tr>';
            for($sor = 0; $sor<11; $sor++){
                if($sor==0){
                    $szoveg.= '<th></th>';
                }
                else{
                    $szoveg.= '<th><button type="submit" name="oszlop_'.$sor-1.'" class="btn btn-primary" >Rendezés</button></th>';
                }
            }
            $szoveg.='</tr>';
            sort($szamok);
        }
        else{
            $szoveg.='Számok megjelenítése</th></tr>';
            
        }
        $szoveg.='</thead>';
        $szoveg.='<tbody>';

        for($sor=0; $sor<10; $sor++){
            $szoveg.='<tr>';
            if($rendezett){
                $szoveg.='<td><button type="submit" class="btn btn-primary" name="oszlop_'.$sor-1.'" >Rendezés</button></td>';
            }
            for($oszlop=0; $oszlop<10; $oszlop++){
                $szoveg.='<td>';
                $szoveg.=$szamok[$sor*10+$oszlop];
                $szoveg.='</td>';
            }
            $szoveg.='</tr>';
        }
        $szoveg.='</tbody>';

        $szoveg.='</table>';
        return $szoveg;
    }
    
?>