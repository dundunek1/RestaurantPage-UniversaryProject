<?php
$menu = [
    'Zupy' => [
        'subtitle' => 'Tradycyjne smaki z lokalnych składników',
        'dishes' => [
            [
                'id' => 'kapusniak',
                'name' => 'Kapuśniak na żeberkach',
                'descShort' => 'Gęsta zupa z żeberkami i kiszoną kapustą.',
                'img' => 'assets/kapusniak-zeberka.jpeg',
                'ingredients' => 'żeberka wieprzowe, kiszona kapusta, marchew, pietruszka, ziemniaki, przyprawy',
                'descFull' => 'Tradycyjny kapuśniak podkarpacki gotowany na wędzonych żeberkach. Zupa ma gęstą konsystencję, doskonały balans kwaskowatości i delikatnej słodyczy warzyw. Podawana z kawałkami mięsa i pieczywem na zakwasie.',
                'price' => 24,
                'kcal' => 430,
                'categories' => ['mieso', 'tradycyjne']
            ],
            [
                'id' => 'zalewajka',
                'name' => 'Zalewajka podkarpacka',
                'descShort' => 'Zupa z zakwasu żurkowego, ziemniaków i kiełbasy.',
                'img' => 'assets/zalewajka.webp',
                'ingredients' => 'zakwas żurkowy, ziemniaki, kiełbasa wiejska, boczek wędzony, czosnek, majeranek',
                'descFull' => 'Specjalność naszego szefa kuchni! Autentyczna zalewajka gotowana na bazie domowego zakwasu z dodatkiem podsmażonej kiełbasy i boczku, doprawiona majerankiem i czosnkiem.',
                'price' => 22,
                'kcal' => 380,
                'categories' => ['mieso', 'tradycyjne']
            ]
        ]
    ],
    'Przystawki' => [
        'subtitle' => 'Doskonałe na rozpoczęcie kulinarnej podróży',
        'dishes' => [
            [
                'id' => 'proziaki',
                'name' => 'Proziaki z masłem czosnkowym',
                'descShort' => 'Podkarpackie placki z twarogiem i masłem.',
                'img' => 'assets/proziaki.webp',
                'ingredients' => 'mąka pszenna, soda, maślanka, twaróg, masło, czosnek',
                'descFull' => 'Tradycyjne podkarpackie bułeczki wypiekane na sodzie, podawane na ciepło z domowym masłem czosnkowym.',
                'price' => 18,
                'kcal' => 320,
                'categories' => ['vegetarian', 'chef-recommendation']
            ],
            [
                'id' => 'pasztet',
                'name' => 'Pasztet z dziczyzny z żurawiną',
                'descShort' => 'Aromatyczny pasztet z dodatkiem żurawiny.',
                'img' => 'assets/pasztet-dziczyzna.webp',
                'ingredients' => 'dziczyzna, wątróbka, przyprawy, żurawina, jajka, cebula',
                'descFull' => 'Wyrazisty pasztet z dziczyzny pieczony na miejscu, podawany z konfiturą żurawinową i pieczywem z kminkiem.',
                'price' => 28,
                'kcal' => 390,
                'categories' => ['mieso', 'tradycyjne']
            ]
        ]
    ],
    'Dania główne' => [
        'subtitle' => 'Syte i aromatyczne propozycje dla każdego',
        'dishes' => [
            [
                'id' => 'pstrag',
                'name' => 'Pstrąg z pieca z masłem czosnkowym',
                'descShort' => 'Podawany z warzywami i ziemniakami.',
                'img' => 'assets/pstrag.webp',
                'ingredients' => 'pstrąg, masło, czosnek, pietruszka, warzywa, ziemniaki',
                'descFull' => 'Świeży pstrąg pieczony w ziołowym maśle czosnkowym, podawany z ziemniakami i grillowanymi warzywami.',
                'price' => 42,
                'kcal' => 510,
                'categories' => ['ryba', 'bezglutenowe']
            ],
            [
                'id' => 'kwasnica',
                'name' => 'Kwaśnica z żeberkiem',
                'descShort' => 'Kwaśna zupa góralska z mięsem i ziemniakami.',
                'img' => 'assets/kwasnica.webp',
                'ingredients' => 'kapusta kiszona, żeberka, ziemniaki, przyprawy',
                'descFull' => 'Góralska kwaśnica z mięsnym żeberkiem i ziemniakami, gotowana przez kilka godzin dla maksymalnego smaku.',
                'price' => 26,
                'kcal' => 460,
                'categories' => ['mieso', 'tradycyjne']
            ]
        ]
    ]
];
?>