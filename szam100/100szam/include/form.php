<?php
    


    function form($szamok)
    {
        $szoveg = "";
        $szoveg .= "<form action=\"".uri(1)."\" method=\"post\">";
        $szoveg .= '<div class="row">';
        for($i=0;$i < sizeof($szamok);$i++)
        {
            if($i === 0)
            {
                $szoveg .= '<div class="col-1"></div>';
            }

                $szoveg .= '
                <div class="col-1">
                    <label for="szam'. $i .'">'.($i+1).'</label>
                    <input type="number" value="'.$szamok[$i].'" min="0" max="1000" name="szam'.$i.'" id="szam'.$i.'" class="from-control">
                </div>';
            
            if($i%10===9)
            {
                $szoveg .= '<div class="col-1"></div>';
                if($i > 0 || $i < 99 )
                {
                    $szoveg .= '<div class="col-1"></div>';
                }
                
            };


            
        }

        $szoveg .= '</div>';
        $szoveg.='<div class="row "><button type="submit" name="elkuld" class="btn btn-primary p-3 mt-2">Elküld</button></div>';
        $szoveg.="</form>";

        return $szoveg;
    }

    function szamGeneral()
    {
        $generaltSzamok = [];
        $mennyi = 100;
        for($i = 0;$i< $mennyi;$i++)
        {
            $generaltSzamok[] = rand(0,1000);
        }

        return $generaltSzamok;
    }
    //File-ba menti a postban érkező adatokat
    function feldolgozas(){
        if(isset($_POST["elkuld"])){
            $file = fopen("save.txt","w");
            for($i=0; $i<100;$i++){
                fwrite($file, $_POST["szam".$i].";");
            }
            fclose($file);
            header("location:". uri(1));
            exit();
            ///phpinfo(32);
        }
    }
    /**
     * adatok betöltése file-ból, ha létezik 
     *
     */
    function szamokBetolt($generalj=true){
        if(file_exists("save.txt")){
            $vissza = explode(";",file("save.txt")[0]);
            array_pop($vissza);
            
            return $vissza;
        }
        elseif ($generalj) {
            return szamGeneral();
        }
        else{
            return false;
        }   
    }
    
?>