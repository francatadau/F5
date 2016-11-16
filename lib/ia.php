<?php
/**
 *
 */
class ia
{
  //Declaramos las propiedades
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;

  public $navesHumano=[];

  public $navesIA=[];

  //Declaramos el metodo
  public function getFila(){
    return $this->mapaFil;
  }
  public function getColumna(){
    return $this->mapaCol;
  }
  public function getNave(){
    return $this->numNaves;
  }
  public function getNaveHumano(){
    return $this->navesHumano;
  }
  public function getNavesIA(){
    $podemosMover=1;

    foreach ($this->navesIA as $key => &$nave) {

      if ($nave["tipo"]=="tipo1"){

        foreach ($this->navesHumano as $key => $naveH) {
          if (($nave["fil"]-1)==$naveH["fil"] && $nave["col"]==$naveH["col"]){
            $podemosMover=0;
          }
        }
        if ($podemosMover==1){
          $nave["fil"]=$nave["fil"]-1;
        }
      }
    }
    return $this->navesIA;
  }

  // Setters
  public function setFila($fil){
    $this->fila = $fil;
  }
  public function setMapaCol($mapaCol){
    if ($mapaCol<0){
      $this->mapaCol=0;
    }
    elseif($mapaCol>3){
      $this->mapaCol=3;
    }else{
      $this->mapaCol=$mapaCol;
    }
  }

  public function setMapaFil($mapaFil){
    if ($mapaFil<0){
      $this->$mapaFil=0;
    }elseif($mapaFil>3){
      $this->$mapaFil=3;
    }else{
      $this->mapaFil=$mapaFil;
    }
  }

  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      'id'=>$id,
      'tipo'=>$tipo,
      'col'=>$col,
      'fil'=>$fil
  ];}

  public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      'id'=>$id,
      'tipo'=>$tipo,
      'col'=>$col,
      'fil'=>$fil
  ];}

  public function setNavesIA($navesIA)
  {
    return $this->navesIA;
  }
  // Aleatorio
  public function RandomPos(){
    $this->columna=rand (0,3);
    $this->fila=rand (0,3);
  }
}
?>
