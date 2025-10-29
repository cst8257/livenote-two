<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory(3)->create();

        Note::create(['title' => 'Meeting Notes', 'content' => 'Discuss project milestones and deadlines.', 'user_id' => 1]);
        Note::create(['title' => 'Shopping List', 'content' => 'Buy milk, eggs, bread, and coffee.', 'user_id' => 1]);
        Note::create(['title' => 'Workout Plan', 'content' => 'Monday: Cardio, Tuesday: Strength training.', 'user_id' => 1]);
        Note::create(['title' => 'Recipe Ideas', 'content' => 'Try making lasagna and chocolate cake.', 'user_id' => 1]);
        Note::create(['title' => 'Travel Itinerary', 'content' => 'Visit Paris, Rome, and Barcelona.', 'user_id' => 1]);
        Note::create(['title' => 'Book Recommendations', 'content' => 'Read "1984" by George Orwell and "Dune" by Frank Herbert.', 'user_id' => 1]);
        Note::create(['title' => 'Event Planning', 'content' => 'Organize the annual company picnic.', 'user_id' => 2]);
        Note::create(['title' => 'Learning Goals', 'content' => 'Complete online course on web development.', 'user_id' => 2]);
        Note::create(['title' => 'Daily Journal', 'content' => 'Reflect on today\'s achievements and challenges.', 'user_id' => 2]);
        Note::create(['title' => 'Gift Ideas', 'content' => 'Consider buying a watch or a book for the birthday.', 'user_id' => 2]);
        
        Tag::create(['name' => 'Personal']);
        Tag::create(['name' => 'Work']);
        Tag::create(['name' => 'Shopping']);
        Tag::create(['name' => 'Fitness']);

        DB::table('note_tag')->insert([
            ['note_id' => 1, 'tag_id' => 2],
            ['note_id' => 2, 'tag_id' => 1],
            ['note_id' => 2, 'tag_id' => 3],
            ['note_id' => 3, 'tag_id' => 1],
            ['note_id' => 3, 'tag_id' => 4]
        ]);
    }
}
