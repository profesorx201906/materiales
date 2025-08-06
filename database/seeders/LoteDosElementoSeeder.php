<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Elemento;
use App\Models\Categoria;

class LoteDosElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Busca la categoría "LOTE 2: 3D"
        $categoria = Categoria::where('nombre', 'LOTE 2: 3D')->first();

        if (!$categoria) {
            // Maneja el error si la categoría no existe
            $this->command->info('La categoría "LOTE 2: 3D" no fue encontrada. Por favor, crea la categoría primero.');
            return;
        }

        $elementos = [
            [
                'nombre' => 'Filamento PLA (ácido …',
                'descripcion' => 'Filamento PLA (ácido poliláctico) es un material respetuoso con el medio ambiente que Impresión de alta velocidad de hasta 600 mm/s y sin olor calidad premiun con precición dimencional compatible con el equipo creality (Colores surtidos)',
                'precio_unitario' => 164600.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Filamento para …',
                'descripcion' => 'Filamento para impresión 3D, Flexible TPU caludad premiun, Impresión de alta velocidad de hasta 600 mm/s, compatible con el equipo Creality  (Colores surtidos)',
                'precio_unitario' => 320900.00,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Filamento para …',
                'descripcion' => 'Filamento para impresión 3D, de 1.75 de diametro. Material  NYLON',
                'precio_unitario' => 329200.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Filamento para …',
                'descripcion' => 'Filamento para impresión 3D, de diametro compatible con el equipo. Material  Polietileno Tereftalato Glicol Impresión de alta velocidad de hasta 600 mm/s Compatible con equipo Creality (Colores surtidos)',
                'precio_unitario' => 205700.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Kit de Materia …',
                'descripcion' => 'Kit de Materia prima con su catalizador con agente de curado (Resina epoxica Gemelas)',
                'precio_unitario' => 267400.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Materia prima del …',
                'descripcion' => 'Materia prima del plastico, compuestos poliméricos con su respectivo catalizador',
                'precio_unitario' => 133700.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Resina de impresiòn …',
                'descripcion' => 'Resina de impresiòn 3D por SLA CalcinableProductos para capturar detalles precisos y superficies lisas. De uso para productos de joyeríam  pasar directamente del diseño digital a una impresión 3D adecuada para la fundición inversia directa',
                'precio_unitario' => 1028800.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pegamento PVA adhesivo …',
                'descripcion' => 'Pegamento PVA adhesivo a base de PVA - Acetato de Polivinilo',
                'precio_unitario' => 65800.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Bisturi con cuchillas …',
                'descripcion' => 'Bisturi con cuchillas de repuesto, cuerpo metalico y seguro',
                'precio_unitario' => 6900.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lámina de MDF de …',
                'descripcion' => 'Lámina de MDF de 1.83*2.44 EN 3mm',
                'precio_unitario' => 123400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Herramienta de …',
                'descripcion' => 'Herramienta de media y bricolaje Escuadra plástica de 32 cm y graduada a 45°',
                'precio_unitario' => 6700.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Herramienta de …',
                'descripcion' => 'Herramienta de mediad y bricolaje Escuadra plástica de 32 cm graduada a 60°',
                'precio_unitario' => 6700.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lapiz 2H, material …',
                'descripcion' => 'Lapiz 2H, material mader (Caja por 12 Unidades)',
                'precio_unitario' => 32000.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lapiz HB, material …',
                'descripcion' => 'Lapiz HB, material madera (Caja por 12 Unidades)',
                'precio_unitario' => 36600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lapiz 6B, material …',
                'descripcion' => 'Lapiz 6B, material madera (Caja por 12 Unidades)',
                'precio_unitario' => 36600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Block de dibujo …',
                'descripcion' => 'Block de dibujo Base 30, tamaño 50x30, de papel Bon de 90 gramos  con rotulo, presentación por 40 hojas',
                'precio_unitario' => 37000.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Borradoor de miga …',
                'descripcion' => 'Borradoor de miga de pan para borrar lápiz de grafito(caja por 20 unidades)',
                'precio_unitario' => 14800.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lámina de Balso …',
                'descripcion' => 'Lámina de Balso de 50 cm de largo x 25 cm de ancho',
                'precio_unitario' => 43000.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Marcadores borrable …',
                'descripcion' => 'Marcadores borrable recagables, colores surtidos',
                'precio_unitario' => 13300.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pintura acrilica …',
                'descripcion' => 'Pintura acrilica con base agua, duradera y lavable cubre madera, MDF, yeso, cerámica, cartón, papel, icopor, paredes colores surtidos presentaciòn Envase de 60 gr ',
                'precio_unitario' => 5100.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Cartón duplex en …',
                'descripcion' => 'Cartón duplex en pliego de 200 gr',
                'precio_unitario' => 3200.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Cartulina plana …',
                'descripcion' => 'Cartulina plana colores surtidos en pliego',
                'precio_unitario' => 1400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pincel redondos …',
                'descripcion' => 'Pincel redondos de cerdas suves útiles para diversas técnicas de pintura, como acrílicos, acuarelas, óleos y más - Pincel No. 0',
                'precio_unitario' => 1200.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pincel redondos …',
                'descripcion' => 'Pincel redondos de cerdas suves útiles para diversas técnicas de pintura, como acrílicos, acuarelas, óleos y más - Pincel No. 1',
                'precio_unitario' => 1400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pincel redondos …',
                'descripcion' => 'Pincel redondos de cerdas suves útiles para diversas técnicas de pintura, como acrílicos, acuarelas, óleos y más - Pincel No. 2',
                'precio_unitario' => 1400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pincel redondos …',
                'descripcion' => 'Pincel redondos de cerdas suves útiles para diversas técnicas de pintura, como acrílicos, acuarelas, óleos y más - Pincel No. 4',
                'precio_unitario' => 2000.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Pincel redondos …',
                'descripcion' => 'Pincel redondos de cerdas suves útiles para diversas técnicas de pintura, como acrílicos, acuarelas, óleos y más - Pincel No. 8',
                'precio_unitario' => 2800.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lápices de colores …',
                'descripcion' => 'Lápices de colores para dibujar (Caja por 12 unidades)',
                'precio_unitario' => 12900.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lija para pulir …',
                'descripcion' => 'Lija para pulir de forma manual No. 80 (Pliego)',
                'precio_unitario' => 3700.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lija para pulir …',
                'descripcion' => 'Lija para pulir de forma manual No. 150 (Pliego)',
                'precio_unitario' => 3200.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lija para pulir …',
                'descripcion' => 'Lija para pulir de forma manual No. 180 (Pliego)',
                'precio_unitario' => 2600.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Lija para pulir …',
                'descripcion' => 'Lija para pulir de forma manual No. 360 (Pliego)',
                'precio_unitario' => 3400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Set limas de 8 …',
                'descripcion' => 'Set limas de 8 pulgadas abricadas en acero al carbón endurecido, en formas redonda, triangular, plana y media caña',
                'precio_unitario' => 144000.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Brocha de …',
                'descripcion' => 'Brocha de 1 pulgada',
                'precio_unitario' => 10200.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Cinta adhesiva …',
                'descripcion' => 'Cinta adhesiva de enmascarar, (Rollo) con dimensión: Ancho: 30 mm / Largo: 40 metros',
                'precio_unitario' => 22600.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Marcadores permanentes …',
                'descripcion' => 'Marcadores permanentes colores surtidos, colores verde, azul, rojo y negro',
                'precio_unitario' => 3200.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SILICONA EN BARRA …',
                'descripcion' => 'SILICONA EN BARRA GRUESA 11MM PAQUETE X 1 kilogramo',
                'precio_unitario' => 29200.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PISTOLA ELÉCTRICA …',
                'descripcion' => 'PISTOLA ELÉCTRICA DE PEGAMENTO (Silicona) 25W, INCLUYE 2 BARRAS',
                'precio_unitario' => 45600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Disolvente de pintura …',
                'descripcion' => 'Disolvente de pintura que ofrece muchas opciones para limpieza. Puedes limpiar pinceles o eliminar grasa y suciedad de diferentes materiales',
                'precio_unitario' => 94600.0,
                'unidad_de_medida' => 'Litro',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Memoria extraíble …',
                'descripcion' => 'Memoria extraíble micro SD',
                'precio_unitario' => 123400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Memorias USB 32 …',
                'descripcion' => 'Memorias USB 32 Gigas Unidad',
                'precio_unitario' => 19800.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Sacapuntas manual …',
                'descripcion' => 'Sacapuntas manual (Caja por 24 unidades)',
                'precio_unitario' => 11900.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CINTA DE ENMASCARAR …',
                'descripcion' => 'CINTA DE ENMASCARAR DE 1" X 40 METROS ROLLO',
                'precio_unitario' => 10000.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Resma de papel …',
                'descripcion' => 'Resma de papel tamaño carta. 75 gr x 500 hojas',
                'precio_unitario' => 24900.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Toner para plotter …',
                'descripcion' => 'Toner para plotter de acuerdo a especificación de equipo (Cartucho de tinta Latex HP 831A negro de 775 ml',
                'precio_unitario' => 1201600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Toner para plotter …',
                'descripcion' => 'Toner para plotter de acuerdo a especificación de equipo (Cartucho de tinta Latex HP 831A cian de 775 ml',
                'precio_unitario' => 1201600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Toner para plotter …',
                'descripcion' => 'Toner para plotter de acuerdo a especificación de equipo (Cartucho de tinta Latex HP 831A magenta de 775 ml',
                'precio_unitario' => 1201600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Toner para plotter …',
                'descripcion' => 'Toner para plotter de acuerdo a especificación de equipo (Cartucho de tinta Latex HP 831A amarillo de 775 ml',
                'precio_unitario' => 1201600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Toner para plotter …',
                'descripcion' => 'Toner para plotter de acuerdo a especificación de equipo (Cartucho de tinta Latex HP 831A cian claro de 775 ml',
                'precio_unitario' => 1201600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'LAMINA DE ACRILICO …',
                'descripcion' => 'LAMINA DE ACRILICO DE 2 mm CRISTAL / OPAL/MATE 1000 X 2000 mm (Apto para corte laser)',
                'precio_unitario' => 365800.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'VINILO DE COLORES …',
                'descripcion' => 'VINILO DE COLORES (VARIOS) BRILLANTES ARCLAD PARA PLOTTER DE CORTE ANCHO DE 0.61 metrost Rollo de 50 metros',
                'precio_unitario' => 658400.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'VINILO DE COLORES …',
                'descripcion' => 'VINILO DE COLORES (VARIOS) MATE ARCLAD PARA PLOTTER DE CORTE ANCHO DE 0.61 metrost Rollo de 50 metros',
                'precio_unitario' => 699600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Guante Vinilo Talla …',
                'descripcion' => 'Guante Vinilo Talla Única x 100 Und Eterna',
                'precio_unitario' => 104900.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Alcohol anticeptico …',
                'descripcion' => 'Alcohol anticeptico al 70%',
                'precio_unitario' => 22600.00,
                'unidad_de_medida' => 'Litro',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ALCOHOL ETILICO …',
                'descripcion' => 'ALCOHOL ETILICO INDUSTRIAL GRADO B 96° ',
                'precio_unitario' => 30800.0,
                'unidad_de_medida' => 'Litro',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Plancha de papel …',
                'descripcion' => 'Plancha de papel rígido grano fino para dibujo técnico Din A4 paquete x 20 hojas',
                'precio_unitario' => 28800.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Plancha de papel …',
                'descripcion' => 'Plancha de papel rígido grano fino para dibujo técnico Din A3 paquete x 20 hojas',
                'precio_unitario' => 65800.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'La película FBA, …',
                'descripcion' => 'La película FBA, FEP o NFEP  - Lámina transparente multicapa colocada sobre el tanque de resina para impresoras estereolitografías SLA, SLS, DLP, LCD con luz UV en el que se curar la resina líquida en el proceso de impresión. 200 x 260 mm. Según especificaciones del equipo de impresión 3D',
                'precio_unitario' => 164600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Resina liquida …',
                'descripcion' => 'Resina liquida de fotopolímero de curado rápido con luz UV de alta precisión de 405 nanómetros para impresión estereolitografías SLA, SLS, DLP o LCD  compatible con el equipo impresión 3D Anycubic',
                'precio_unitario' => 201600.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Resina liquida …',
                'descripcion' => 'Resina liquida de fotopolímero de curado rápido con UV de alta precisión flexible y de alta resistencia para impresión estereolitografías SLA, SLS, DLP, LCD en el compatible con el equipo impresión 3D Anycubic',
                'precio_unitario' => 325500.0,
                'unidad_de_medida' => 'Kilogramo ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Kit de postproceso …',
                'descripcion' => 'Kit de postproceso de curado UV y limpieza de resinas fotosensibles para prototipado rápido por esterolotograficas incluye lavado y curado según requerimientos del equipo compatible la impresora 3D Anycubic',
                'precio_unitario' => 2116600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Laminas - Placa …',
                'descripcion' => 'Laminas - Placa de construcción para impresión 3D por  FDM que costa de plataforma de acero flexible pintado en polvo con superficie PEI texturizada y mas la lamina magnética con dimensiones y tamaño compatible con el equipo impresión 3D Crelity Halod Merge',
                'precio_unitario' => 720100.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'Boquillas para …',
                'descripcion' => 'Boquillas para impresión por FDM compatible con el equipo impresión 3D Crelity en Acero endurecido, Acero inoxidable,  resistente al desgaste de dimenciones 0.2 0.3 0.4 0.5 0.6 0.8 0.039 in',
                'precio_unitario' => 164600.0,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
        ];

        foreach ($elementos as $elemento) {
            Elemento::create($elemento);
        }
    }
}