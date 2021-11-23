<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            //Đồ Nam
            [
                'product_id' => '1',
                'is_primary' => '1',
                'name' => 'AO_HOODIE_NAM_AHHTK103_1_1.jpg',
                'path'=>'/images/product/AO_HOODIE_NAM_AHHTK103_1_1.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //1
            ],
            [
                'product_id' => '1',
                'is_primary' => '0',
                'name' => 'AO_HOODIE_NAM_AHHTK103_1_1_2.jpg',
                'path'=>'/images/product/AO_HOODIE_NAM_AHHTK103_1_1_2.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //2
            ],
            [
                'product_id' => '1',
                'is_primary' => '0',
                'name' => 'AO_HOODIE_NAM_AHHTK103_2_1_3.jpg',
                'path'=>'/images/product/AO_HOODIE_NAM_AHHTK103_2_1_3.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //3
            ],
            [
                'product_id' => '1',
                'is_primary' => '0',
                'name' => 'AO_HOODIE_NAM_AHHTK103_3_1_4.jpg',
                'path'=>'/images/product/AO_HOODIE_NAM_AHHTK103_3_1_4.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //4
            ],
            [
                'product_id' => '2',
                'is_primary' => '1',
                'name' => 'AO_KHOAC_NAM_KNMTK102_2_5.jpg',
                'path'=>'/images/product/AO_KHOAC_NAM_KNMTK102_2_5.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //5
            ],
            [
                'product_id' => '2',
                'is_primary' => '0',
                'name' => 'AO_KHOAC_NAM_KNMTK102_1_2_6.jpg',
                'path'=>'/images/product/AO_KHOAC_NAM_KNMTK102_1_2_6.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //6
            ],
            [
                'product_id' => '2',
                'is_primary' => '0',
                'name' => 'AO_KHOAC_NAM_KNMTK102_2_2_7.jpg',
                'path'=>'/images/product/AO_KHOAC_NAM_KNMTK102_2_2_7.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //7
            ],
            [
                'product_id' => '2',
                'is_primary' => '0',
                'name' => 'AO_KHOAC_NAM_KNMTK102_3_2_8.jpg',
                'path'=>'/images/product/AO_KHOAC_NAM_KNMTK102_3_2_8.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //8
            ],
            [
                'product_id' => '3',
                'is_primary' => '1',
                'name' => 'AO_PHONG_NAM_APHTK25_2_3_9.jpg',
                'path'=>'/images/product/AO_PHONG_NAM_APHTK25_2_3_9.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //9
            ],
            [
                'product_id' => '3',
                'is_primary' => '0',
                'name' => 'AO_PHONG_NAM_APHTK25_3_3_10.jpg',
                'path'=>'/images/product/AO_PHONG_NAM_APHTK25_3_3_10.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //10
            ],
            [
                'product_id' => '3',
                'is_primary' => '0',
                'name' => 'AO_PHONG_NAM_APHTK251_3_11.jpg',
                'path'=>'/images/product/AO_PHONG_NAM_APHTK251_3_11.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //11
            ],
            [
                'product_id' => '3',
                'is_primary' => '0',
                'name' => 'AO_PHONG_NAM_APHTK251_1_3_12.jpg',
                'path'=>'/images/product/AO_PHONG_NAM_APHTK251_1_3_12.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //12
            ],
            [
                'product_id' => '4',
                'is_primary' => '1',
                'name' => 'AO_POLO_NAM_ POMTK222_4_13.jpg',
                'path'=>'/images/product/AO_POLO_NAM_ POMTK222_4_13.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //13
            ],
            [
                'product_id' => '4',
                'is_primary' => '0',
                'name' => 'AO_POLO_NAM_ POMTK222_1_4_14.jpg',
                'path'=>'/images/product/AO_POLO_NAM_ POMTK222_1_4_14.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //14
            ],
            [
                'product_id' => '4',
                'is_primary' => '0',
                'name' => 'AO_POLO_NAM_ POMTK222_2_4_15.jpg',
                'path'=>'/images/product/AO_POLO_NAM_ POMTK222_2_4_15.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //15
            ],
            [
                'product_id' => '4',
                'is_primary' => '0',
                'name' => 'AO_POLO_NAM_ POMTK222_3_4_16.jpg',
                'path'=>'/images/product/AO_POLO_NAM_ POMTK222_3_4_16.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //16
            ],
            [
                'product_id' => '5',
                'is_primary' => '1',
                'name' => 'AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_5_17.jpg',
                'path'=>'/images/product/AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_5_17.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //17
            ],
            [
                'product_id' => '5',
                'is_primary' => '0',
                'name' => 'AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_1_5_18.jpg',
                'path'=>'/images/product/AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_1_5_18.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //18
            ],
            [
                'product_id' => '5',
                'is_primary' => '0',
                'name' => 'AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_2_5_19.jpg',
                'path'=>'/images/product/AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_2_5_19.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //19
            ],
            [
                'product_id' => '5',
                'is_primary' => '0',
                'name' => 'AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_3_5_20.jpg',
                'path'=>'/images/product/AO_SO_MI_NAM_HOA_TIET_SHNTK219-6_3_5_20.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //20
            ],
            [
                'product_id' => '6',
                'is_primary' => '1',
                'name' => 'QUAN_AU_NAM_QACTK203_6_21.jpg',
                'path'=>'/images/product/QUAN_AU_NAM_QACTK203_6_21.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //21
            ],
            [
                'product_id' => '6',
                'is_primary' => '0',
                'name' => 'QUAN_AU_NAM_QACTK203_1_6_22.jpg',
                'path'=>'/images/product/QUAN_AU_NAM_QACTK203_1_6_22.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //22
            ],
            [
                'product_id' => '6',
                'is_primary' => '0',
                'name' => 'QUAN_AU_NAM_QACTK203_2_6_23.jpg',
                'path'=>'/images/product/QUAN_AU_NAM_QACTK203_2_6_23.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //23
            ],

            [
                'product_id' => '6',
                'is_primary' => '0',
                'name' => 'QUAN_AU_NAM_QACTK203_3_6_24.jpg',
                'path'=>'/images/product/QUAN_AU_NAM_QACTK203_3_6_24.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //24
            ],
            [
                'product_id' => '7',
                'is_primary' => '1',
                'name' => 'QUAN_JEAN_NAM_QJDTK211_7_25.jpg',
                'path'=>'/images/product/QUAN_JEAN_NAM_QJDTK211_7_25.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //25
            ],
            [
                'product_id' => '7',
                'is_primary' => '0',
                'name' => 'QUAN_JEAN_NAM_QJDTK211_1_7_26.jpg',
                'path'=>'/images/product/QUAN_JEAN_NAM_QJDTK211_1_7_26.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //26
            ],
            [
                'product_id' => '7',
                'is_primary' => '0',
                'name' => 'QUAN_JEAN_NAM_QJDTK211_2_7_27.jpg',
                'path'=>'/images/product/QUAN_JEAN_NAM_QJDTK211_2_7_27.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //27
            ],
            [
                'product_id' => '7',
                'is_primary' => '0',
                'name' => 'QUAN_JEAN_NAM_QJDTK211_3_7_28.jpg',
                'path'=>'/images/product/QUAN_JEAN_NAM_QJDTK211_3_7_28.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //28
            ],
            [
                'product_id' => '8',
                'is_primary' => '1',
                'name' => 'QUAN_JOGGER_KAKI_NAM_QGGTK104_8_29.jpg',
                'path'=>'/images/product/QUAN_JOGGER_KAKI_NAM_QGGTK104_8_29.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //29
            ],
            [
                'product_id' => '8',
                'is_primary' => '0',
                'name' => 'QUAN_JOGGER_KAKI_NAM_QGGTK104_1_8_30.jpg',
                'path'=>'/images/product/QUAN_JOGGER_KAKI_NAM_QGGTK104_1_8_30.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //30
            ],
            [
                'product_id' => '8',
                'is_primary' => '0',
                'name' => 'QUAN_JOGGER_KAKI_NAM_QGGTK104_2_8_31.jpg',
                'path'=>'/images/product/QUAN_JOGGER_KAKI_NAM_QGGTK104_2_8_31.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //31
            ],
            [
                'product_id' => '8',
                'is_primary' => '0',
                'name' => 'QUAN_JOGGER_KAKI_NAM_QGGTK104_3_8_32.jpg',
                'path'=>'/images/product/QUAN_JOGGER_KAKI_NAM_QGGTK104_3_8_32.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //32
            ],
            [
                'product_id' => '9',
                'is_primary' => '1',
                'name' => 'QUAN_KAKI_NAM_QKBTK202_9_33.jpg',
                'path'=>'/images/product/QUAN_KAKI_NAM_QKBTK202_9_33.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //33
            ],
            [
                'product_id' => '9',
                'is_primary' => '0',
                'name' => 'QUAN_KAKI_NAM_QKBTK202_1_9_34.jpg',
                'path'=>'/images/product/QUAN_KAKI_NAM_QKBTK202_1_9_34.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //34
            ],
            [
                'product_id' => '9',
                'is_primary' => '0',
                'name' => 'QUAN_KAKI_NAM_QKBTK202_2_9_35.jpg',
                'path'=>'/images/product/QUAN_KAKI_NAM_QKBTK202_2_9_35.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //35
            ],
            [
                'product_id' => '9',
                'is_primary' => '0',
                'name' => 'QUAN_KAKI_NAM_QKBTK202_3_9_36.jpg',
                'path'=>'/images/product/QUAN_KAKI_NAM_QKBTK202_3_9_36.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //36
            ],
            [
                'product_id' => '10',
                'is_primary' => '1',
                'name' => 'QUAN_SHORT_NAM_QSKTK202_10_37.jpg',
                'path'=>'/images/product/QUAN_SHORT_NAM_QSKTK202_10_37.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //37
            ],
            [
                'product_id' => '10',
                'is_primary' => '0',
                'name' => 'QUAN_SHORT_NAM_QSKTK202_1_10_38.jpg',
                'path'=>'/images/product/QUAN_SHORT_NAM_QSKTK202_1_10_38.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //38
            ],
            [
                'product_id' => '10',
                'is_primary' => '0',
                'name' => 'QUAN_SHORT_NAM_QSKTK202_2_10_39.jpg',
                'path'=>'/images/product/QUAN_SHORT_NAM_QSKTK202_2_10_39.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //39
            ],
            [
                'product_id' => '10',
                'is_primary' => '0',
                'name' => 'QUAN_SHORT_NAM_QSKTK202_3_10_40.jpg',
                'path'=>'/images/product/QUAN_SHORT_NAM_QSKTK202_3_10_40.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //40
            ],

             //Đồ Nữ
             [
                'product_id' => '11',
                'is_primary' => '1',
                'name' => '1487259134_ao-kieu-vat-xeo-tay-dai_11_41.png',
                'path'=>'/images/product/1487259134_ao-kieu-vat-xeo-tay-dai_11_41.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //1
            ],
            [
                'product_id' => '11',
                'is_primary' => '0',
                'name' => '11487259135_ao-kieu-vat-xeo-tay-dai-3_11_42.png',
                'path'=>'/images/product/11487259135_ao-kieu-vat-xeo-tay-dai-3_11_42.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //2
            ],
            [
                'product_id' => '11',
                'is_primary' => '0',
                'name' => '21487259135_ao-kieu-vat-xeo-tay-dai-2_11_43.png',
                'path'=>'/images/product/21487259135_ao-kieu-vat-xeo-tay-dai-2_11_43.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //3
            ],
            [
                'product_id' => '11',
                'is_primary' => '0',
                'name' => '31487259135_ao-kieu-vat-xeo-tay-dai-1_11_44.png',
                'path'=>'/images/product/31487259135_ao-kieu-vat-xeo-tay-dai-1_11_44.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //4
            ],
            [
                'product_id' => '12',
                'is_primary' => '1',
                'name' => '1531723460_ao-so-mi-nu-ke-soc-xanh-trang_12_45.png',
                'path'=>'/images/product/1531723460_ao-so-mi-nu-ke-soc-xanh-trang_12_45.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //5
            ],
            [
                'product_id' => '12',
                'is_primary' => '0',
                'name' => '11531723573_ao-so-mi-nu-ke-soc-xanh-trang-3_12_46.png',
                'path'=>'/images/product/11531723573_ao-so-mi-nu-ke-soc-xanh-trang-3_12_46.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //6
            ],
            [
                'product_id' => '12',
                'is_primary' => '0',
                'name' => '21531723573_ao-so-mi-nu-ke-soc-xanh-trang-1_12_47.png',
                'path'=>'/images/product/21531723573_ao-so-mi-nu-ke-soc-xanh-trang-1_12_47.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //7
            ],
            [
                'product_id' => '12',
                'is_primary' => '0',
                'name' => '31531723573_ao-so-mi-nu-ke-soc-xanh-trang-2_12_48.png',
                'path'=>'/images/product/31531723573_ao-so-mi-nu-ke-soc-xanh-trang-2_12_48.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //8
            ],
            [
                'product_id' => '13',
                'is_primary' => '1',
                'name' => '01539681033_ao-thun-nu-co-be-gucci-1_13_49.png',
                'path'=>'/images/product/01539681033_ao-thun-nu-co-be-gucci-1_13_49.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //9
            ],
            [
                'product_id' => '13',
                'is_primary' => '0',
                'name' => '1539681033_ao-thun-nu-co-be-gucci_13_50.png',
                'path'=>'/images/product/1539681033_ao-thun-nu-co-be-gucci_13_50.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //10
            ],
            [
                'product_id' => '13',
                'is_primary' => '0',
                'name' => '21539681033_ao-thun-nu-co-be-gucci-3_13_51.png',
                'path'=>'/images/product/21539681033_ao-thun-nu-co-be-gucci-3_13_51.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //11
            ],
            [
                'product_id' => '13',
                'is_primary' => '0',
                'name' => '31539681033_ao-thun-nu-co-be-gucci-2_13_52.png',
                'path'=>'/images/product/31539681033_ao-thun-nu-co-be-gucci-2_13_52.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //12
            ],
            [
                'product_id' => '14',
                'is_primary' => '1',
                'name' => '1584761966_chan-vay-jean-rach_14_53.jpg',
                'path'=>'/images/product/1584761966_chan-vay-jean-rach_14_53.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //13
            ],
            [
                'product_id' => '14',
                'is_primary' => '0',
                'name' => '01584762321_chan-vay-jean-rach-3_14_54.jpg',
                'path'=>'/images/product/01584762321_chan-vay-jean-rach-3_14_54.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //14
            ],
            [
                'product_id' => '14',
                'is_primary' => '0',
                'name' => '01584762355_chan-vay-jean-rach-2_14_55.jpg',
                'path'=>'/images/product/01584762355_chan-vay-jean-rach-2_14_55.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //15
            ],
            [
                'product_id' => '14',
                'is_primary' => '0',
                'name' => '01584762470_chan-vay-jean-rach-1_14_56.jpg',
                'path'=>'/images/product/01584762470_chan-vay-jean-rach-1_14_56.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //16
            ],
            [
                'product_id' => '15',
                'is_primary' => '1',
                'name' => '01481774748_dam-hitz-dress-dai-tay-3_15_57.png',
                'path'=>'/images/product/01481774748_dam-hitz-dress-dai-tay-3_15_57.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //17
            ],
            [
                'product_id' => '15',
                'is_primary' => '0',
                'name' => '1481774748_dam-hitz-dress-dai-tay_15_58.png',
                'path'=>'/images/product/1481774748_dam-hitz-dress-dai-tay_15_58.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //18
            ],
            [
                'product_id' => '15',
                'is_primary' => '0',
                'name' => '11481774748_dam-hitz-dress-dai-tay-2_15_59.png',
                'path'=>'/images/product/11481774748_dam-hitz-dress-dai-tay-2_15_59.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //19
            ],
            [
                'product_id' => '15',
                'is_primary' => '0',
                'name' => '21481774748_dam-hitz-dress-dai-tay-1_15_60.png',
                'path'=>'/images/product/21481774748_dam-hitz-dress-dai-tay-1_15_60.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //20
            ],
            [
                'product_id' => '16',
                'is_primary' => '1',
                'name' => '1488534323_dam-xoe-tay-lo_16_61.png',
                'path'=>'/images/product/1488534323_dam-xoe-tay-lo_16_61.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //21
            ],
            [
                'product_id' => '16',
                'is_primary' => '0',
                'name' => '11488534323_dam-xoe-tay-lo-3_16_62.png',
                'path'=>'/images/product/11488534323_dam-xoe-tay-lo-3_16_62.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //22
            ],
            [
                'product_id' => '16',
                'is_primary' => '0',
                'name' => '21488534323_dam-xoe-tay-lo-2_16_63.png',
                'path'=>'/images/product/21488534323_dam-xoe-tay-lo-2_16_63.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //23
            ],

            [
                'product_id' => '16',
                'is_primary' => '0',
                'name' => '21488534323_dam-xoe-tay-lo-2_16_80.png',
                'path'=>'/images/product/21488534323_dam-xoe-tay-lo-2_16_80.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //24
            ],
            [
                'product_id' => '17',
                'is_primary' => '1',
                'name' => '01488625433_dam-xoe-tay-phong-phoi-no-3_17_64.png',
                'path'=>'/images/product/01488625433_dam-xoe-tay-phong-phoi-no-3_17_64.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //25
            ],
            [
                'product_id' => '17',
                'is_primary' => '0',
                'name' => '1488625433_dam-xoe-tay-phong-phoi-no_17_65.png',
                'path'=>'/images/product/1488625433_dam-xoe-tay-phong-phoi-no_17_65.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //26
            ],
            [
                'product_id' => '17',
                'is_primary' => '0',
                'name' => '01488625506_dam-xoe-tay-phong-phoi-no-1_17_66.png',
                'path'=>'/images/product/01488625506_dam-xoe-tay-phong-phoi-no-1_17_66.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //27
            ],
            [
                'product_id' => '17',
                'is_primary' => '0',
                'name' => '01488625506_dam-xoe-tay-phong-phoi-no-2_17_67.png',
                'path'=>'/images/product/01488625506_dam-xoe-tay-phong-phoi-no-2_17_67.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //28
            ],
            [
                'product_id' => '18',
                'is_primary' => '1',
                'name' => '01584377150_quan-bo-ong-rong-rach-3_18_68.jpg',
                'path'=>'/images/product/01584377150_quan-bo-ong-rong-rach-3_18_68.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //29
            ],
            [
                'product_id' => '18',
                'is_primary' => '0',
                'name' => '1584377150_quan-bo-ong-rong-rach_18_69.jpg',
                'path'=>'/images/product/1584377150_quan-bo-ong-rong-rach_18_69.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //30
            ],
            [
                'product_id' => '18',
                'is_primary' => '0',
                'name' => '11584377150_quan-bo-ong-rong-rach-2_18_70.jpg',
                'path'=>'/images/product/11584377150_quan-bo-ong-rong-rach-2_18_70.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //31
            ],
            [
                'product_id' => '18',
                'is_primary' => '0',
                'name' => '21584377150_quan-bo-ong-rong-rach-2_18_71.jpg',
                'path'=>'/images/product/21584377150_quan-bo-ong-rong-rach-2_18_71.jpg', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //32
            ],
            [
                'product_id' => '19',
                'is_primary' => '1',
                'name' => '01539681589_quan-tay-nu-nut-lai-3_19_72.png',
                'path'=>'/images/product/01539681589_quan-tay-nu-nut-lai-3_19_72.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //33
            ],
            [
                'product_id' => '19',
                'is_primary' => '0',
                'name' => '1539681589_quan-tay-nu-nut-lai_19_73.png',
                'path'=>'/images/product/1539681589_quan-tay-nu-nut-lai_19_73.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //34
            ],
            [
                'product_id' => '19',
                'is_primary' => '0',
                'name' => '11539681589_quan-tay-nu-nut-lai-2_19_74.png',
                'path'=>'/images/product/11539681589_quan-tay-nu-nut-lai-2_19_74.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //35
            ],
            [
                'product_id' => '19',
                'is_primary' => '0',
                'name' => '31539681589_quan-tay-nu-nut-lai-1_19_75.png',
                'path'=>'/images/product/31539681589_quan-tay-nu-nut-lai-1_19_75.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //36
            ],
            [
                'product_id' => '20',
                'is_primary' => '1',
                'name' => '1488733640_set-dam-yem_20_76.png',
                'path'=>'/images/product/1488733640_set-dam-yem_20_76.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //37
            ],
            [
                'product_id' => '20',
                'is_primary' => '0',
                'name' => '01488785786_set-dam-yem-3_20_77.png',
                'path'=>'/images/product/01488785786_set-dam-yem-3_20_77.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //38
            ],
            [
                'product_id' => '20',
                'is_primary' => '0',
                'name' => '01488785969_set-dam-yem-2_20_78.png',
                'path'=>'/images/product/01488785969_set-dam-yem-2_20_78.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //39
            ],
            [
                'product_id' => '20',
                'is_primary' => '0',
                'name' => '01488786240_set-dam-yem-1_20_79.png',
                'path'=>'/images/product/01488786240_set-dam-yem-1_20_79.png', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //40
            ],
        ];
        DB::table('image_products')->insert($data);
    }
}
