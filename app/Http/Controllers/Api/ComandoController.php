<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller; 

class ComandoController extends Controller 
{
    public $successStatus = 200;
  
    public function getComandos() 
    {
        // $comandos = Comando::all();

        $comandos = [
            0 => [
                "<button type=\"button\" value=\"docker exec php-fpm5.6 bash -c 'cd /var/www/html/grp3 && php bin/console doc:mi:ge'\">Criar Migração</button>"
            ],
            1 => [
                "<button type=\"button\" value=\"docker exec php-fpm5.6 bash -c 'cd /var/www/html/grp3 && php bin/console --no-interaction doc:mi:mi'\">Rodar Migração</button>"
            ],
            2 => [
                "<button type=\"button\" value=\"docker exec php-fpm5.6 bash -c 'cd /var/www/html/grp3 && php bin/console doc:mi:exec %rollback_codigo% --down'\">Rollback Migração</button>"
            ],
        ];

        return response()->json($comandos, $this->successStatus); 
    }
} 