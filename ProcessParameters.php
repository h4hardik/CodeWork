<?php
/**
 * class used to process URL parameters and merge them and return array to user
 * Created by : Hardik Bhavsar
 * Date : 04/22/2016
 * */
class ProcessParameters
{
    /**
     * @var
     */
    private $output;

    /**
     * function used to merge URL parameters
     * @param $url1
     * @param string $url2
     * @return array|string
     */
    public function mergeUrlParameters($url1, $url2='')
    {
        if (!empty($url1) && !empty($url2)) {
            $paramArray1 = $this->getParameters($url1);
            $paramArray2 = $this->getParameters($url2);
            $this->output = array_merge($paramArray1, $paramArray2);
        }
        else {
            $this->output = 'Please Enter two URL!!!';
        }
        return $this->output;
    }

    /**
     * function used to process URL and return parameters
     * @param $url
     * @return mixed
     */
    private function getParameters($url)
    {
        $query_str = parse_url($url, PHP_URL_QUERY);
        parse_str($query_str, $query_params);
        return $query_params;
    }
}

// Use of Method / Function

$obj = new ProcessParameters;
$merged_array = $obj->mergeUrlParameters('https://mysite.com/test/?email=xyz4@test.com&id=123','https://mysite.com/test/1234?name=hardik&testin2=458');
print_r($merged_array);
