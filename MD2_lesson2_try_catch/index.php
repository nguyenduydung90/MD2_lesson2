<?php
class Calculate
{
public $x;
public $y;
public function __construct($x,$y)
{
    $this->x=$x;
    $this->y=$y;
}

    public function plus()
    {
        if($this->y==0){
            throw new Exception('y phai khac 0');
        }else {
            return $this->x+$this->y;
        }
        }
 public function subtraction()
    {
        if($this->y==0){
            throw new Exception('y phai khac 0');
        }else {
            return $this->x-$this->y;
        }
        }
 public function multiplication()
    {
        if($this->y==0){
            throw new Exception('y phai khac 0');
        }else {
            return $this->x*$this->y;
        }
        }
 public function division()
    {
        if($this->y==0){
            throw new Exception('y phai khac 0');
        }else {
            return $this->x/$this->y;
        }
        }

}

try
{
    $num=new Calculate(3,0);
    echo 'Plus = '.$num->plus().'<br>';
    echo 'Sub = '.$num->subtraction().'<br>';
    echo 'Multip = '.$num->multiplication().'<br>';
    echo 'Division = '.$num->division().'<br>';
}catch (Exception $e){
    echo $e->getMessage();
}
