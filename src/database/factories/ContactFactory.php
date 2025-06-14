<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
            'email' => $this->faker->unique()->safeEmail,
            'tel1' => $this->faker->numberBetween(1, 5),
            'tel2' => $this->faker->numberBetween(1, 5),
            'tel3' => $this->faker->numberBetween(1, 5),
            'address' => $this->faker->address,
            'building' => $this->faker->secondaryAddress,
            'select' => $this->faker->randomElement([
                '商品のお届けについて',
                '商品の交換について',
                '商品トラブル',
                'ショップへのお問い合わせ',
                'その他'
            ]),
            'content' => $this->faker->realText(120),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
