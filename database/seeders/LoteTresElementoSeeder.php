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
        $categoria = Categoria::where('nombre', 'LOTE 3: BISUTERÍA')->first();

        if (!$categoria) {
            // Maneja el error si la categoría no existe
            $this->command->info('La categoría "LOTE 3: BISUTERÍA" no fue encontrada. Por favor, crea la categoría primero.');
            return;
        }

        $elementos = [
            [
                'nombre' => 'AGUJA PLANA MOSTACILLERA …',
                'descripcion' => 'AGUJA PLANA MOSTACILLERA QUE ABRE A LA MITAD DE 0.5MM PAQUETE X 3',
                'precio_unitario' => 9408.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ALICATE CORTAFRIO …',
                'descripcion' => 'ALICATE CORTAFRIO ACERO INOXIDABLE.  ACABADO PULIDO A MANO. TAMAÑO: 11.5 CM. EMPUÑADURA DE PVC.',
                'precio_unitario' => 60270.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ALICATE MEDIA LUNA …',
                'descripcion' => 'ALICATE MEDIA LUNA ACERO INOXIDABLE.  ACABADO PULIDO A MANO. TAMAÑO: 11.5 CM. EMPUÑADURA DE PVC.',
                'precio_unitario' => 60270.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ALICATE PLANO ACERO …',
                'descripcion' => 'ALICATE PLANO ACERO INOXIDABLE.  ACABADO PULIDO A MANO. TAMAÑO: 11.5 CM. EMPUÑADURA DE PVC.',
                'precio_unitario' => 60270.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ALICATE PUNTA PLANA …',
                'descripcion' => 'ALICATE PUNTA PLANA CURVO ACERO INOXIDABLE.  ACABADO PULIDO A MANO. TAMAÑO: 11.5 CM. EMPUÑADURA DE PVC.',
                'precio_unitario' => 60270.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ALICATE ROSADO …',
                'descripcion' => 'ALICATE ROSADO PUNTA REDONDA  ACERO INOXIDABLE.  ACABADO PULIDO A MANO. TAMAÑO: 11.5 CM. EMPUÑADURA DE PVC.',
                'precio_unitario' => 52234.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ARGOLLA DE ACERO …',
                'descripcion' => 'ARGOLLA DE ACERO TAMAÑO 4MM DELGADA PAQUETE X 100 UNIDADES',
                'precio_unitario' => 48216.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'ARGOLLA DE ACERO …',
                'descripcion' => 'ARGOLLA DE ACERO TAMAÑO 6MM DELGADA PAQUETE X 100 UNIDADES',
                'precio_unitario' => 60368.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BROCHE PICOLORO …',
                'descripcion' => 'BROCHE PICOLORO GOLD FILLED12 MM PAQUETE X 100 UNIDADES',
                'precio_unitario' => 352310.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'BROCHE RIAZA GOLD …',
                'descripcion' => 'BROCHE RIAZA GOLD FILLED 10MM PAQUETE X 100 UNIDADES',
                'precio_unitario' => 651308.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'HILO MIYUKI CARRETE …',
                'descripcion' => 'HILO MIYUKI CARRETE DE 50 MTS COLOR BLANCO # 1',
                'precio_unitario' => 36162.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'HILO MIYUKI CARRETE …',
                'descripcion' => 'HILO MIYUKI CARRETE DE 50 MTS COLOR DORADO # 5',
                'precio_unitario' => 36162.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'HILO MIYUKI CARRETE …',
                'descripcion' => 'HILO MIYUKI CARRETE DE 50 MTS COLOR NEGRO #12',
                'precio_unitario' => 27636.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'HILO NYLON FIRELINE …',
                'descripcion' => 'HILO NYLON FIRELINE CARRETE DE 4LB CRYSTAL',
                'precio_unitario' => 120736.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR AGUAMARINA DB 1576 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 27832.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR AMARILLO DB 1132 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR AMARILLO DB 721 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR AZUL DB- 1577 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 28812.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR AZUL DB-1138 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR AZUL OSCURO FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR BEIGE FRASCO POR 10 GRAMOS',
                'precio_unitario' => 26754.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR BLANCO DB-200 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR CELESTE FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR DORADO DB-1832 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 71736.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR GRIS DB- 2363 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 43610.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR LILA DB- 2138 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 33516.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR MARON CHOCOLATE FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR MARON DB- 653 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 43610.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR MORADO FRASCO POR 10 GRAMOS',
                'precio_unitario' => 45962.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR NARANJA FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR NEGRO DB - 316 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 24892.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR PIEL FRASCO POR 10 GRAMOS',
                'precio_unitario' => 32634.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR PLATA FRASCO POR 10 GRAMOS',
                'precio_unitario' => 37338.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR ROJO DB- 75 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 28812.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR ROSADO DB- 145 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 27832.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR ROSADO DB- 2034 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 31556.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR VERDE LIMON FRASCO POR 10 GRAMOS',
                'precio_unitario' => 31556.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MIYUKI DELICA 11/0 …',
                'descripcion' => 'MIYUKI DELICA 11/0 X GR COLOR VERDE MILITAR FRASCO POR 10 GRAMOS',
                'precio_unitario' => 31164.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR AMARILLO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR AMARILLO PASTEL SATINADO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR AMARILLO SOL PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR AZUL CLARO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR AZUL HORTENSIA PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR AZUL PETROLEO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR BEIGE SATINADO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR DORADO INYECTADO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR GRIS SATINADO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR MORADO PASTEL PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR NARANJA PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR ROJO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR ROSADO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR ROSADO DB- 2034 FRASCO POR 10 GRAMOS',
                'precio_unitario' => 31556.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR VERDE LIMON PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'MOSTACILLA CHECA …',
                'descripcion' => 'MOSTACILLA CHECA PRECIOSA CALIBRADA # 10 COLOR VERDE OSCURO PAQUETE POR LIBRA',
                'precio_unitario' => 133378.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SARTA DE PERLAS …',
                'descripcion' => 'SARTA DE PERLAS DE VIDRIO MULTICOLOR # 4',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SARTA DE PERLAS …',
                'descripcion' => 'SARTA DE PERLAS DE VIDRIO MULTICOLOR # 6',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SEPARADOR BALIN …',
                'descripcion' => 'SEPARADOR BALIN # 4 PLASTIL METAL PAQUETE X 10 GRAMOS',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SEPARADOR BALIN …',
                'descripcion' => 'SEPARADOR BALIN # 6 PLASTIL METAL PAQUETE X 10 GRAMOS',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SEPARADOR CORAZÒN …',
                'descripcion' => 'SEPARADOR CORAZÒN PLASTIL METAL PAQUETE X 10 GRAMOS',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SEPARADOR DONA …',
                'descripcion' => 'SEPARADOR DONA PLASTIL METAL PAQUETE X 5 GRAMOS',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'SEPARADOR FLOR …',
                'descripcion' => 'SEPARADOR FLOR MEDIANA PLASTIL METAL PAQUETE X 10 GRAMOS',
                'precio_unitario' => 5978.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TAPANUDO EN ACERO …',
                'descripcion' => 'TAPANUDO EN ACERO DE 3.5 MM PAQUETE X 100 UNIDADES',
                'precio_unitario' => 193158.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TAPANUDO EN ACERO …',
                'descripcion' => 'TAPANUDO EN ACERO PAQUETE X 100 UNIDADES',
                'precio_unitario' => 193158.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'PINZA PUNTA DE …',
                'descripcion' => 'PINZA PUNTA DE NYLON DE 4,75" FABRICADAS EN ACERO INOXIDABLE.  CON RESORTE DE DOBLE HOJA Y EMPUÑADURA DE PVC',
                'precio_unitario' => 74578.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'HERRAMIENTAS CILÍNDRICAS …',
                'descripcion' => 'HERRAMIENTAS CILÍNDRICAS PARA REDONDEAR ALAMBRE Y METAL. FABRICADO EN ACERO CARBONADO.  PERMITE CREAR ARGOLLAS DESDE 3MM HASTA 10MM.',
                'precio_unitario' => 115542.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'CONO ANILLERO, …',
                'descripcion' => 'CONO ANILLERO, TAMBIÉN LLAMADO CARTABON, PRODUCTO QUE SE UTILIZA EN ALAMBRISMO PARA LA FABRICACIÓN Y MEDICIÓN DE ANILLOS. HECHA EN PLÁSTICO.',
                'precio_unitario' => 56448.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
            [
                'nombre' => 'TELAR AJUSTABLE …',
                'descripcion' => 'TELAR AJUSTABLE PARA MOSTACILLAS, IDEAL PARA REALIZAR TEJIDOS DE PULSERAS. DIMENSIONES: 37CM DE LARGO X 17CM DE ANCHO Y 8CM DE ALTO. ',
                'precio_unitario' => 95452.00,
                'unidad_de_medida' => 'Unidad',
                'categoria_id' => $categoria->id
            ],
        ];

        foreach ($elementos as $elemento) {
            Elemento::create($elemento);
        }
    }
}