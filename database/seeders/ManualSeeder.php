<?php

namespace Database\Seeders;

use App\Models\Manual;
use Illuminate\Database\Seeder;

class ManualSeeder extends Seeder
{
    /**
     * Cadastra os manuais da Reconectando.
     * Só o do roteador está pronto; os outros aparecem como "Em breve".
     */
    public function run(): void
    {
        Manual::create([
            'slug' => 'roteador',
            'title_pt' => 'Como instalar um roteador?',
            'title_en' => 'How to install a router?',
            'description_pt' => 'Da instalação dos cabos até a rede Wi-Fi funcionando, passo a passo.',
            'description_en' => 'From plugging in the cables to a working Wi-Fi network, step by step.',
            'cover' => null,
            'available' => true,
        ]);

        Manual::create([
            'slug' => 'cabo-de-rede',
            'title_pt' => 'Como montar um cabo de rede?',
            'title_en' => 'How to make a network cable?',
            'description_pt' => 'Crimpagem de cabo RJ45 sem complicação.',
            'description_en' => 'RJ45 cable crimping made simple.',
            'available' => false,
        ]);

        Manual::create([
            'slug' => 'repetidor',
            'title_pt' => 'Como configurar um repetidor?',
            'title_en' => 'How to set up a Wi-Fi extender?',
            'description_pt' => 'Leve o sinal do Wi-Fi para mais longe.',
            'description_en' => 'Take your Wi-Fi signal further.',
            'available' => false,
        ]);
    }
}
