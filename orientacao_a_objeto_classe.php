 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php 
    // definindo uma classe
    class carro {
    // objetos
        public $marca;
        public $modelo;
        public $ano;
        public $cor;
        public $velocidade =0 ;

    // metodos
        public function acelerar(){
            $this -> velocidade >=10;
            echo "o carro acelerou. a velocidade e igua: ". $this-> velocidade . "km/h";
        }
    // metodos segundo
        public function frear(){
            if($this->velocidade >=10){
                $this->velocidade >=10;
            }
            echo "o carro acelerou. a velocidade e igua: ". $this-> velocidade . "km/h";
    
        
    }
        }
    

    ?>
 </body>
 </html>