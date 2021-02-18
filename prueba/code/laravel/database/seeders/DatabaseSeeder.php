<?php

namespace Database\Seeders;

use App\Models\Animes;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    private $arrayAnime = array(
        array(
            'title' => 'Shingeki no Kyojin',
            'year' => '2013',
            'genero' => 'Acción, Post-Apocalíptico',
            'poster' => 'https://i.ebayimg.com/images/g/jC8AAOSwFSRblqlm/s-l1600.jpg',
            'rented' => false,
            'synopsis' => 'La historia de Shingeki no Kyojin nos traslada a una época en la que la humanidad ha estado al borde de la extinción debido a la existencia de los titanes. Unos seres gigantes aparentemente sin inteligencia cuyo objetivo no es otro que devorar humanos a pesar de no necesitarlos para sobrevivir. Los pocos supervivientes han levantado tres muros más altos que cualquier titán, donde viven pacíficamente sin el miedo de ser devorados por los gigantes. La humanidad ha vivido tranquila durante más de 100 años hasta que en el año 845 aparece de la nada un titán más alto que los muros construidos para protegerse y crea una brecha en uno de ellos permitiendo que todos los titanes se abran paso hacia el interior. En ese momento, la humanidad recibe el recordatorio de que viven con miedo a ser devorados por los titanes.'
        ),
        array(
            'title' => 'One Piece',
            'year' => '1999',
            'genero' => 'Acción, Aventura',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/61hgFtFH7YL._AC_.jpg',
            'rented' => false,
            'synopsis' => 'One Piece es una aventura de piratas. Es la historia de un chico llamado Monkey D. Luffy (Luffy Monkey D. en español, dada la onomástica japonesa de poner antes el apellido que el nombre) quien, cuando tenía 7 años, comió accidentalmente una Fruta del Diablo, convirtiéndose en un hombre de goma aunque al precio de hacerle incapaz de nadar. '
        ),
        array(
            'title' => 'Demon Slayer',
            'year' => '2016',
            'genero' => 'Acción, Sangrienta',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/61Zm2hsRJ0L._AC_SL1024_.jpg',
            'rented' => false,
            'synopsis' => 'En la Era Taisho,Tanjiro Kamado es un chico inteligente con un buen olfato y corazón que vivía con su familia en las montañas y ganaba dinero vendiendo carbón, pero todo cambia cuando su familia es atacada y asesinada por un demonio (oni). Tanjiro y su hermana Nezuko son los únicos supervivientes del incidente, aunque su hermana Nezuko fue transformada en un demonio, pero sorprendentemente todavía mostrando signos de emoción y pensamiento humanos.Después de un encuentro con Giyu Tomioka,un asesino de demonios,Tanjiro es reclutado por Urokodaki para convertirse también en un asesino de demonios y así comienza su búsqueda para ayudar a su hermana a volverse humana nuevamente. '
        ),
        array(
            'title' => 'Naruto Shippuden',
            'year' => '2007',
            'genero' => 'Acción, Artes marciales',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81dwTCF6%2BXL._AC_SL1500_.jpg',
            'rented' => true,
            'synopsis' => 'Naruto Shippuden se trata de la segunda parte del anime Naruto cuando Naruto regresa a La Aldea Oculta de la hoja (Konoha), tras haber estado dos años y media entrenando con uno de los tres legendarios ninja: Jiraiya. Se reecontrará con sus viejos amigos y se darán cuenta de que ahora son unos ninjas aún más poderosos de los que eran antes.'
        ),
        array(
            'title' => 'Haikyuu',
            'year' => '2012',
            'genero' => 'Deportes',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71ZxpODh1iL._AC_SL1024_.jpg',
            'rented' => true,
            'synopsis' => 'La historia da comienzo cuando Shōyō Hinata, aun siendo un estudiante de primaria, ve un partido de voleibol por la televisión, en el cual vio jugar al conocido "Pequeño Gigante". Desde entonces, pretende convertirse en alguien como él, debido a que ambos son bajos de estatura, y comienza a aficionarse por el deporte. Shōyō logra armar su propio club de voleibol en su escuela, pero resulta ser que es el único miembro. A pesar de este problema, no se rinde y entrena como puede por su cuenta. '
        ),
        array(
            'title' => 'Bleach',
            'year' => '2001',
            'genero' => 'Acción, Drama',
            'poster' => 'https://dgeiu3fz282x5.cloudfront.net/g/l/l-222651.jpg',
            'rented' => false,
            'synopsis' => 'La serie narra las aventuras de un adolescente llamado Ichigo Kurosaki, un estudiante de quince años que tiene la habilidad de interactuar con los espíritus. Una noche, Ichigo se encuentra con una Shinigami (死神, lit. dios de la muerte) llamada Rukia Kuchiki. Ella se sorprende por su habilidad para poder verla, pero su conversación es interrumpida por la aparición de un Hollow (ホロウ, horō, lit. hueco), un espíritu maligno. Después de que Rukia fuera gravemente herida al tratar de proteger a Ichigo, ésta intenta traspasarle la mitad de sus poderes a Ichigo para poder enfrentarse al Hollow en igualdad de condiciones. '
        ),
        array(
            'title' => 'Death Note',
            'year' => '2006',
            'genero' => 'Suspense',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/514bhU7bSML._AC_.jpg',
            'rented' => true,
            'synopsis' => 'La historia empieza cuando Light Yagami, el mejor estudiante de preparatoria en todo Japón, encuentra una libreta abandonada en una caminata por su escuela, esta libreta recibe el nombre de «Death Note», la cual es capaz de matar a cualquier persona cuyo nombre sea escrito en ella. Al principio Light pensó qué se trataba de una broma, ya qué se negó a creer qué algo así pudiera existir, hasta qué este mismo lo prueba escribiendo el nombre de un criminal que aparecía en ese momento en la Tv, es en ese momento donde Light se da cuenta del abrumador poder que ha caído en sus manos. '
        ),
        array(
            'title' => 'Hunter x Hunter',
            'year' => '1998',
            'genero' => 'Acción, Magia, Artes marciales',
            'poster' => 'https://i5.walmartimages.com/asr/02e1645a-f521-435e-b8bb-66948c562956_1.513f3b47c5f447302a6b487644c7c216.jpeg?odnWidth=612&odnHeight=612&odnBg=ffffff',
            'rented' => false,
            'synopsis' => 'Gon se entera de que su padre, Ging, es un legendario cazador, un individuo que ha demostrado su valía, un miembro de elite de la humanidad y que se especializa en la búsqueda de criaturas raras, tesoros secretos y otras personas. A pesar de que Ging dejo su hijo a cuidado de sus familiares con el fin de perseguir sus propios sueños, Gon está decidido a seguir los pasos de su padre, aprobar el examen riguroso de Hunter, y finalmente, encontrar a su padre para convertirse en un cazador en su propio derecho. '
        ),
        array(
            'title' => 'The Promised Neverland',
            'year' => '2016',
            'genero' => 'Horror, misterio',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/61w%2ByJdwCeL._AC_SL1001_.jpg',
            'rented' => false,
            'synopsis' => 'Ambientada en un futuro distópico en el año 2045, Emma es una niña huérfana de once años que vive en el orfanato Grace Field House, junto a otros 37 niños a los que considera sus hermanos, y bajo la custodia de una mujer conocida como «Madre». Los niños de ese hospicio viven felices y disfrutan de los mejores cuidados hasta que cumplen doce años, momento en el que tienen que marcharse de allí.3​ Por norma general visten uniformes blancos, tienen un número de reconocimiento tatuado en el cuello, y hacen exámenes diarios en los que Emma siempre obtiene la máxima puntuación junto a sus mejores amigos Norman y Ray. En su tiempo libre, los niños pueden hacer lo que quieran salvo acercarse a dos sitios: la entrada que comunica con el exterior y la verja que delimita el bosque. '
        ),
        array(
            'title' => 'Boku no Hero Academia',
            'year' => '2016',
            'genero' => 'Acción, Comedia, Sobrenatural',
            'poster' => 'https://cdn.atomix.vg/wp-content/uploads/2018/12/PosterMyHeroAcademia.jpg',
            'rented' => false,
            'synopsis' => 'Boku no Hero Academia se sitúa en un mundo en el cual el 80% de la población mundial ha desarrollado superpoderes. Estos poderes comienzan a aparecer a los 4 años de edad de cada individuo y cada uno desarrolla unas características muy diferentes. Debido a esto, han aparecido numerosos superhéroes y supervillanos. Nuestro protagonista, Izuku Midoriya, pertenece a ese 20% de la población que no cuenta con superpoderes pero su gran sueño es estudar en la academia U.A y convertirse en un héroe como su ídolo All Might.'
        ),
        array(
            'title' => 'Initial D',
            'year' => '1998',
            'genero' => 'Coches, Animación',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71z3RPUjZdL._AC_SL1050_.jpg',
            'rented' => false,
            'synopsis' => 'Initial D cuenta la historia de Takumi Fujiwara, un estudiante de colegio de 18 años de edad que trabaja en una gasolinera con dos amigos: Itsuki (compañero de clase que no cesa de hablar a Takumi de su pasión por los coches y de sus modelos preferidos) e Iketani (algo mayor que ellos y líder del equipo local de corredores callejeros: Los Akina Speedstars). Takumi, a ojos de sus amigos, no tiene la más mínima idea de coches ni tampoco el más mínimo interés.'
        ),
        array(
            'title' => 'Black Clover',
            'year' => '2017',
            'genero' => 'Acción, Magia, Drama',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/91n3qF9yARL._AC_SL1500_.jpg',
            'rented' => false,
            'synopsis' => 'La historia de Black Clover nos pone en la piel de un joven llamado Asta, el cual quiere convertirse en el mago más grande del reino. Sin embargo, hay un inconveniente: ¡no puede usar magia! Por suerte, Asta recibe el grimorio trébol de cinco hojas, que le otorga el poder de la anti-magia. ¿Puede alguien carente de magia convertirse en el Rey Hechicero? Una cosa está clara, Asta nunca se rendirá. '
        )
    );

    public function run()
    {
        // \App\Models\User::factory(10)->create();
        self::seedCatalog();
        $this->command->info('Taula catàleg inicialitzada amb dades');
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos');
    }

    public function seedCatalog()
    {
        DB::table('animes')->delete();
        foreach ($this->arrayAnime as $anime) {
            $p = new Animes;
            $p->title = $anime['title'];
            $p->year = $anime['year'];
            $p->genero = $anime['genero'];
            $p->poster = $anime['poster'];
            $p->rented = $anime['rented'];
            $p->synopsis = $anime['synopsis'];
            $p->save();
        }
    }

    public function seedUsers()
    {
        DB::table('users')->delete();
        $p = new User;
        $p->name = "Eric";
        $p->email = "son.eric@hotmail.com";
        $p->email_verified_at = now();
        $p->password = bcrypt("password");
        $p->save();
        $p2 = new User;
        $p2->name = "Adri";
        $p2->email = "Adri.rodrigo@hotmail.com";
        $p->email_verified_at = now();
        $p2->password = bcrypt("password");
        $p2->save();
    }
}
