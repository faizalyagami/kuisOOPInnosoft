<?php
class BangunDatar
{
    protected $luas;
    protected $keliling;

    public function area()
    {
        
    }

    public function circumference()
    {
        
    }

    public function enlarge($scale)
    {
        
    }

    public function shrink($scale)
    {
        
    }
}

class Lingkaran extends BangunDatar
{
    private $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function area()
    {
        $this->luas = 3.14 * $this->jari_jari * $this->jari_jari;
        return $this->luas;
    }

    public function circumference()
    {
        $this->keliling = 2 * 3.14 * $this->jari_jari;
        return $this->keliling;
    }
}

class Persegi extends BangunDatar
{
    private $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function area()
    {
        $this->luas = $this->sisi * $this->sisi;
        return $this->luas;
    }

    public function circumference()
    {
        $this->keliling = 4 * $this->sisi;
        return $this->keliling;
    }

    public function enlarge($scale)
    {
        $this->sisi *= $scale;
    }

    public function shrink($scale)
    {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang extends BangunDatar
{
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area()
    {
        $this->luas = $this->panjang * $this->lebar;
        return $this->luas;
    }

    public function circumference()
    {
        $this->keliling = 2 * ($this->panjang + $this->lebar);
        return $this->keliling;
    }

    public function enlarge($scale)
    {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale)
    {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor
{
    public static function describe(BangunDatar $bangunDatar)
    {
        $jenisBangun = get_class($bangunDatar);
        $luas = $bangunDatar->area();
        $keliling = $bangunDatar->circumference();

        echo "Bangun datar ini adalah $jenisBangun yang memiliki luas $luas dan keliling $keliling." . PHP_EOL;
    }
}


$lingkaran = new Lingkaran(5);
$persegi = new Persegi(4);
$persegiPanjang = new PersegiPanjang(6, 8);

Descriptor::describe($lingkaran);
Descriptor::describe($persegi);
Descriptor::describe($persegiPanjang);

?>