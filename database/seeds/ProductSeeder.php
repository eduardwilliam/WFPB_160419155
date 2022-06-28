<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'generic_name' => 'hidromorfon',
            'form' => ' patch 12,5 mcg/jam',
            'restriction_formula' => '10 patch/bulan',
            'description' => '',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'fentanil',
            'form' => ' inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => ' Hanya untuk nyeri berat dan 
            harus diberikan oleh tim medis 
            yang dapat melakukan resusitasi.',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'kodein',
            'form' => ' tab 10 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'category_id' => 1,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'ketoprofen',
            'form' => '  sup 100 mg',
            'restriction_formula' => '2 sup/hari, maks 3 
            hari.',
            'description' => 'Untuk nyeri sedang sampai 
            berat pada pasien yang tidak dapat menggunakan analgesik 
            secara oral.',
            'category_id' => 2,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => ' kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'ibuprofen*',
            'form' => ' tab 200 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'kolkisin',
            'form' => ' tab 500 mcg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'category_id' => 3,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'alopurinol ',
            'form' => 'tab 100 mg* ',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'category_id' => 3,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'probenesid',
            'form' => ' tab 500 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'category_id' => 3,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'gabapentin',
            'form' => ' kaps 100 mg',
            'restriction_formula' => ' 60 kaps/bulan.',
            'description' => 'Hanya untuk neuralgia pascaherpes 
            atau nyeri neuropati diabetikum',
            'category_id' => 4,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'amitriptilin',
            'form' => ' tab 25 mg',
            'restriction_formula' => ' 30 tab/bulan.',
            'description' => '',
            'category_id' => 4,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'karbamazepin',
            'form' => ' tab 100 mg',
            'restriction_formula' => ' 60 tab/bulan.',
            'description' => 'Hanya untuk neuralgia trigeminal.',
            'category_id' => 4,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'bupivakain heavy',
            'form' => '  inj 0,5% + glukosa 8%',
            'restriction_formula' => '',
            'description' => 'Khusus untuk analgesia spinal',
            'category_id' => 5,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'ropivakain',
            'form' => ' inj 7,5 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 5,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'lidokain',
            'form' => 'spray topikal 10%',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 5,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'asam pipemidat',
            'form' => ' kaps 400 mg',
            'restriction_formula' => '28 kaps/kasus.',
            'description' => '',
            'category_id' => 6,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'metenamin mandelat (heksamin 
            mandelat)
            asam pipemidat',
            'form' => 'tab sal enterik 500 mg',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 6,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'nitrofurantoin',
            'form' => ' tab 50 mg',
            'restriction_formula' => '28 kaps/kasus.',
            'description' => '',
            'category_id' => 6,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'flukonazol',
            'form' => ' kaps 50 mg',
            'restriction_formula' => '',
            'description' => 'Hanya digunakan untuk kandidiasis 
            sistemik/pada pasien
            immunocompromised',
            'category_id' => 7,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'amfoterisin Bflukonazol',
            'form' => ' inj 5 mg/mL (i.v.) ',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 7,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'griseofulvin',
            'form' => ' tab 125 mg',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 7,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'metronidazol',
            'form' => ' susp 125 mg/5 mL',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 8,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'metronidazol',
            'form' => ' tab 500 mg',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 8,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'metronidazol',
            'form' => ' inf 5 mg/mL',
            'restriction_formula' => ' 3 btl/hari.',
            'description' => '',
            'category_id' => 8,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'asiklovir',
            'form' => 'tab 200 mg',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 9,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'asiklovir',
            'form' => 'tab 400 mg',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 9,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'valasiklovir',
            'form' => 'tab 500 mg',
            'restriction_formula' => '',
            'description' => '',
            'category_id' => 9,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'klindamisin',
            'form' => ' kaps 150 mg',
            'restriction_formula' => '4 kaps/hari selama 5 
            hari kecuali untuk 
            toksoplasmosis 
            selama 6 minggu.',
            'description' => '',
            'category_id' => 10,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('products')->insert([
            'generic_name' => 'klindamisin',
            'form' => ' kaps 300 mg',
            'restriction_formula' => '- 4 kaps/hari selama 
            5 hari kecuali untuk 
            toksoplasmosis 8 
            kaps/hari selama 6 
            minggu.
            - untuk abses paru 
            atau empiema: 3-4 
            kaps/hari selama 14 
            hari.',
            'description' => '',
            'category_id' => 10,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
    }
}
