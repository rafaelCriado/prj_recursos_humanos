<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        $this->call(PapelSeeds::class);
        $this->call(PermissaoSeeds::class);
        $this->call(UsuariosSeeds::class);
        $this->call(EstadoSeed::class);
        $this->call(statusSeed::class);
        $this->call(ConfiguracaoSeed::class);
    }
}
