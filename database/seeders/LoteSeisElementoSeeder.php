<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Elemento;
use App\Models\Categoria;

class LoteSeisElementoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Busca la categoría "LOTE 6: SERIGRAFÍA"
        $categoria = Categoria::where('nombre', 'LOTE 6: SERIGRAFÍA')->first();

        if (!$categoria) {
            // Maneja el error si la categoría no existe
            $this->command->info('La categoría "LOTE 6: SERIGRAFÍA" no fue encontrada. Por favor, crea la categoría primero.');
            return;
        }

        $elementos = [
            [
                'nombre' => 'ADHESIVOS PARA …',
                'descripcion' => 'ADHESIVOS PARA PULPOS DE ESTAMPACION',
                'precio_unitario' => 63503.61,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ATOMIZADORES DE …',
                'descripcion' => 'ATOMIZADORES DE BOQUILLA REDONDA',
                'precio_unitario' => 8525.95,
                'unidad_de_medida' => 'UNIDAD ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'AUXILIARES SCREEN …',
                'descripcion' => 'AUXILIARES SCREEN CLEANER BA, HIDRAPLUS',
                'precio_unitario' => 200898.75,
                'unidad_de_medida' => 'GALON',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BASE EXTENDER',
                'descripcion' => 'BASE EXTENDER',
                'precio_unitario' => 194724.79,
                'unidad_de_medida' => 'CUÑETE',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BASTIDORES DE MADERA …',
                'descripcion' => 'BASTIDORES DE MADERA MEDIDA INTERNA 30CM X40CM MEDIDA INTERNA EN CEDRO',
                'precio_unitario' => 26851.83,
                'unidad_de_medida' => 'UN ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BICROMATO DE POTASIO',
                'descripcion' => 'BICROMATO DE POTASIO',
                'precio_unitario' => 129555.20,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BISTURI PROFESIONAL …',
                'descripcion' => 'BISTURI PROFESIONAL HOJILLA DE 1,5 PULGADA',
                'precio_unitario' => 12739.92,
                'unidad_de_medida' => 'UND.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CINTA DE PAPEL …',
                'descripcion' => 'CINTA DE PAPEL 1 PULGADA',
                'precio_unitario' => 9897.94,
                'unidad_de_medida' => 'ROLLO ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CINTA TERMICA PARA …',
                'descripcion' => 'CINTA TERMICA PARA SUBLIMAR',
                'precio_unitario' => 23127.86,
                'unidad_de_medida' => 'ROLLO',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CINTA TRANSPARENTE …',
                'descripcion' => 'CINTA TRANSPARENTE ANCHA X 300 MT',
                'precio_unitario' => 17737.89,
                'unidad_de_medida' => 'ROLLO',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'DISOLVENTE XILOL',
                'descripcion' => 'DISOLVENTE XILOL',
                'precio_unitario' => 81927.49,
                'unidad_de_medida' => 'GALON',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'EMULSION TEXTIL …',
                'descripcion' => 'EMULSION TEXTIL AZUL',
                'precio_unitario' => 873272.58,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ENVASES TRANSPARENTES …',
                'descripcion' => 'ENVASES TRANSPARENTES DE SALSA DE PERROS DE 250 CC',
                'precio_unitario' => 30477.81,
                'unidad_de_medida' => 'UNIDAD ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ESCOBILLIN CAUCHO …',
                'descripcion' => 'ESCOBILLIN CAUCHO POLIURETANO AZUL DUREZA ALTA 70 CON MANGO DE ALUMINIO',
                'precio_unitario' => 779193.16,
                'unidad_de_medida' => 'MT',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ESPATULA METALICA …',
                'descripcion' => 'ESPATULA METALICA DE 5 PULGADAS',
                'precio_unitario' => 13327.92,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ESPATULA PLASTICA …',
                'descripcion' => 'ESPATULA PLASTICA DE 5',
                'precio_unitario' => 7741.95,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GALON DE PLASTISOL …',
                'descripcion' => 'GALON DE PLASTISOL MARQUILLA TRANSPARENTE',
                'precio_unitario' => 341527.88,
                'unidad_de_medida' => 'GALON',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS MILFIGURAS …',
                'descripcion' => 'GLOBOS MILFIGURAS R-160',
                'precio_unitario' => 784.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS MILFIGURAS …',
                'descripcion' => 'GLOBOS MILFIGURAS R-260',
                'precio_unitario' => 980.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS MILFIGURAS …',
                'descripcion' => 'GLOBOS MILFIGURAS R-360',
                'precio_unitario' => 1273.99,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-12',
                'descripcion' => 'GLOBOS R-12',
                'precio_unitario' => 1078.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-12 ESTAMPADO',
                'descripcion' => 'GLOBOS R-12 ESTAMPADO',
                'precio_unitario' => 1763.99,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-12 FORMA …',
                'descripcion' => 'GLOBOS R-12 FORMA CORAZON ROJO',
                'precio_unitario' => 1861.99,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-12 LINKUP',
                'descripcion' => 'GLOBOS R-12 LINKUP',
                'precio_unitario' => 1371.99,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-20',
                'descripcion' => 'GLOBOS R-20',
                'precio_unitario' => 5390.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-20 TRANSPARENTE',
                'descripcion' => 'GLOBOS R-20 TRANSPARENTE',
                'precio_unitario' => 5390.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-40',
                'descripcion' => 'GLOBOS R-40',
                'precio_unitario' => 19109.88,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-40 TRANSPARENTE',
                'descripcion' => 'GLOBOS R-40 TRANSPARENTE',
                'precio_unitario' => 19109.88,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-40 TRANSPARENTE …',
                'descripcion' => 'GLOBOS R-40 TRANSPARENTE ESTAMPADO',
                'precio_unitario' => 23421.85,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-6',
                'descripcion' => 'GLOBOS R-6',
                'precio_unitario' => 588.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GLOBOS R-9',
                'descripcion' => 'GLOBOS R-9',
                'precio_unitario' => 686.00,
                'unidad_de_medida' => 'UNIDAD',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GORRAS PARA SUBLIMAR',
                'descripcion' => 'GORRAS PARA SUBLIMAR',
                'precio_unitario' => 20677.87,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GRADILLA DE LABORATORIO …',
                'descripcion' => 'GRADILLA DE LABORATORIO X 12 PUESTOS',
                'precio_unitario' => 67031.58,
                'unidad_de_medida' => 'UNIDAD ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'GRAPAS PARA …',
                'descripcion' => 'GRAPAS PARA GRAPADORA NEUMATICA  80X10 CAJA X 10.000',
                'precio_unitario' => 24303.85,
                'unidad_de_medida' => 'CAJA',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'IMPRESIÓN DTF MOTIVOS …',
                'descripcion' => 'IMPRESIÓN DTF MOTIVOS VARIOS',
                'precio_unitario' => 0.00,
                'unidad_de_medida' => 'MTS',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'IMPRESIÓN SUBLIMACION …',
                'descripcion' => 'IMPRESIÓN SUBLIMACION  MOTIVOS VARIOS DE 1.60CM',
                'precio_unitario' => 0.00,
                'unidad_de_medida' => 'MTS',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ISORFORONA',
                'descripcion' => 'ISORFORONA',
                'precio_unitario' => 245978.47,
                'unidad_de_medida' => 'GL',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'JERINGAS DE 10 …',
                'descripcion' => 'JERINGAS DE 10 ML',
                'precio_unitario' => 1665.99,
                'unidad_de_medida' => 'UNIDAD ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'JERINGAS DE 5 ML',
                'descripcion' => 'JERINGAS DE 5 ML',
                'precio_unitario' => 1175.99,
                'unidad_de_medida' => 'UNIDAD ',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'LAPICEROS TINTA …',
                'descripcion' => 'LAPICEROS TINTA GEL NEGRO',
                'precio_unitario' => 980.00,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'LIMPIDO (HIPOCLORITO) …',
                'descripcion' => 'LIMPIDO (HIPOCLORITO) AL 15%',
                'precio_unitario' => 43903.73,
                'unidad_de_medida' => 'GL',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MEZCLADORES DE …',
                'descripcion' => 'MEZCLADORES DE PINTURA CON BASE DE CAUCHO',
                'precio_unitario' => 82809.49,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MUSELINA PARA ESTAMPAR …',
                'descripcion' => 'MUSELINA PARA ESTAMPAR DE 1,50 DE ANCHO',
                'precio_unitario' => 53605.67,
                'unidad_de_medida' => 'MT',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MUSG PARA SUBLIMAR',
                'descripcion' => 'MUSG PARA SUBLIMAR',
                'precio_unitario' => 16757.90,
                'unidad_de_medida' => 'UND.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PAPEL FLOCK PARA …',
                'descripcion' => 'PAPEL FLOCK PARA SERIGRAFIA',
                'precio_unitario' => 18423.89,
                'unidad_de_medida' => 'MT',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PAPEL FOIL COLORES …',
                'descripcion' => 'PAPEL FOIL COLORES SURTIDOS PARA SERIGRAFIA',
                'precio_unitario' => 16365.90,
                'unidad_de_medida' => 'MT',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PAPEL PERGAMINO …',
                'descripcion' => 'PAPEL PERGAMINO BASE 90 GRS TAMAÑO OFICIO RESMA DE 100 UNIDADES ',
                'precio_unitario' => 71931.55,
                'unidad_de_medida' => 'RESMA',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PAPEL SILICONADO',
                'descripcion' => 'PAPEL SILICONADO',
                'precio_unitario' => 6075.96,
                'unidad_de_medida' => 'PL.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PEGANTE PREFLEX …',
                'descripcion' => 'PEGANTE PREFLEX PAPE',
                'precio_unitario' => 93001.42,
                'unidad_de_medida' => 'GL',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PIGMENTO LUMINICENTES, …',
                'descripcion' => 'PIGMENTO LUMINICENTES, TONO AZUL ,TONO VERDE',
                'precio_unitario' => 390331.58,
                'unidad_de_medida' => 'LB.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PIGMENTOS LINEA …',
                'descripcion' => 'PIGMENTOS LINEA 300 LILA NEON,MORADO NEON,ROJO, NEON,AZUL NEON',
                'precio_unitario' => 390331.58,
                'unidad_de_medida' => 'LIBRA',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PLASTISOL TRANSPARENTE',
                'descripcion' => 'PLASTISOL TRANSPARENTE',
                'precio_unitario' => 149645.07,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PLASTISOLES SUPER …',
                'descripcion' => 'PLASTISOLES SUPER CUBRIENTE NFT(AMAR , AZUL, ROJO, NEGRO, BLANCO,MAGENTA )',
                'precio_unitario' => 104565.35,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PREFLEX PAPEL',
                'descripcion' => 'PREFLEX PAPEL',
                'precio_unitario' => 93001.42,
                'unidad_de_medida' => 'GALON',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PRENSA DE CALOR …',
                'descripcion' => 'PRENSA DE CALOR PARA GORRAS A 110 V.',
                'precio_unitario' => 1685883.54,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'RESISTENCIA ELECTRICA …',
                'descripcion' => 'RESISTENCIA ELECTRICA PARA MUSG 11 ONZAS',
                'precio_unitario' => 215206.66,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'RETAZOS DE RECORTE …',
                'descripcion' => 'RETAZOS DE RECORTE TELA LANILLA COLOR BLANCO',
                'precio_unitario' => 85357.47,
                'unidad_de_medida' => 'BULTO.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SEDA FINA AMARILLA …',
                'descripcion' => 'SEDA FINA AMARILLA  T-90',
                'precio_unitario' => 168068.96,
                'unidad_de_medida' => 'MT',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'THINER CORRIENTE',
                'descripcion' => 'THINER CORRIENTE',
                'precio_unitario' => 38905.76,
                'unidad_de_medida' => 'GL',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TIJERAS PARA SASTRE …',
                'descripcion' => 'TIJERAS PARA SASTRE INDUSTRIAL  METALICA',
                'precio_unitario' => 163952.98,
                'unidad_de_medida' => 'UN',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TINTA ALTO RELIEVE …',
                'descripcion' => 'TINTA ALTO RELIEVE BASE ACUOSA',
                'precio_unitario' => 106623.34,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TINTAS CIAN, MAGENTA …',
                'descripcion' => 'TINTAS CIAN, MAGENTA AMARILLO, NEGRO, PLOTTER DE SUBLIMACIÓN POR TRANSFERENCIA.  MARCA EPSON REFERENCIA F7170       ',
                'precio_unitario' => 0.00,
                'unidad_de_medida' => 'GL - UND.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TONNER NEGRO IMPRESORA …',
                'descripcion' => 'TONNER NEGRO IMPRESORA MONOCROMATICA LEXMAR ',
                'precio_unitario' => 0.00,
                'unidad_de_medida' => 'UND.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'VARSOL INDUSTRIAL.',
                'descripcion' => 'VARSOL INDUSTRIAL.',
                'precio_unitario' => 79967.50,
                'unidad_de_medida' => 'GL',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'VINILOS TEXTILES …',
                'descripcion' => 'VINILOS TEXTILES ADHESIVO SUBLIMABLES DE SELLADO TERMICO CON EFECTOS HOLOGRAFICOS PARA APLICACIONES TEXTILES.',
                'precio_unitario' => 0.00,
                'unidad_de_medida' => 'ROLLO',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PIGMENTOS PARA …',
                'descripcion' => 'PIGMENTOS PARA BASE EXTENDER BLANCO, NEGRO, AMARILLO, AZUL, ROJO.',
                'precio_unitario' => 100449.38,
                'unidad_de_medida' => 'LIBRA',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BASTIDORES DE MADERA …',
                'descripcion' => 'BASTIDORES DE MADERA MEDIDA INTERNA 100 CM X120 CM MEDIDA INTERNA EN CEDRO.  (4)',
                'precio_unitario' => 196782.78,
                'unidad_de_medida' => 'UND.',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BASE TRANSPARENTE …',
                'descripcion' => 'BASE TRANSPARENTE PARA IMPRESIONES EN PAPEL',
                'precio_unitario' => 57329.64,
                'unidad_de_medida' => 'KG',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PAPEL BOND BLANCO …',
                'descripcion' => 'PAPEL BOND BLANCO TAMAÑO CARTA 75 GR.',
                'precio_unitario' => 25087.84,
                'unidad_de_medida' => 'RESMA',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PAPEL PERIODICO …',
                'descripcion' => 'PAPEL PERIODICO TAMAÑO OFICIO',
                'precio_unitario' => 20677.87,
                'unidad_de_medida' => 'RESMA',
                'categoria_id' => $categoria->id
            ],
        ];

        foreach ($elementos as $elemento) {
            Elemento::create($elemento);
        }
    }
}