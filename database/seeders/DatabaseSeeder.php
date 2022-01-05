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
        $user = new \App\Models\User;
        $user::create([
            'name' => "Do Kyung Soo",
            'email' => "kyungsoo@mail.com",
            'password' => bcrypt("123")
        ]);
        $user::create([
            'name' => "Noh Ji Hye",
            'email' => "jihye@mail.com",
            'password' => bcrypt("456")
        ]);
        $user::create([
            'name' => "Lee Hye In",
            'email' => "hyein@mail.com",
            'password' => bcrypt("789")
        ]);

        $category = new \App\Models\Category;
        $category::create([
            'name' => "Fiksi Ilmiah",
            'slug' => "fiksi-ilmiah"
        ]);
        $category::create([
            'name' => "Fantasi",
            'slug' => "fantasi"
        ]);
        $category::create([
            'name' => "Horror",
            'slug' => "horror"
        ]);

        $post = new \App\Models\Post;
        $post::create([
            'title' => "Midsommar",
            'category_id' => 3,
            'user_id' => 1,
            'slug' => "midsommar",
            'author' => "Ari Aster",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        ]);
        $post::create([
            'title' => "Arrival",
            'category_id' => 1,
            'user_id' => 2,
            'slug' => "arrival",
            'author' => "Denis Villeneuve",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        ]);
        $post::create([
            'title' => "Charlie and the Chocolate Factory",
            'category_id' => 2,
            'user_id' => 1,
            'slug' => "charlie-and-the-chocolate-factory",
            'author' => "Tim Burton",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        ]);
        $post::create([
            'title' => "Seobok",
            'category_id' => 1,
            'user_id' => 3,
            'slug' => "seobok",
            'author' => "Lee Yong Ju",
            'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo,",
            'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum, nesciunt assumenda itaque impedit tenetur totam fugit eveniet iure sapiente harum id quas tempora et sed facere quo, possimus facilis consectetur modi. Veritatis praesentium eveniet alias soluta, ex, asperiores, placeat suscipit iure temporibus eum velit magni aliquid quia odit fuga ullam mollitia non officia fugit minus eligendi aperiam doloribus dolorum!</p><p>Itaque, unde eos officia veritatis dolores delectus vitae quae inventore numquam eius illo amet? Quis, omnis sint? Sapiente laudantium iste voluptate sed vero. Non quae provident consectetur ipsa, magni numquam voluptatibus odit culpa! Temporibus recusandae amet sit at quisquam esse cumque exercitationem dicta iusto distinctio!</p><p>Beatae, voluptate cum ad dicta officiis veniam odio aliquam facilis maiores consectetur nesciunt consequatur soluta fugit reprehenderit ullam minus? Repellendus voluptatibus suscipit quasi iste ipsum veniam pariatur autem, in maiores vitae necessitatibus esse ex perspiciatis est corrupti provident laboriosam eos molestias corporis minima blanditiis animi id voluptate excepturi.</p><p>Aspernatur deserunt similique numquam alias! Nesciunt eligendi illum consequatur modi aliquid praesentium, id commodi itaque dolorem enim earum ipsum voluptates repellat odio fugit inventore similique eius excepturi sed tenetur quia, amet rem? Eligendi eaque unde, ad eos dolor distinctio tempora quos doloremque saepe praesentium illo necessitatibus blanditiis!</p>"
        ]);
    }
}
