<?php
abstract class onlineGateway{

    protected $options;


    public function __construct(){



        $this->options=array(

            'mellat'=>array(

                'merchant'=>'12345',
                    'username'=>'545454',
                'password'=>'dfdfdf'
            ),
            'saman'=>array(

                'api_key'=>'54s5s4d5s4d54d54d5s'
            ),
            'parsian'=>array(

                'username'=>'kjskdnndksjd',
                'password'=>'hgddsdsdfdf'
            )

        );
    }


    abstract public function sendrequest();

    abstract public function verifyrequest();

}

class mellat extends onlineGateway{
private $getwayname;

private $mellatoptions;

    public function __construct(){

        $this->getwayname='mellat';

        parent::__construct();

        $this->mellatoptions=$this->options[$this->getwayname];
        
    }


    public function sendrequest(){

        var_dump($this->mellatoptions);
    }

    public function verifyrequest(){
        // TODO: Implement verifyrequest() method.
    }
}

$getway=factory::make('mellat');
$getway->sendrequest();

class factory{

    public static function make($class){

        $classname=ucfirst($class);

        if(!class_exists($classname)){

            return false;

        }
        return new $classname;
    }

    
}