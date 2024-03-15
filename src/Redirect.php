<?php 
class Redirect{
    private $url;
    private $dir = 'templates/pages/';
    private $bazeUrl;
    private $metaTag;

    public function __construct($bazeUrl) {
        $local=explode('/', $_SERVER['PHP_SELF']);
        $url = array_filter($local);
        foreach($url as $row) {
            if (!strpos($row, '.php')) { $this->url[]=$row; }
        }
        $this->bazeUrl=$bazeUrl;
        $this->generateMeta();
    }
    
    private function generateMeta() {
        $url='';
        $tab=$this->url;
        if($this->bazeUrl!='/') { $tab[0]=''; }
        foreach ($tab as $item ) {
            if ($item!='') { $url.=$item.'/'; }
        }
        if (isset(Metatag::metatags[$url])) {
            $this->metaTag=Metatag::metatags[$url];
        } else {
            $this->metaTag=Metatag::metatags['default'];
        }
        $this->metaTag['canonical']=$url;
    }

    public function activePage($href, $sub='main') {
        $lok=explode('/', $_SERVER['REQUEST_URI']);
        $compsit=$_SERVER['REQUEST_URI'];
        if(count($lok)>2 && $sub=='main') { $compsit='/'.$lok[count($lok)-2]; }
        if ($href==$compsit ){ return true; } 
        return false;
    }

    public function getmetatag() { return $this->metaTag; }

    public function loadContent() {
        if (count($this->url)>=1) {
            $tab=$this->url;
            if($this->bazeUrl!='/') { $tab[0]=''; }
            $tab[count($tab)-1]='';
            $dir='';
            foreach ($tab as $row) {
                if($row) { $dir.=$row.'/'; }
            }
            $plik=$this->dir.$dir.$this->url[count($this->url)-1].'.php';
            if (!file_exists($plik)) { 
                $plik=$this->dir.$dir.'blog/'.$this->url[count($this->url)-1].'.php';
                if (!file_exists($plik)) { 
                    $plik=$this->dir.'404.php';
                    $plik=$this->dir.'home.php'; 
                } 
            }
        } else {
            $plik=$this->dir.'home.php'; 
        }
        return $plik;
    }
}