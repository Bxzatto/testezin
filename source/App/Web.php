<?php
namespace Source\App;

class Web
{
    public function __construct()
    {   
    }
    public function home(): void 
    {
        echo "<h1>Bea corna</h1>";
    }
    public function contact(): void 
    {
        echo "<h1>Contato</h1>";
    }
    public function error(array $data): void 
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}