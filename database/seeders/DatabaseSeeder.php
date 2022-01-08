<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::factory(3)->create();

        // Category::create([
        //     'name' => "Fiksi Ilmiah",
        //     'slug' => "fiksi-ilmiah"
        // ]);
        // Category::create([
        //     'name' => "Fantasi",
        //     'slug' => "fantasi"
        // ]);
        // Category::create([
        //     'name' => "Horror",
        //     'slug' => "horror"
        // ]);
        
        // error
        // Post::factory(20)->create();
        // Post::create([
        //     'title' => "Midsommar",
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' => "midsommar",
        //     'author' => "Ari Aster",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        // ]);
        // Post::create([
        //     'title' => "Arrival",
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => "arrival",
        //     'author' => "Denis Villeneuve",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        // ]);
        // Post::create([
        //     'title' => "Charlie and the Chocolate Factory",
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => "charlie-and-the-chocolate-factory",
        //     'author' => "Tim Burton",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        // ]);
        // Post::create([
        //     'title' => "Seobok",
        //     'category_id' => 1,
        //     'user_id' => 3,
        //     'slug' => "seobok",
        //     'author' => "Lee Yong Ju",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        // ]);
        Post::create([
            'title' => "Space Sweepers",
            'category_id' => 1,
            'user_id' => 2,
            'slug' => "space-sweepers",
            'author' => "Jo Sung Hee",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia nulla veniam quod eius consequuntur, eaque impedit itaque magnam beatae et corrupti unde libero?",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia nulla veniam quod eius consequuntur, eaque impedit itaque magnam beatae et corrupti unde libero? Quasi debitis natus dolores ex libero hic, deleniti earum! Pariatur tenetur quibusdam id in doloribus inventore totam ratione sit, accusantium quia repudiandae sapiente consequuntur! Beatae nam perspiciatis, vitae deleniti eligendi id aperiam consectetur est temporibus similique fugit eius dolores numquam nemo corrupti provident repellat non modi, omnis harum commodi.</p><p>Sit debitis illum, hic error, architecto consequuntur eligendi mollitia inventore minus, quibusdam repellat omnis voluptatem aliquid? Exercitationem quae magni obcaecati veritatis reprehenderit cupiditate suscipit. Aut eos et, sint officiis minima tempore? Repellat aliquid quam officiis obcaecati sequi beatae deleniti, perferendis quis iusto eos fuga qui pariatur, quibusdam recusandae. Officia tempora nostrum facere. Repellat iure ducimus doloribus quos repudiandae.</p><p>Aspernatur natus beatae, cumque commodi incidunt autem, dolores fuga quam exercitationem sed expedita officiis officia. Explicabo, a debitis. Necessitatibus labore qui illo ullam voluptate doloremque soluta vero tenetur rem earum recusandae velit eos, voluptatem pariatur distinctio eligendi ipsam enim nulla. Veniam qui non beatae error deleniti nesciunt accusantium. Assumenda pariatur eligendi delectus ipsum quaerat enim voluptate vel harum iure aut quia quo facere et deserunt, exercitationem nostrum doloribus ea.</p>"
        ]);
        Post::create([
            'title' => "Shang-Chi and The Legend of The Ten Rings",
            'category_id' => 2,
            'user_id' => 3,
            'slug' => "shang-chi",
            'author' => "Destin Daniel Cretton",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia nulla veniam quod eius consequuntur, eaque impedit itaque magnam beatae et corrupti unde libero?",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia nulla veniam quod eius consequuntur, eaque impedit itaque magnam beatae et corrupti unde libero? Quasi debitis natus dolores ex libero hic, deleniti earum! Pariatur tenetur quibusdam id in doloribus inventore totam ratione sit, accusantium quia repudiandae sapiente consequuntur! Beatae nam perspiciatis, vitae deleniti eligendi id aperiam consectetur est temporibus similique fugit eius dolores numquam nemo corrupti provident repellat non modi, omnis harum commodi.</p><p>Sit debitis illum, hic error, architecto consequuntur eligendi mollitia inventore minus, quibusdam repellat omnis voluptatem aliquid? Exercitationem quae magni obcaecati veritatis reprehenderit cupiditate suscipit. Aut eos et, sint officiis minima tempore? Repellat aliquid quam officiis obcaecati sequi beatae deleniti, perferendis quis iusto eos fuga qui pariatur, quibusdam recusandae. Officia tempora nostrum facere. Repellat iure ducimus doloribus quos repudiandae.</p><p>Aspernatur natus beatae, cumque commodi incidunt autem, dolores fuga quam exercitationem sed expedita officiis officia. Explicabo, a debitis. Necessitatibus labore qui illo ullam voluptate doloremque soluta vero tenetur rem earum recusandae velit eos, voluptatem pariatur distinctio eligendi ipsam enim nulla. Veniam qui non beatae error deleniti nesciunt accusantium. Assumenda pariatur eligendi delectus ipsum quaerat enim voluptate vel harum iure aut quia quo facere et deserunt, exercitationem nostrum doloribus ea.</p>"
        ]);
        Post::create([
            'title' => "#Alive",
            'category_id' => 3,
            'user_id' => 1,
            'slug' => "alive",
            'author' => "Il Cho",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia nulla veniam quod eius consequuntur, eaque impedit itaque magnam beatae et corrupti unde libero?",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia nulla veniam quod eius consequuntur, eaque impedit itaque magnam beatae et corrupti unde libero? Quasi debitis natus dolores ex libero hic, deleniti earum! Pariatur tenetur quibusdam id in doloribus inventore totam ratione sit, accusantium quia repudiandae sapiente consequuntur! Beatae nam perspiciatis, vitae deleniti eligendi id aperiam consectetur est temporibus similique fugit eius dolores numquam nemo corrupti provident repellat non modi, omnis harum commodi.</p><p>Sit debitis illum, hic error, architecto consequuntur eligendi mollitia inventore minus, quibusdam repellat omnis voluptatem aliquid? Exercitationem quae magni obcaecati veritatis reprehenderit cupiditate suscipit. Aut eos et, sint officiis minima tempore? Repellat aliquid quam officiis obcaecati sequi beatae deleniti, perferendis quis iusto eos fuga qui pariatur, quibusdam recusandae. Officia tempora nostrum facere. Repellat iure ducimus doloribus quos repudiandae.</p><p>Aspernatur natus beatae, cumque commodi incidunt autem, dolores fuga quam exercitationem sed expedita officiis officia. Explicabo, a debitis. Necessitatibus labore qui illo ullam voluptate doloremque soluta vero tenetur rem earum recusandae velit eos, voluptatem pariatur distinctio eligendi ipsam enim nulla. Veniam qui non beatae error deleniti nesciunt accusantium. Assumenda pariatur eligendi delectus ipsum quaerat enim voluptate vel harum iure aut quia quo facere et deserunt, exercitationem nostrum doloribus ea.</p>"
        ]);
    }
}
