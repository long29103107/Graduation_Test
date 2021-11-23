<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductSeeder extends Seeder
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
                'category_id' => '1',
                'name' => 'ÁO HOODIE NAM AHHTK103',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>190000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'category_id' => '1',
                'name' => 'ÁO KHOÁC NAM KNMTK102',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>250000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 2
            ],
            [
                'category_id' => '1',
                'name' => 'ÁO PHONG NAM APHTK251',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=> 150000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 3
            ],
            [
                'category_id' => '1',
                'name' => 'ÁO POLO NAM POMTK222',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>180000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 4
            ],
            [
                'category_id' => '1',
                'name' => 'ÁO SƠ MI NAM HOẠ TIẾT SHNTK219-6',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>200000,
                'status'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //5
            ],
            [
                'category_id' => '1',
                'name' => 'QUẦN ÂU NAM QACTK203',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>300000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 6
            ],
            [
                'category_id' => '1',
                'name' => 'QUẦN JEANS NAM QJDTK211',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>400000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 7
            ],
            [
                'category_id' => '1',
                'name' => 'QUẦN JOGGER KAKI NAM QGGTK104',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=> 350000,
                'status'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 8
            ],
            [
                'category_id' => '1',
                'name' => 'QUẦN KAKI NAM QKBTK202',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>250000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 9
            ],
            [
                'category_id' => '1',
                'name' => 'QUẦN SORT NAM QSKTK202',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>320000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 10
            ],

             //Đồ nữ
             [
                'category_id' => '2',
                'name' => 'ÁO KIỂU VẠT XÉO TAY DÀI',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>190000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //1
            ],
            [
                'category_id' => '2',
                'name' => 'ÁO SƠ MI NỮ KẺ SỌC XANH TRẮNG',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>250000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 2
            ],
            [
                'category_id' => '2',
                'name' => 'ÁO THUN BẺ CỔ GUCCI',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=> 150000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 3
            ],
            [
                'category_id' => '2',
                'name' => 'CHÂN VÁY JEANS RÁCH',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>180000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 4
            ],
            [
                'category_id' => '2',
                'name' => 'ĐẦM HITZZ TÁCH TAY DÀI',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>200000,
                'status'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                //5
            ],
            [
                'category_id' => '2',
                'name' => 'ĐẦM XOÈ TAY LỠ',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>300000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 6
            ],
            [
                'category_id' => '2',
                'name' => 'ĐẦM XOÈ TAY PHỒNG PHỐI NỠ',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>400000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 7
            ],
            [
                'category_id' => '2',
                'name' => 'QUẦN BÒ ỐNG RỘNG 2 BÊN',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=> 350000,
                'status'=>'1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 8
            ],
            [
                'category_id' => '2',
                'name' => 'QUẦN TÂY NỮA NÚT LAI',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>250000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 9
            ],
            [
                'category_id' => '2',
                'name' => 'SET ĐẦM YẾM',
                'description' => '<ul>
                <li>Chất liệu: Vải cao cấp</li>
                <li>M&agrave;u: n&acirc;u, cam, xanh t&iacute;m than</li>
                <li>Size: S - M - L - XL</li>
                <li>Sản phẩm đ&atilde; c&oacute; mặt ở to&agrave;n bộ c&aacute;c cửa h&agrave;ng tr&ecirc;n hệ thống</li>
                </ul>',
                'price'=>320000,
                'status'=>'1', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
                // 10
            ],
        ];
        DB::table('products')->insert($data);
    }
}
