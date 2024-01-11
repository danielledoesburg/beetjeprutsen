<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * The recipe dummy data.
     */
    private array $recipeData = [
        [
            'title' => 'Wortel salade',
            'instructions'  => 'Using a grater. Grate the carrots and place them into a bowl.
                                Prepare the pineapple or apples into cubes. Add to the bowl with any juice.
                                Add the sliced chilli, grated ginger, fresh herbs and the cheese.
                                Add the dressing (apple cider vinegar and oil of choice) when ready to serve.
                                Mix well and season with salt.',
            'external_url' => 'https://www.livevitae.com/learn/raw-carrot-salad-ray-peat-inspired',
            'tested' => true,
        ],
        [
            'title' => 'Pompoen quiche',
            'instructions'  => 'Laat het filodeeg in de verpakking ontdooien.
                                Verwarm de oven voor op 180 graden.
                                Snijd de pompoenblokjes nog iets kleiner. Breng een pan water aan de kook en kook de pompoenblokjes 4 minuten.
                                Vet een springvorm van 20 centimeter doorsnede in met een beetje olie en leg een vel filodeeg op de bodem. Leg vervolgens 1 vel filodeeg met één punt in het midden op de bodem, zodat ongeveer de helft van het vel over de rand hangt. Herhaal dit met 4 vellen, totdat de rand van de springvorm helemaal bedekt is.
                                Meng de eieren met de yoghurt, Parmezaanse kaas en de pompoenblokjes en breng op smaak met peper en zout. Giet het mengsel in de taartvorm.
                                Zet de gezondere quiche met pompoen 25-30 minuten in de oven.',
            'external_url' => 'https://chickslovefood.com/recept/gezondere-quiche-met-pompoen/',
            'tested' => true,
        ],
        [
            'title' => 'Pompoensoep met limoenblad en koriander',
            'instructions'  => null,
            'external_url' => null,
            'tested' => true,
        ],
        [
            'title' => 'Chicken gizzards',
            'instructions'  => null,
            'external_url' => 'https://www.youtube.com/watch?v=nhWZxb1gBFo',
            'tested' => null,
        ],
        [
            'title' => 'Custard met hele eieren',
            'instructions'  => null,
            'external_url' => 'https://yourfamilyfarmer.com/recipes/homemade-custard',
            'tested' => false,
        ],
    ];
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->recipeData as $recipe) {
            DB::table('recipes')->insert($recipe);
        }
    }
}
