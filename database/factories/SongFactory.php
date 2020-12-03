<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $language = factory(Language::class)->make();

        return [
            'id' => 1, // e.g. 79907610
            'name' => ucfirst($this->faker->sentence(3)),
            'path' => "/path/to/media/{$this->faker->word()}.mp4",
            'language_id' => $language->id,
        ];
    }
}
