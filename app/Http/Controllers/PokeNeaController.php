<?php

namespace App\Http\Controllers;

class PokeNeaController extends Controller
{
    public static $neas = array(
        ["id" => 0, "nombre" => "Popeye", "altura" => 1.61, "habilidad" => "Lo que diga el patron", "frase" => "Si ah bueno, falta usted", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/Popeye.jpg"],
        ["id" => 1, "nombre" => "William Omar Landron", "altura" => 1.82, "habilidad" => "Salir con tu mujer", "frase" => "El señor de la noche\nSoy mitad hombre, mitad animal\nEl señor de la noche\nMejor escapa o te va a matar\nEl señor de la noche\nCon tu corazón no deberías jugar", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/DonOmar.png"],
        ["id" => 2, "nombre" => "Frank Martínez", "altura" => 1.76, "habilidad" => "Humor", "frase" => "Según Wikipedia, me morí hoy, era solo para decirles que por ahora no, lo juro. O la señal acá en el infierno es muy buena", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/FrankMartinez.jpg"],
        ["id" => 3, "nombre" => "El Zarco", "altura" => 1.80, "habilidad" => "Plata o Plomo", "frase" => "Yo si soy mucha loca a lo bien", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/ElZarco.jpeg"],
        ["id" => 4, "nombre" => "Mi Idolo", "altura" => 1.67, "habilidad" => "No se pai", "frase" => "¿La capital de Bangladesh? Mmm no se pai, nada nea estoy crochis porque tuki tuki muñeco al alma, como yo no salgo de aquí de Medellín itagui, poray al otro pai lado tal vez sí, pero cómo estoy aquí es crochis hermano y estoy vea, la versión de la nivelación de Colombia pana estoy este ground, guerra, violencia, cómo dicen bimp bap, chucu chucu puap puap sonando en otro ludo enlamos aquí Colombia pero aquí estamos todos perdidos y yo no se porque nada ha credido, pero así parcero estamos vea en la versión de Colombia aquí buscando empleo y a ver como nos va, ji jo puchiku, pero ojala que no pierdan esa costumbre parce porque es una generación de ji jo me entiende? y tin pan pun pan kitsko pup pup UuU pa chipchop ehh chaa.", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/NoSePai.jpg"],
        ["id" => 5, "nombre" => "El Juicioso", "altura" => 1.69, "habilidad" => "Ser juicioso", "frase" => "Nacional a morir", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/ElJuicioso.jpg"],
        ["id" => 6, "nombre" => "Fernando Botero", "altura" => 1.64, "habilidad" => "Te mira te engordas", "frase" => "En mis cuadros hay cosas improbables, no imposibles.", "imagen" => "https://storage.googleapis.com/pokenea-image/PokeneasImagenes/FernandoBotero.jpg"],
    );

    public function index()
    {
        $totalNeas = (count(PokeNeaController::$neas));

        $randomNumber = (rand(0, ($totalNeas - 1)));

        $randomNea = PokeNeaController::$neas[$randomNumber];

        return response()->json(['id' => $randomNea["id"],'nombre' => $randomNea["nombre"],'altura' => $randomNea["altura"],'habilidad' => $randomNea["habilidad"], 'server_ip' => gethostbyname(gethostname())]);
    }

    public function random()
    {
        $totalNeas = (count(PokeNeaController::$neas));

        $randomNumber = (rand(0, ($totalNeas - 1)));

        $randomNea = PokeNeaController::$neas[$randomNumber];
        $viewData = ['imagen' => $randomNea["imagen"], 'frase' => $randomNea["frase"], 'server_ip' => gethostbyname(gethostname())];
        return view('pokeNea.imagen')->with("viewData", $viewData);
    }
}
