<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email ='contato@fornecedor.com.br';
        $fornecedor->save();

        //metodo create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome'=>'Fornecedor 200',
            'site'=>'fornecedor200.com.br',
            'uf'=>'RS',
            'email'=>'contato@forncedero200.com.br'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor 300',
            'site'=>'fornecedor300.com.br',
            'uf'=>'Sp',
            'email'=>'contato@forncedero300.com.br'
        ]);
    }
}
