<?php

    class Terreno {
            public $ladoA;
            public $ladoB;
            public $ladoC;
            public $ladoD;
            public $triangulo;
            public $rectangulo;
            public $terreno;
            public function CalcularTerreno(){

                 $this-> ladoA = $_POST['A'];
                 $this-> ladoB = $_POST['B'];
                 $this-> ladoC = $_POST['C'];
                 $this-> ladoD =  $this-> ladoA - $this-> ladoB;
                 $this-> triangulo = $this-> ladoD * $this-> ladoC /2;
                 $this-> rectangulo = $this-> ladoB * $this-> ladoC /2;
                 $this-> terreno =$this-> triangulo + $this-> rectangulo;

                    print '<script>
                    Swal.fire({
                        title: "El area del Terreno es",
                        html:`<h3>'.$this->terreno ."Metros". '`,
                      
                        width: 600,
                        padding: "3em",
                        color: "#3e5f8a",
                        background: "#fff url(fondol.png)",
                        backdrop: `
                          rgba(0,0,123,0.4)
                          url("bn.png")
                          left top
                          no-repeat
                        `
                      });
                    
                    </script> ';
                    
            }



    }