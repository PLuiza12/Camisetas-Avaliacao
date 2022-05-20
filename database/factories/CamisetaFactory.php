<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CamisetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            
            'marca'=>$this->faker->randomElement(['YSL',
              'Dior',
              'Channel',
              'Prada',
              'Dulce&Gabbana',
              'Gucci',
              'Louis Vitton',
              'Riachuelo',
              'C&A'
            ]),
            ###############################################
            'tecido'=>$this->faker->randomElement([ 
                'Veludo',
                'lã',
                'feltro',
                'camurça',
                'denim',
                'couro',
                'flanela',
                'chiffon',
                'gabardine',
                'alpaca',
                'seda'

            ]),
            ############################################
            'cor'=>$this->faker->randomElement([
                'Vermelho',
                'Azul',
                'Amarelo',
                'Verde',
                'Marrom',
                'Laranja',
                'Roxo',
                'Cinza',
                'Rosa'
            ]),
            #########################################
            'tamanho'=>$this->faker->randomElement([
                'PP',
                'P',
                'M',
                'G',
                'GG',
                'XG'

            ]),
            #################################################
            'pagamento' =>$this->faker->creditCardNumber()
            
        ];
    }
}
