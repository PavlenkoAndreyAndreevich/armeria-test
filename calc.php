<?php

class Calculation{

    const PERCENT = 0.1;    // годовой процент
    public $summn1;        // сумма вклада
    public $summadd;        // сумма пополнения
    public $daysn = [];     // массив из которого извлечем месяц, и через функцию cal_days_in_month узнаем количество в нем дней
    private $daysy;          // количество дней в году
    public $years;           // срок вклада(количество месяцев)


    public function __construct()
    {
        $this->summn1 = $_POST['summn1'];
        $this->daysn = explode(".", $_POST['date'] );
        $this->daysy = date('L')?366:365;
        $this->summadd = $_POST['summ_add'];
        $this->years = $_POST['years'];
    }

    /* Узнаем количество дней в месяце в котором был сделан вклад*/
    private function get_days_in_month(){
        return cal_days_in_month(CAL_GREGORIAN, $this->daysn[1], $this->daysn[2]);
    }
    /*Искомое значение*/
    public function get_sumn(){
       $summn = $this->summn1 + $this->summn1*$this->get_days_in_month()*$this->years*(self::PERCENT / $this->daysy);
       return $summn;
    }
    public function get_sumn_with_deposite(){
        $summn = $this->summn1 + ($this->summn1 + $this->summadd*$this->years)*$this->get_days_in_month()*$this->years*(self::PERCENT / $this->daysy);
        return $summn;
    }
}

$result = new Calculation();

    if($_POST['radio_button_2']=='yes'){
        echo round($result->get_sumn_with_deposite());
    }elseif($_POST['radio_button_2']=='no') {
        echo round($result->get_sumn());
    }
