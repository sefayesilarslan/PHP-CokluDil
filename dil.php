<?php

class dilyonetim{


    public $veriler=array();
    
    function turkcedil(){
        $this->veriler=array( //yukarıdaki arraya hangi dil seçilirse o dilin verileri gelecegi için 
		
            "icerik" => "Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe Türkçe",
            "link_1" => "Ana Sayfa",	
            "link_2" => "Hakkımızda",		
            "link_3" => "Haberler",	
            "link_4" => "Resimler",
            "link_5" => "İletişim"
        
        );
        return $this->veriler;
        
    }

    function ingilizcedil(){
        $this->veriler=array( //yukarıdaki arraya hangi dil seçilirse o dilin verileri gelecegi için 
		
                "icerik" => "İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce İngilizce ",
                "link_1" => "Home",	
                "link_2" => "About",		
                "link_3" => "News",	
                "link_4" => "Photos",
                "link_5" => "Contact"
            
            );
            return $this->veriler;
    }
    function almancadil(){
        $this->veriler=array( //yukarıdaki arraya hangi dil seçilirse o dilin verileri gelecegi için 
		
                "icerik" => "Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca Almanca ",
                "link_1" => "Startseite",	
                "link_2" => "über uns",		
                "link_3" => "Nachrichten",	
                "link_4" => "Bild",
                "link_5" => "Kontakt"
            
            );
            return $this->veriler;
    }

    function dilgetir($dil){//sessionumuzu verdik
        if($dil=="tr"){
           return $this->turkcedil();
        }
        elseif($dil=="en"){
         return $this->ingilizcedil(); 
        }
        else{
            return $this->almancadil(); 
        }


    }
}



?>