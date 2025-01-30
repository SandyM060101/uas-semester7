<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\Team;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        User::factory()->create([
            'name' => 'Sandy Meliyawan',
            'email' => 'sandymeliyawan@gmail.com',
            'password' => bcrypt('SandyM@060101'),
        ]);

        // Category::factory(10)->create();
        
        Category::factory()->create([
            'name' => 'Fiksi',
            'slug' => 'fiksi',
            'description' => 'Buku fiksi adalah buku yang berisi cerita-cerita yang bersifat imajinatif dan tidak nyata.',
        ]);

        Category::factory()->create([
            'name' => 'Non-Fiksi',
            'slug' => 'non-fiksi',
            'description' => 'Buku non-fiksi adalah buku yang berisi informasi yang nyata dan faktual.',
        ]);

        Category::factory()->create([
            'name' => 'Komik',
            'slug' => 'komik',
            'description' => 'Buku komik adalah buku yang berisi cerita bergambar.',
        ]);

        Category::factory()->create([
            'name' => 'Novel',
            'slug' => 'novel',
            'description' => 'Buku novel adalah buku yang berisi cerita panjang yang bersifat imajinatif dan tidak nyata.',
        ]);
        // Books

        Book::factory()->create([
            'title' => 'Naruto Volume 1',
            'author' => 'Masashi Kishimoto',
            'category_id' => 3,
            'price' => 50000,
            'stock' => 100,
            'cover_image' => 'Naruto.jpg',
            'description' => 'Naruto is a Japanese manga series written and illustrated by Masashi Kishimoto. It tells the story of Naruto Uzumaki, a young ninja who seeks recognition from his peers and dreams of becoming the Hokage, the leader of his village.',
        ]);

        Book::factory()->create([
            'title' => 'One Piece Volume 1',
            'author' => 'Eiichiro Oda',
            'category_id' => 3,
            'price' => 50000,
            'stock' => 100,
            'cover_image' => 'Luffy.jpg',
            'description' => 'One Piece is a Japanese manga series written and illustrated by Eiichiro Oda. It has been serialized in Shueisha\'s Weekly Shōnen Jump magazine since July 22, 1997, and has been collected into 98 tankōbon volumes as of February 2021.',
        ]);

        Book::factory()->create([
            'title' => 'Dragon Ball Volume 1',
            'author' => 'Akira Toriyama',
            'category_id' => 3,
            'price' => 50000,
            'stock' => 100,
            'cover_image' => 'Goku.jpg',
            'description' => 'Dragon Ball is a Japanese manga series written and illustrated by Akira Toriyama. It was originally serialized in Weekly Shōnen Jump from 1984 to 1995, with the 519 individual chapters published into 42 tankōbon volumes by Shueisha.',
        ]);


        // Teams

        Team::factory()->create([
            'nama' => 'Salsa Dwiyanti',
            'npm' => '2169700001',
            'image' => '25.png',
        ]);

        Team::factory()->create([
            'nama' => 'Sandy Meliyawan',
            'npm' => '2169700003',
            'image' => '27.png',
        ]);

        Team::factory()->create([
            'nama' => 'Listiani Lesveva Setiawan',
            'npm' => '2169700006',
            'image' => '26.png',
        ]);
    }
}
