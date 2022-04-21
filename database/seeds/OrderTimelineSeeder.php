<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [1, 1, 1, 272, 2, 'Order placed via cash on delivery', '2022-03-23 09:53:46', '', '2022-03-23 09:53:46', '2022-03-23 09:53:46'],
            [2, 2, 1, 96, 2, 'Order placed via cash on delivery', '2022-03-23 09:53:46', '', '2022-03-23 09:53:46', '2022-03-23 09:53:46'],
            [3, 3, 1, 202, 2, 'Order placed via cash on delivery', '2022-03-23 09:53:46', '', '2022-03-23 09:53:46', '2022-03-23 09:53:46'],
            [4, 1, 1, 272, 7, 'Change of delivery address', '2022-03-23 09:54:47', NULL, '2022-03-23 09:54:47', '2022-03-23 09:54:47'],
            [5, 4, 1, 4, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [6, 5, 1, 265, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [7, 6, 1, 30, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [8, 7, 1, 7, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [9, 8, 1, 3, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [10, 9, 1, 34, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [11, 10, 1, 29, 2, 'Order placed via cash on delivery', '2022-03-23 09:59:31', '', '2022-03-23 09:59:31', '2022-03-23 09:59:31'],
            [12, 3, 1, 202, 7, 'Delivery Time is to long', '2022-03-23 10:00:55', NULL, '2022-03-23 10:00:55', '2022-03-23 10:00:55'],
            [13, 9, 1, 34, 7, 'Duplicate Order', '2022-03-23 10:01:15', NULL, '2022-03-23 10:01:15', '2022-03-23 10:01:15'],
            [14, 6, 1, 30, 7, 'Duplicate Order', '2022-03-23 10:01:38', NULL, '2022-03-23 10:01:38', '2022-03-23 10:01:38'],
            [15, 7, 1, 7, 7, 'Decided for alternative Product', '2022-03-23 10:02:01', NULL, '2022-03-23 10:02:01', '2022-03-23 10:02:01'],
            [16, 11, 1, 72, 2, 'Order placed via cash on delivery', '2022-03-23 10:05:08', '', '2022-03-23 10:05:08', '2022-03-23 10:05:08'],
            [17, 12, 1, 95, 2, 'Order placed via cash on delivery', '2022-03-23 10:05:08', '', '2022-03-23 10:05:08', '2022-03-23 10:05:08'],
            [18, 13, 1, 228, 2, 'Order placed via cash on delivery', '2022-03-23 10:05:08', '', '2022-03-23 10:05:08', '2022-03-23 10:05:08'],
            [19, 14, 1, 51, 2, 'Order placed via cash on delivery', '2022-03-23 10:05:08', '', '2022-03-23 10:05:08', '2022-03-23 10:05:08'],
            [20, 11, 1, 72, 7, 'Duplicate Order', '2022-03-23 10:05:27', NULL, '2022-03-23 10:05:27', '2022-03-23 10:05:27'],
            [21, 12, 1, 95, 7, 'Change of mind', '2022-03-23 10:05:40', NULL, '2022-03-23 10:05:40', '2022-03-23 10:05:40'],
            [22, 4, 1, 4, 7, 'Duplicate Order', '2022-03-23 10:05:59', NULL, '2022-03-23 10:05:59', '2022-03-23 10:05:59'],
            [23, 15, 2, 125, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [24, 16, 2, 120, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [25, 17, 2, 123, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [26, 18, 2, 126, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [27, 19, 2, 119, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [28, 20, 2, 116, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [29, 21, 2, 117, 2, 'Order placed via cash on delivery', '2022-03-23 10:27:24', '', '2022-03-23 10:27:24', '2022-03-23 10:27:24'],
            [30, 22, 2, 209, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [31, 23, 2, 90, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [32, 24, 2, 220, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [33, 25, 2, 192, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [34, 26, 2, 30, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [35, 27, 2, 25, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [36, 28, 2, 23, 2, 'Order placed via cash on delivery', '2022-03-23 10:30:34', '', '2022-03-23 10:30:34', '2022-03-23 10:30:34'],
            [37, 17, 2, 123, 7, 'Duplicate Order', '2022-03-23 10:32:43', NULL, '2022-03-23 10:32:43', '2022-03-23 10:32:43'],
            [38, 16, 2, 120, 7, 'Change/Combine Order', '2022-03-23 10:33:42', NULL, '2022-03-23 10:33:42', '2022-03-23 10:33:42'],
            [39, 25, 2, 192, 7, 'Forgot to use Voucher/Voucher Issue', '2022-03-23 10:34:04', NULL, '2022-03-23 10:34:04', '2022-03-23 10:34:04'],
            [40, 15, 2, 125, 1, 'dgffy', '2022-03-23 10:38:18', NULL, '2022-03-23 10:38:18', '2022-03-23 10:38:18'],
            [41, 16, 2, 120, 4, 'dfssdt', '2022-03-23 10:39:28', NULL, '2022-03-23 10:39:29', '2022-03-23 10:39:29'],
            [42, 17, 2, 123, 6, 'gggg', '2022-03-23 10:40:36', NULL, '2022-03-23 10:40:36', '2022-03-23 10:40:36'],
            [43, 20, 2, 116, 4, 'ggggg', '2022-03-23 10:40:48', NULL, '2022-03-23 10:40:48', '2022-03-23 10:40:48'],
            [44, 21, 2, 117, 6, 'tyyyj', '2022-03-23 10:41:02', NULL, '2022-03-23 10:41:02', '2022-03-23 10:41:02'],
            [45, 18, 2, 126, 3, 'fffff', '2022-03-23 10:41:37', NULL, '2022-03-23 10:41:37', '2022-03-23 10:41:37'],
            [46, 29, 3, 133, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [47, 30, 3, 131, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [48, 31, 3, 292, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [49, 32, 3, 68, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [50, 33, 3, 7, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [51, 34, 3, 4, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [52, 35, 3, 10, 2, 'Order placed via cash on delivery', '2022-03-23 10:53:38', '', '2022-03-23 10:53:38', '2022-03-23 10:53:38'],
            [53, 36, 3, 275, 2, 'Order placed via cash on delivery', '2022-03-23 11:00:52', '', '2022-03-23 11:00:52', '2022-03-23 11:00:52'],
            [54, 37, 3, 220, 2, 'srfgf', '2022-03-23 11:06:04', '', '2022-03-23 11:00:53', '2022-03-23 11:06:04'],
            [55, 38, 3, 273, 2, 'Order placed via cash on delivery', '2022-03-23 11:00:53', '', '2022-03-23 11:00:53', '2022-03-23 11:00:53'],
            [56, 39, 3, 30, 2, 'Order placed via cash on delivery', '2022-03-23 11:00:53', '', '2022-03-23 11:00:53', '2022-03-23 11:00:53'],
            [57, 40, 3, 25, 2, 'Order placed via cash on delivery', '2022-03-23 11:00:53', '', '2022-03-23 11:00:53', '2022-03-23 11:00:53'],
            [58, 41, 3, 24, 2, 'Order placed via cash on delivery', '2022-03-23 11:00:53', '', '2022-03-23 11:00:53', '2022-03-23 11:00:53'],
            [59, 42, 3, 19, 2, 'Order placed via cash on delivery', '2022-03-23 11:00:53', '', '2022-03-23 11:00:53', '2022-03-23 11:00:53'],
            [60, 36, 3, 275, 1, 'xffgcmj', '2022-03-23 11:05:42', NULL, '2022-03-23 11:05:42', '2022-03-23 11:05:42'],
            [61, 37, 3, 220, 5, 'rttg', '2022-03-23 11:12:30', NULL, '2022-03-23 11:12:30', '2022-03-23 11:12:30'],
            [62, 41, 3, 24, 6, 'rrrrr', '2022-03-23 11:16:00', NULL, '2022-03-23 11:16:00', '2022-03-23 11:16:00'],
            [63, 39, 3, 30, 5, 'gyyy', '2022-03-23 11:16:40', NULL, '2022-03-23 11:16:40', '2022-03-23 11:16:40'],
            [64, 38, 3, 273, 3, 'r768', '2022-03-23 11:17:01', NULL, '2022-03-23 11:17:01', '2022-03-23 11:17:01'],
            [65, 40, 3, 25, 3, 'dfy', '2022-03-23 11:17:15', NULL, '2022-03-23 11:17:15', '2022-03-23 11:17:15'],
            [66, 42, 3, 19, 1, 'fdy6', '2022-03-23 11:17:30', NULL, '2022-03-23 11:17:30', '2022-03-23 11:17:30'],
            [67, 29, 3, 133, 5, 'erttrt', '2022-03-23 11:18:57', NULL, '2022-03-23 11:18:57', '2022-03-23 11:18:57'],
            [68, 30, 3, 131, 4, 'af', '2022-03-23 11:19:15', NULL, '2022-03-23 11:19:15', '2022-03-23 11:19:15'],
            [69, 33, 3, 7, 4, 'afyrf', '2022-03-23 11:20:04', NULL, '2022-03-23 11:20:04', '2022-03-23 11:20:04'],
            [70, 35, 3, 10, 5, 'rjdtguk', '2022-03-23 11:20:25', NULL, '2022-03-23 11:20:25', '2022-03-23 11:20:25']
        ];

        foreach ($data as $d){
            DB::table('order_timelines')->insert([
                'id' => $d[0],
                'order_detail_id' => $d[1],
                'user_id' => $d[2],
                'product_id' => $d[3],
                'order_stat' => $d[4],
                'order_stat_desc' => $d[5],
                'order_stat_datetime' => $d[6],
                'remarks' => $d[7],
                'created_at' => $d[8],
                'updated_at' => $d[9],
            ]);
        }
    }
}