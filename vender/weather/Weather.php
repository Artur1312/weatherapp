<?php
include_once 'vender/weather/Db.php';
class Weather implements WeatherInterface
    {
    private $tmp="SELECT tmp FROM weather";
    private $windspeed;
    private $windturn;
    private $status;
    private $humidity;
    public function getTmp()
       {
        return $this->tmp;
    }
    public function getWindSpeed()
        {
        return $this->windspeed;
    }
    public function getWindTurn()
        {
        return $this->windturn;
    }
    public function getStatus()
        {
        return $this->status;
    }
    public function getHumidity()
        {
        return $this->humidity;
    }
    public function setTmp($tmp)
       {
        return $this->tmp=$tmp;
    }
    public function setWindSpeed($windspeed)
        {
        return $this->windspeed=$windspeed;
    }
    public function setWindTurn($windturn)
        {
        return $this->windturn=$windturn;
    }
    public function setStatus($status)
        {
        return $this->status=$status;
    }
    public function setHumidity($humidity)
        {
        return $this->humidity=$humidity;
    }
    public function showWeather()
        {
        return json_encode([
        'tmp'=>$this->tmp,
        'windspeed'=>$this->windspeed,
        'windturn'=>$this->windturn,
        'status'=>$this->status,
        'humidity'=>$this->humidity
        ]);
    }
}