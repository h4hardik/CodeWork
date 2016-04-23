<?php
/**
 * class used to format number
 * Created by : Hardik Bhavsar
 * Date : 04/22/2016
 * */

class FormatNumber
{
    /**
     * @var
     */
    private $output;

    /**
	 * function used to formatphone number
     * @param $phoneNumber
     * @return mixed|string
     */

    public function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);
        if(strlen($phoneNumber) == 10) {
            $areaCode = substr($phoneNumber, 0, 3);
            $nextThree = substr($phoneNumber, 3, 3);
            $lastFour = substr($phoneNumber, 6, 4);

            $this->output = '('.$areaCode.')'.$nextThree.'-'.$lastFour;
        }else {
            $this->output = 'Invalid Phone-Numebr , it must be 10 digit';
        }
        return $this->output;
    }
}

// Use of Method

$obj = new FormatNumber;
echo $formated_number = $obj->formatPhoneNumber('2019939883');

