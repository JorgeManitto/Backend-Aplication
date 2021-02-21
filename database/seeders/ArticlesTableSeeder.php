<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Volvo 850',
            'year' => 1996,
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/6/62/Volvo_850_sedan.jpg',
            'body' => 'El 850 también hizo suyo el espíritu de la seguridad, tan típico de la casa sueca. Desde su salida al mercado, ya podía incorporar airbags, y gozaba de un habitáculo reforzado con especial atención a las colisiones laterales. Incorporó el sistema SIPS8​ por primera vez, y además equipaba airbags y un eficiente sistema de retención. Esto significó ser el automóvil más seguro de las pruebas de colisión de EuroNCAP para la época en la que fue examinado el S70/V70, el cual heredó esta gran robustez. ',
            'model_id' => 1,
            'category_id' => 1,
        ]);
        DB::table('articles')->insert([
            'title' => 'Volvo 850 SW',
            'year' => 1996,
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Volvo-850-wagon-rear.jpg',
            'body' => 'Durante 1996 y 1997, se lanzó el 850R, un modelo que pretendía superar aún más el listón de prestaciones impuesto por sus hermanos con turbo. Este modelo incorpora un turbo de mayor tamaño de Mitsubishi (16T) y unos inyectores de mayor tamaño, todo ello conferiría al coche la potencia de 250CV. Además equipaba unos asientos de alcántara-cuero con mayor sujeción lateral, alerón trasero específico, llantas de magnesio de 7 radios y de 17" (Volans), inserciones de madera con nuevas tonalidades, entre otras opciones. ',
            'model_id' => 2,
            'category_id' => 1,
        ]);
        DB::table('articles')->insert([
            'title' => 'Ford Torino GT',
            'year' => 1968,
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/%2773_Ford_Gran_Torino_%28Auto_classique%29.JPG/1920px-%2773_Ford_Gran_Torino_%28Auto_classique%29.JPG',
            'body' => 'El Ford Torino es un automóvil del segmento D producido por la Ford Motor Company para el mercado de EE. UU. entre 1968 y 1976. Inicialmente fue una versión de lujo de tamaño intermedio del Ford Fairlane, que Ford USA produjo entre 1962 y 1970. Después de 1968, el nombre de Fairlane se mantuvo en los modelos base con menores niveles de ajuste de los modelos que llevaban el nombre de Torino. Durante este tiempo, se consideró el Torino una subserie del Fairlane. En 1970 el nombre de Torino se había convertido en el nombre principal, y el Fairlane era ahora una subserie del Torino. En 1971 el nombre de Fairlane fue eliminado por completo y todos los modelos fueron llamados Torino. ',
            'model_id' => 1,
            'category_id' => 2,
        ]);    
        DB::table('articles')->insert([
            'title' => 'Ford Orion',
            'year' => 1996,
            'img' => 'https://upload.wikimedia.org/wikipedia/commons/d/df/Ford_Orion_di_Francia_ca1983.jpg',
            'body' => 'El Ford Orion es un automóvil del segmento C producido por el fabricante estadounidense Ford para el mercado europeo entre los años 1983 y 1993. El Orion es la versión sedán del Ford Escort, que es un hatchback del segmento C, y fue ideado como un eslabón en la gama de modelos de Ford entre este y el Ford Sierra, este último del segmento D. El voladizo trasero más largo le otorga un maletero mayor con respecto al Escort.  ',
            'model_id' => 2,
            'category_id' => 2,
        ]);      
        
    }
}
