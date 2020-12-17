<?php

namespace Database\Factories;

use App\Models\penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=>$this->faker->name,
            'nik'=>$this->faker->bankAccountNumber,
            'tempat_lahir'=>$this->faker->state,
            'tanggal_lahir'=>$this->faker->dateTimeBetween(),
            'agama'=>$this->faker->colorName,
            'jenis_kelamin'=>$this->faker->randomLetter,

        ];
    }
}
