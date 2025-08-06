<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Elemento;
use App\Models\Categoria;

class LoteTresElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Busca la categoría "LOTE 3: BISUTERÍA"
        $categoria = Categoria::where('nombre', 'LOTE 1: ARTESANÍAS')->first();

        if (!$categoria) {
            // Maneja el error si la categoría no existe
            $this->command->info('La categoría "LOTE 1: ARTESANÍAS" no fue encontrada. Por favor, crea la categoría primero.');
            return;
        }

        $elementos = [
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Blanco Luna Frasco por 60 ml Descripción ( Pintura acrílica a base de agua, de alta calidad, ideal para superficies como madera, MDF, yeso, cerámica, cartón, papel, icopor y paredes interiores. )',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Frasco por 60 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Blanco Frasco por 60 ml Descripción ( Pintura acrílica base agua con excelente cobertura y acabado duradero, apta para manualidades y decoración en diversas superficies. )',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Frasco por 60 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Marrón Oscuro Frasco por 60 ml Descripción ( Pintura acrílica de alta adherencia y resistencia, adecuada para trabajos artísticos y decorativos sobre múltiples materiales. )',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Frasco por 60 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Mostaza Frasco por 60 ml Descripción ( Pintura acrílica con secado rápido y acabado uniforme, ideal para artesanías, señalización y restauraciones. )',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Frasco por 60 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Negro Frasco por 60 ml Descripción ( Pintura acrílica base agua con gran opacidad y alta resistencia al desgaste, indicada para aplicaciones en madera, cartón, yeso y más. )',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Frasco por 60 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Piel de Ángel Frasco por 60 ml Descripción ( Pintura acrílica con excelente cubrimiento y adherencia, ideal para proyectos de manualidades y decoración. )',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Frasco por 60 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 000 Blanco Frasco por 30 ml Descripción ( Pintura acrílica para tela, de acabado mate y alta fijación, apta para algodón, mezclilla, poliéster y otras fibras textiles. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 006 Azul Cobalto Medio Frasco por 30 ml Descripción ( Pintura acrílica para tela con colores vibrantes y acabado mate, ideal para estampados y decoraciones textiles. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 070 Magenta Frasco por 30 ml Descripción ( Pintura acrílica con alta concentración de pigmento, proporcionando excelente cobertura y resistencia al lavado. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 090 Rojo Carmín Frasco por 30 ml Descripción ( Pintura acrílica de secado rápido y acabado duradero, ideal para personalización de prendas y textiles. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 555 Verde Navidad Frasco por 30 ml Descripción ( Pintura acrílica para tela con acabado mate, gran adherencia y resistencia al lavado, perfecta para estampados y manualidades. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 737 Verde Hierba Frasco por 30 ml Descripción ( Pintura acrílica de aplicación uniforme y alta durabilidad, indicada para textiles de algodón y fibras sintéticas. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 900 Amarillo Cadmio Frasco por 30 ml Descripción ( Pintura acrílica para tela con alta pigmentación y cobertura, ofreciendo un acabado mate resistente al lavado. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 901 Amarillo Limón Frasco por 30 ml Descripción ( Pintura acrílica de secado rápido, excelente fijación y color intenso para decoración textil. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 903 Verde Limón Frasco por 30 ml Descripción ( Pintura acrílica de acabado mate, ideal para personalización de textiles con colores vibrantes y duraderos. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate No. 996 Pardo Oscuro Frasco por 30 ml Descripción ( Pintura acrílica para tela, resistente a lavados y desgaste, con excelente cubrimiento sobre distintas fibras textiles. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica para Tela con Acabado Mate Verde Pera Frasco por 30 ml Descripción ( Pintura acrílica mate de alta pigmentación, indicada para estampados, manualidades y personalización de telas. )',
                'precio_unitario' => 2156.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura Acrilica',
                'descripcion' => 'Pintura Acrílica al Frío Beige Frasco por 60 ml Descripción ( Pintura acrílica con acabado uniforme y gran adherenci )',
                'precio_unitario' => 4116.00,
                'unidad_de_medida' => 'Frasco por 30 ml',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CORTADOR PARA CARTUCHO',
                'descripcion' => 'CORTADOR PARA CARTUCHO',
                'precio_unitario' => 6272.00,
                'unidad_de_medida' => 'paquete x 3',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CORTADOR PARA GIRASOL',
                'descripcion' => 'CORTADOR PARA GIRASOL',
                'precio_unitario' => 11270.00,
                'unidad_de_medida' => 'paquete x 3',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CORTADOR PARA ROSA',
                'descripcion' => 'CORTADOR PARA ROSA',
                'precio_unitario' => 6272.00,
                'unidad_de_medida' => 'paquete x 3',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CREMA DESMOLDANTE',
                'descripcion' => 'CREMA DESMOLDANTE',
                'precio_unitario' => 6370.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'DECALIZADOR X116ML',
                'descripcion' => 'DECALIZADOR X116ML',
                'precio_unitario' => 10976.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ESCARCHA MURANO. Bolsa por 125 gramos',
                'descripcion' => 'ESCARCHA MURANO. Bolsa por 125 gramos',
                'precio_unitario' => 20972.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ESTILETTES',
                'descripcion' => 'ESTILETTES',
                'precio_unitario' => 9016.00,
                'unidad_de_medida' => 'paquete',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GESSO BLNCO X116 C.C',
                'descripcion' => 'GESSO BLNCO X116 C.C',
                'precio_unitario' => 9898.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MASA TITANIO LIBRA',
                'descripcion' => 'MASA TITANIO LIBRA',
                'precio_unitario' => 11368.00,
                'unidad_de_medida' => 'libra',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'P. PARA TELA DORADA X30 CC',
                'descripcion' => 'P. PARA TELA DORADA X30 CC',
                'precio_unitario' => 5096.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'p. PARA TELA PLATEADA X30 CC',
                'descripcion' => 'p. PARA TELA PLATEADA X30 CC',
                'precio_unitario' => 5096.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PASTA ACRILICA GRANULOSA (NIEVE)X60 CM',
                'descripcion' => 'PASTA ACRILICA GRANULOSA (NIEVE)X60 CM',
                'precio_unitario' => 6566.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'RESINA GEMELOS CRISTAL X120',
                'descripcion' => 'RESINA GEMELOS CRISTAL X120',
                'precio_unitario' => 29596.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TALLADOR DE MAZORCA',
                'descripcion' => 'TALLADOR DE MAZORCA',
                'precio_unitario' => 20482.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'VITRASETA 996 PARDO X30 CC',
                'descripcion' => 'VITRASETA 996 PARDO X30 CC',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'VITRASETA099 VIOLETA X30 CC',
                'descripcion' => 'VITRASETA099 VIOLETA X30 CC',
                'precio_unitario' => 2940.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
        ];

        foreach ($elementos as $elemento) {
            Elemento::create($elemento);
        }
    }
}