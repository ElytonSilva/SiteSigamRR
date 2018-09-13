<?php

use Illuminate\Database\Seeder;
use App\Permissao;
class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
            'nome' =>'usuario-view',
            'descricao' =>'Acesso a lista de Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-create',
            'descricao' =>'Adicionar Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-edit',
            'descricao' =>'Editar Usuários'
        ]);
        $usuarios3 = Permissao::firstOrCreate([
            'nome' =>'usuario-delete',
            'descricao' =>'Deletar Usuários'
        ]);
  
        $papeis1 = Permissao::firstOrCreate([
            'nome' =>'papel-view',
            'descricao' =>'Listar Papéis'
        ]);
        $papeis2 = Permissao::firstOrCreate([
            'nome' =>'papel-create',
            'descricao' =>'Adicionar Papéis'
        ]);
        $papeis3 = Permissao::firstOrCreate([
            'nome' =>'papel-edit',
            'descricao' =>'Editar Papéis'
        ]);
  
        $papeis4 = Permissao::firstOrCreate([
            'nome' =>'papel-delete',
            'descricao' =>'Deletar Papéis'
        ]);

        $matricula1 = Permissao::firstOrCreate([
            'nome' =>'matricula-view',
            'descricao' =>'Adicionar matricula' 
        ]); 

        $matricula2 = Permissao::firstOrCreate([
            'nome' =>'matricula-edit',
            'descricao' =>'Editar matricula' 
        ]); 

        $matricula3 = Permissao::firstOrCreate([
            'nome' =>'matricula-update',
            'descricao' =>'Atualizar matricula' 
        ]); 

        $matricula4 = Permissao::firstOrCreate([
            'nome' =>'matricula-delete',
            'descricao' =>'Deletar matricula' 
        ]); 

        $boletim1 = Permissao::firstOrCreate([
            'nome' =>'boletim-view',
            'descricao' =>'Adicionar boletim' 
        ]); 

        $renovação1 = Permissao::firstOrCreate([
            'nome' =>'renovacao-view',
            'descricao' =>'Adicionar renovacao' 
        ]);

        $declaracao1 = Permissao::firstOrCreate([
            'nome' =>'declaracao-view',
            'descricao' =>'Adicionar declaracao' 
        ]);

        $transferencia1 = Permissao::firstOrCreate([
            'nome' =>'transferencia-view',
            'descricao' =>'Adicionar transferencia' 
        ]);

        $prematricula = Permissao::firstOrCreate([
            'nome' =>'prematricula-view',
            'descricao' =>'Adicionar prematricula' 
        ]);

        

        echo "Registros de Permissoes criados no sistema";
    }
}
