<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_wallets',
                'table_name' => 'wallets',
                'created_at' => '2021-08-07 19:37:16',
                'updated_at' => '2021-08-07 19:37:16',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_wallets',
                'table_name' => 'wallets',
                'created_at' => '2021-08-07 19:37:16',
                'updated_at' => '2021-08-07 19:37:16',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_wallets',
                'table_name' => 'wallets',
                'created_at' => '2021-08-07 19:37:16',
                'updated_at' => '2021-08-07 19:37:16',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_wallets',
                'table_name' => 'wallets',
                'created_at' => '2021-08-07 19:37:16',
                'updated_at' => '2021-08-07 19:37:16',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_wallets',
                'table_name' => 'wallets',
                'created_at' => '2021-08-07 19:37:16',
                'updated_at' => '2021-08-07 19:37:16',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_attachments',
                'table_name' => 'attachments',
                'created_at' => '2021-08-07 20:16:55',
                'updated_at' => '2021-08-07 20:16:55',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_attachments',
                'table_name' => 'attachments',
                'created_at' => '2021-08-07 20:16:55',
                'updated_at' => '2021-08-07 20:16:55',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_attachments',
                'table_name' => 'attachments',
                'created_at' => '2021-08-07 20:16:55',
                'updated_at' => '2021-08-07 20:16:55',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_attachments',
                'table_name' => 'attachments',
                'created_at' => '2021-08-07 20:16:55',
                'updated_at' => '2021-08-07 20:16:55',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_attachments',
                'table_name' => 'attachments',
                'created_at' => '2021-08-07 20:16:55',
                'updated_at' => '2021-08-07 20:16:55',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_notifications',
                'table_name' => 'notifications',
                'created_at' => '2021-08-07 20:19:11',
                'updated_at' => '2021-08-07 20:19:11',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_notifications',
                'table_name' => 'notifications',
                'created_at' => '2021-08-07 20:19:11',
                'updated_at' => '2021-08-07 20:19:11',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_notifications',
                'table_name' => 'notifications',
                'created_at' => '2021-08-07 20:19:11',
                'updated_at' => '2021-08-07 20:19:11',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_notifications',
                'table_name' => 'notifications',
                'created_at' => '2021-08-07 20:19:11',
                'updated_at' => '2021-08-07 20:19:11',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_notifications',
                'table_name' => 'notifications',
                'created_at' => '2021-08-07 20:19:11',
                'updated_at' => '2021-08-07 20:19:11',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_post_comments',
                'table_name' => 'post_comments',
                'created_at' => '2021-08-07 20:20:55',
                'updated_at' => '2021-08-07 20:20:55',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_post_comments',
                'table_name' => 'post_comments',
                'created_at' => '2021-08-07 20:20:55',
                'updated_at' => '2021-08-07 20:20:55',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_post_comments',
                'table_name' => 'post_comments',
                'created_at' => '2021-08-07 20:20:55',
                'updated_at' => '2021-08-07 20:20:55',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_post_comments',
                'table_name' => 'post_comments',
                'created_at' => '2021-08-07 20:20:55',
                'updated_at' => '2021-08-07 20:20:55',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_post_comments',
                'table_name' => 'post_comments',
                'created_at' => '2021-08-07 20:20:55',
                'updated_at' => '2021-08-07 20:20:55',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-08-07 20:22:37',
                'updated_at' => '2021-08-07 20:22:37',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-08-07 20:22:37',
                'updated_at' => '2021-08-07 20:22:37',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-08-07 20:22:37',
                'updated_at' => '2021-08-07 20:22:37',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-08-07 20:22:37',
                'updated_at' => '2021-08-07 20:22:37',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-08-07 20:22:37',
                'updated_at' => '2021-08-07 20:22:37',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_reactions',
                'table_name' => 'reactions',
                'created_at' => '2021-08-07 20:24:58',
                'updated_at' => '2021-08-07 20:24:58',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_reactions',
                'table_name' => 'reactions',
                'created_at' => '2021-08-07 20:24:58',
                'updated_at' => '2021-08-07 20:24:58',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_reactions',
                'table_name' => 'reactions',
                'created_at' => '2021-08-07 20:24:58',
                'updated_at' => '2021-08-07 20:24:58',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_reactions',
                'table_name' => 'reactions',
                'created_at' => '2021-08-07 20:24:58',
                'updated_at' => '2021-08-07 20:24:58',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_reactions',
                'table_name' => 'reactions',
                'created_at' => '2021-08-07 20:24:58',
                'updated_at' => '2021-08-07 20:24:58',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_subscriptions',
                'table_name' => 'subscriptions',
                'created_at' => '2021-08-07 20:25:32',
                'updated_at' => '2021-08-07 20:25:32',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_subscriptions',
                'table_name' => 'subscriptions',
                'created_at' => '2021-08-07 20:25:32',
                'updated_at' => '2021-08-07 20:25:32',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_subscriptions',
                'table_name' => 'subscriptions',
                'created_at' => '2021-08-07 20:25:32',
                'updated_at' => '2021-08-07 20:25:32',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_subscriptions',
                'table_name' => 'subscriptions',
                'created_at' => '2021-08-07 20:25:32',
                'updated_at' => '2021-08-07 20:25:32',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_subscriptions',
                'table_name' => 'subscriptions',
                'created_at' => '2021-08-07 20:25:32',
                'updated_at' => '2021-08-07 20:25:32',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-08-07 20:26:33',
                'updated_at' => '2021-08-07 20:26:33',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-08-07 20:26:33',
                'updated_at' => '2021-08-07 20:26:33',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-08-07 20:26:33',
                'updated_at' => '2021-08-07 20:26:33',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-08-07 20:26:33',
                'updated_at' => '2021-08-07 20:26:33',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_transactions',
                'table_name' => 'transactions',
                'created_at' => '2021-08-07 20:26:33',
                'updated_at' => '2021-08-07 20:26:33',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'browse_user_bookmarks',
                'table_name' => 'user_bookmarks',
                'created_at' => '2021-08-07 20:27:47',
                'updated_at' => '2021-08-07 20:27:47',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'read_user_bookmarks',
                'table_name' => 'user_bookmarks',
                'created_at' => '2021-08-07 20:27:47',
                'updated_at' => '2021-08-07 20:27:47',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'edit_user_bookmarks',
                'table_name' => 'user_bookmarks',
                'created_at' => '2021-08-07 20:27:47',
                'updated_at' => '2021-08-07 20:27:47',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'add_user_bookmarks',
                'table_name' => 'user_bookmarks',
                'created_at' => '2021-08-07 20:27:47',
                'updated_at' => '2021-08-07 20:27:47',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'delete_user_bookmarks',
                'table_name' => 'user_bookmarks',
                'created_at' => '2021-08-07 20:27:47',
                'updated_at' => '2021-08-07 20:27:47',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'browse_user_lists',
                'table_name' => 'user_lists',
                'created_at' => '2021-08-07 20:28:45',
                'updated_at' => '2021-08-07 20:28:45',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'read_user_lists',
                'table_name' => 'user_lists',
                'created_at' => '2021-08-07 20:28:45',
                'updated_at' => '2021-08-07 20:28:45',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'edit_user_lists',
                'table_name' => 'user_lists',
                'created_at' => '2021-08-07 20:28:45',
                'updated_at' => '2021-08-07 20:28:45',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'add_user_lists',
                'table_name' => 'user_lists',
                'created_at' => '2021-08-07 20:28:45',
                'updated_at' => '2021-08-07 20:28:45',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'delete_user_lists',
                'table_name' => 'user_lists',
                'created_at' => '2021-08-07 20:28:45',
                'updated_at' => '2021-08-07 20:28:45',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'browse_user_list_members',
                'table_name' => 'user_list_members',
                'created_at' => '2021-08-07 20:29:07',
                'updated_at' => '2021-08-07 20:29:07',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'read_user_list_members',
                'table_name' => 'user_list_members',
                'created_at' => '2021-08-07 20:29:07',
                'updated_at' => '2021-08-07 20:29:07',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'edit_user_list_members',
                'table_name' => 'user_list_members',
                'created_at' => '2021-08-07 20:29:07',
                'updated_at' => '2021-08-07 20:29:07',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'add_user_list_members',
                'table_name' => 'user_list_members',
                'created_at' => '2021-08-07 20:29:07',
                'updated_at' => '2021-08-07 20:29:07',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'delete_user_list_members',
                'table_name' => 'user_list_members',
                'created_at' => '2021-08-07 20:29:07',
                'updated_at' => '2021-08-07 20:29:07',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'browse_user_messages',
                'table_name' => 'user_messages',
                'created_at' => '2021-08-07 20:42:32',
                'updated_at' => '2021-08-07 20:42:32',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'read_user_messages',
                'table_name' => 'user_messages',
                'created_at' => '2021-08-07 20:42:32',
                'updated_at' => '2021-08-07 20:42:32',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'edit_user_messages',
                'table_name' => 'user_messages',
                'created_at' => '2021-08-07 20:42:32',
                'updated_at' => '2021-08-07 20:42:32',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'add_user_messages',
                'table_name' => 'user_messages',
                'created_at' => '2021-08-07 20:42:32',
                'updated_at' => '2021-08-07 20:42:32',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'delete_user_messages',
                'table_name' => 'user_messages',
                'created_at' => '2021-08-07 20:42:32',
                'updated_at' => '2021-08-07 20:42:32',
            ),
            86 => 
            array (
                'id' => 87,
                'key' => 'browse_withdrawals',
                'table_name' => 'withdrawals',
                'created_at' => '2021-08-07 20:51:14',
                'updated_at' => '2021-08-07 20:51:14',
            ),
            87 => 
            array (
                'id' => 88,
                'key' => 'read_withdrawals',
                'table_name' => 'withdrawals',
                'created_at' => '2021-08-07 20:51:14',
                'updated_at' => '2021-08-07 20:51:14',
            ),
            88 => 
            array (
                'id' => 89,
                'key' => 'edit_withdrawals',
                'table_name' => 'withdrawals',
                'created_at' => '2021-08-07 20:51:14',
                'updated_at' => '2021-08-07 20:51:14',
            ),
            89 => 
            array (
                'id' => 90,
                'key' => 'add_withdrawals',
                'table_name' => 'withdrawals',
                'created_at' => '2021-08-07 20:51:14',
                'updated_at' => '2021-08-07 20:51:14',
            ),
            90 => 
            array (
                'id' => 91,
                'key' => 'delete_withdrawals',
                'table_name' => 'withdrawals',
                'created_at' => '2021-08-07 20:51:14',
                'updated_at' => '2021-08-07 20:51:14',
            ),
            91 => 
            array (
                'id' => 92,
                'key' => 'browse_countries',
                'table_name' => 'countries',
                'created_at' => '2021-09-21 18:10:16',
                'updated_at' => '2021-09-21 18:10:16',
            ),
            92 => 
            array (
                'id' => 93,
                'key' => 'read_countries',
                'table_name' => 'countries',
                'created_at' => '2021-09-21 18:10:16',
                'updated_at' => '2021-09-21 18:10:16',
            ),
            93 => 
            array (
                'id' => 94,
                'key' => 'edit_countries',
                'table_name' => 'countries',
                'created_at' => '2021-09-21 18:10:16',
                'updated_at' => '2021-09-21 18:10:16',
            ),
            94 => 
            array (
                'id' => 95,
                'key' => 'add_countries',
                'table_name' => 'countries',
                'created_at' => '2021-09-21 18:10:16',
                'updated_at' => '2021-09-21 18:10:16',
            ),
            95 => 
            array (
                'id' => 96,
                'key' => 'delete_countries',
                'table_name' => 'countries',
                'created_at' => '2021-09-21 18:10:16',
                'updated_at' => '2021-09-21 18:10:16',
            ),
            96 => 
            array (
                'id' => 97,
                'key' => 'browse_taxes',
                'table_name' => 'taxes',
                'created_at' => '2021-09-21 18:11:55',
                'updated_at' => '2021-09-21 18:11:55',
            ),
            97 => 
            array (
                'id' => 98,
                'key' => 'read_taxes',
                'table_name' => 'taxes',
                'created_at' => '2021-09-21 18:11:55',
                'updated_at' => '2021-09-21 18:11:55',
            ),
            98 => 
            array (
                'id' => 99,
                'key' => 'edit_taxes',
                'table_name' => 'taxes',
                'created_at' => '2021-09-21 18:11:55',
                'updated_at' => '2021-09-21 18:11:55',
            ),
            99 => 
            array (
                'id' => 100,
                'key' => 'add_taxes',
                'table_name' => 'taxes',
                'created_at' => '2021-09-21 18:11:55',
                'updated_at' => '2021-09-21 18:11:55',
            ),
            100 => 
            array (
                'id' => 101,
                'key' => 'delete_taxes',
                'table_name' => 'taxes',
                'created_at' => '2021-09-21 18:11:55',
                'updated_at' => '2021-09-21 18:11:55',
            ),
            101 => 
            array (
                'id' => 102,
                'key' => 'browse_public_pages',
                'table_name' => 'public_pages',
                'created_at' => '2021-09-29 19:43:27',
                'updated_at' => '2021-09-29 19:43:27',
            ),
            102 => 
            array (
                'id' => 103,
                'key' => 'read_public_pages',
                'table_name' => 'public_pages',
                'created_at' => '2021-09-29 19:43:27',
                'updated_at' => '2021-09-29 19:43:27',
            ),
            103 => 
            array (
                'id' => 104,
                'key' => 'edit_public_pages',
                'table_name' => 'public_pages',
                'created_at' => '2021-09-29 19:43:27',
                'updated_at' => '2021-09-29 19:43:27',
            ),
            104 => 
            array (
                'id' => 105,
                'key' => 'add_public_pages',
                'table_name' => 'public_pages',
                'created_at' => '2021-09-29 19:43:27',
                'updated_at' => '2021-09-29 19:43:27',
            ),
            105 => 
            array (
                'id' => 106,
                'key' => 'delete_public_pages',
                'table_name' => 'public_pages',
                'created_at' => '2021-09-29 19:43:27',
                'updated_at' => '2021-09-29 19:43:27',
            ),
            106 => 
            array (
                'id' => 107,
                'key' => 'browse_user_verifies',
                'table_name' => 'user_verifies',
                'created_at' => '2021-10-20 16:11:44',
                'updated_at' => '2021-10-20 16:11:44',
            ),
            107 => 
            array (
                'id' => 108,
                'key' => 'read_user_verifies',
                'table_name' => 'user_verifies',
                'created_at' => '2021-10-20 16:11:44',
                'updated_at' => '2021-10-20 16:11:44',
            ),
            108 => 
            array (
                'id' => 109,
                'key' => 'edit_user_verifies',
                'table_name' => 'user_verifies',
                'created_at' => '2021-10-20 16:11:44',
                'updated_at' => '2021-10-20 16:11:44',
            ),
            109 => 
            array (
                'id' => 110,
                'key' => 'add_user_verifies',
                'table_name' => 'user_verifies',
                'created_at' => '2021-10-20 16:11:44',
                'updated_at' => '2021-10-20 16:11:44',
            ),
            110 => 
            array (
                'id' => 111,
                'key' => 'delete_user_verifies',
                'table_name' => 'user_verifies',
                'created_at' => '2021-10-20 16:11:44',
                'updated_at' => '2021-10-20 16:11:44',
            ),
            111 => 
            array (
                'id' => 112,
                'key' => 'browse_user_reports',
                'table_name' => 'user_reports',
                'created_at' => '2021-11-05 11:32:40',
                'updated_at' => '2021-11-05 11:32:40',
            ),
            112 => 
            array (
                'id' => 113,
                'key' => 'read_user_reports',
                'table_name' => 'user_reports',
                'created_at' => '2021-11-05 11:32:40',
                'updated_at' => '2021-11-05 11:32:40',
            ),
            113 => 
            array (
                'id' => 114,
                'key' => 'edit_user_reports',
                'table_name' => 'user_reports',
                'created_at' => '2021-11-05 11:32:40',
                'updated_at' => '2021-11-05 11:32:40',
            ),
            114 => 
            array (
                'id' => 115,
                'key' => 'add_user_reports',
                'table_name' => 'user_reports',
                'created_at' => '2021-11-05 11:32:40',
                'updated_at' => '2021-11-05 11:32:40',
            ),
            115 => 
            array (
                'id' => 116,
                'key' => 'delete_user_reports',
                'table_name' => 'user_reports',
                'created_at' => '2021-11-05 11:32:40',
                'updated_at' => '2021-11-05 11:32:40',
            ),
            116 => 
            array (
                'id' => 117,
                'key' => 'browse_contact_messages',
                'table_name' => 'contact_messages',
                'created_at' => '2021-11-19 18:11:33',
                'updated_at' => '2021-11-19 18:11:33',
            ),
            117 => 
            array (
                'id' => 118,
                'key' => 'read_contact_messages',
                'table_name' => 'contact_messages',
                'created_at' => '2021-11-19 18:11:33',
                'updated_at' => '2021-11-19 18:11:33',
            ),
            118 => 
            array (
                'id' => 119,
                'key' => 'edit_contact_messages',
                'table_name' => 'contact_messages',
                'created_at' => '2021-11-19 18:11:33',
                'updated_at' => '2021-11-19 18:11:33',
            ),
            119 => 
            array (
                'id' => 120,
                'key' => 'add_contact_messages',
                'table_name' => 'contact_messages',
                'created_at' => '2021-11-19 18:11:33',
                'updated_at' => '2021-11-19 18:11:33',
            ),
            120 => 
            array (
                'id' => 121,
                'key' => 'delete_contact_messages',
                'table_name' => 'contact_messages',
                'created_at' => '2021-11-19 18:11:33',
                'updated_at' => '2021-11-19 18:11:33',
            ),
            121 => 
            array (
                'id' => 122,
                'key' => 'browse_featured_users',
                'table_name' => 'featured_users',
                'created_at' => '2022-02-01 15:00:11',
                'updated_at' => '2022-02-01 15:00:11',
            ),
            122 => 
            array (
                'id' => 123,
                'key' => 'read_featured_users',
                'table_name' => 'featured_users',
                'created_at' => '2022-02-01 15:00:11',
                'updated_at' => '2022-02-01 15:00:11',
            ),
            123 => 
            array (
                'id' => 124,
                'key' => 'edit_featured_users',
                'table_name' => 'featured_users',
                'created_at' => '2022-02-01 15:00:11',
                'updated_at' => '2022-02-01 15:00:11',
            ),
            124 => 
            array (
                'id' => 125,
                'key' => 'add_featured_users',
                'table_name' => 'featured_users',
                'created_at' => '2022-02-01 15:00:11',
                'updated_at' => '2022-02-01 15:00:11',
            ),
            125 => 
            array (
                'id' => 126,
                'key' => 'delete_featured_users',
                'table_name' => 'featured_users',
                'created_at' => '2022-02-01 15:00:11',
                'updated_at' => '2022-02-01 15:00:11',
            ),
            126 => 
            array (
                'id' => 127,
                'key' => 'browse_payment_requests',
                'table_name' => 'payment_requests',
                'created_at' => '2022-02-06 16:23:24',
                'updated_at' => '2022-02-06 16:23:24',
            ),
            127 => 
            array (
                'id' => 128,
                'key' => 'read_payment_requests',
                'table_name' => 'payment_requests',
                'created_at' => '2022-02-06 16:23:24',
                'updated_at' => '2022-02-06 16:23:24',
            ),
            128 => 
            array (
                'id' => 129,
                'key' => 'edit_payment_requests',
                'table_name' => 'payment_requests',
                'created_at' => '2022-02-06 16:23:24',
                'updated_at' => '2022-02-06 16:23:24',
            ),
            129 => 
            array (
                'id' => 130,
                'key' => 'add_payment_requests',
                'table_name' => 'payment_requests',
                'created_at' => '2022-02-06 16:23:24',
                'updated_at' => '2022-02-06 16:23:24',
            ),
            130 => 
            array (
                'id' => 131,
                'key' => 'delete_payment_requests',
                'table_name' => 'payment_requests',
                'created_at' => '2022-02-06 16:23:24',
                'updated_at' => '2022-02-06 16:23:24',
            ),
            131 => 
            array (
                'id' => 132,
                'key' => 'browse_invoices',
                'table_name' => 'invoices',
                'created_at' => '2022-08-04 19:06:47',
                'updated_at' => '2022-08-04 19:06:47',
            ),
            132 => 
            array (
                'id' => 133,
                'key' => 'read_invoices',
                'table_name' => 'invoices',
                'created_at' => '2022-08-04 19:06:47',
                'updated_at' => '2022-08-04 19:06:47',
            ),
            133 => 
            array (
                'id' => 134,
                'key' => 'edit_invoices',
                'table_name' => 'invoices',
                'created_at' => '2022-08-04 19:06:47',
                'updated_at' => '2022-08-04 19:06:47',
            ),
            134 => 
            array (
                'id' => 135,
                'key' => 'add_invoices',
                'table_name' => 'invoices',
                'created_at' => '2022-08-04 19:06:47',
                'updated_at' => '2022-08-04 19:06:47',
            ),
            135 => 
            array (
                'id' => 136,
                'key' => 'delete_invoices',
                'table_name' => 'invoices',
                'created_at' => '2022-08-04 19:06:47',
                'updated_at' => '2022-08-04 19:06:47',
            ),
            136 => 
            array (
                'id' => 142,
                'key' => 'browse_stream_messages',
                'table_name' => 'stream_messages',
                'created_at' => '2023-06-21 14:48:56',
                'updated_at' => '2023-06-21 14:48:56',
            ),
            137 => 
            array (
                'id' => 143,
                'key' => 'read_stream_messages',
                'table_name' => 'stream_messages',
                'created_at' => '2023-06-21 14:48:56',
                'updated_at' => '2023-06-21 14:48:56',
            ),
            138 => 
            array (
                'id' => 144,
                'key' => 'edit_stream_messages',
                'table_name' => 'stream_messages',
                'created_at' => '2023-06-21 14:48:56',
                'updated_at' => '2023-06-21 14:48:56',
            ),
            139 => 
            array (
                'id' => 145,
                'key' => 'add_stream_messages',
                'table_name' => 'stream_messages',
                'created_at' => '2023-06-21 14:48:56',
                'updated_at' => '2023-06-21 14:48:56',
            ),
            140 => 
            array (
                'id' => 146,
                'key' => 'delete_stream_messages',
                'table_name' => 'stream_messages',
                'created_at' => '2023-06-21 14:48:56',
                'updated_at' => '2023-06-21 14:48:56',
            ),
            141 => 
            array (
                'id' => 147,
                'key' => 'browse_streams',
                'table_name' => 'streams',
                'created_at' => '2023-06-21 15:01:44',
                'updated_at' => '2023-06-21 15:01:44',
            ),
            142 => 
            array (
                'id' => 148,
                'key' => 'read_streams',
                'table_name' => 'streams',
                'created_at' => '2023-06-21 15:01:44',
                'updated_at' => '2023-06-21 15:01:44',
            ),
            143 => 
            array (
                'id' => 149,
                'key' => 'edit_streams',
                'table_name' => 'streams',
                'created_at' => '2023-06-21 15:01:44',
                'updated_at' => '2023-06-21 15:01:44',
            ),
            144 => 
            array (
                'id' => 150,
                'key' => 'add_streams',
                'table_name' => 'streams',
                'created_at' => '2023-06-21 15:01:44',
                'updated_at' => '2023-06-21 15:01:44',
            ),
            145 => 
            array (
                'id' => 151,
                'key' => 'delete_streams',
                'table_name' => 'streams',
                'created_at' => '2023-06-21 15:01:44',
                'updated_at' => '2023-06-21 15:01:44',
            ),
            146 => 
            array (
                'id' => 152,
                'key' => 'browse_referral_code_usages',
                'table_name' => 'referral_code_usages',
                'created_at' => '2023-06-21 16:26:01',
                'updated_at' => '2023-06-21 16:26:01',
            ),
            147 => 
            array (
                'id' => 153,
                'key' => 'read_referral_code_usages',
                'table_name' => 'referral_code_usages',
                'created_at' => '2023-06-21 16:26:01',
                'updated_at' => '2023-06-21 16:26:01',
            ),
            148 => 
            array (
                'id' => 154,
                'key' => 'edit_referral_code_usages',
                'table_name' => 'referral_code_usages',
                'created_at' => '2023-06-21 16:26:01',
                'updated_at' => '2023-06-21 16:26:01',
            ),
            149 => 
            array (
                'id' => 155,
                'key' => 'add_referral_code_usages',
                'table_name' => 'referral_code_usages',
                'created_at' => '2023-06-21 16:26:01',
                'updated_at' => '2023-06-21 16:26:01',
            ),
            150 => 
            array (
                'id' => 156,
                'key' => 'delete_referral_code_usages',
                'table_name' => 'referral_code_usages',
                'created_at' => '2023-06-21 16:26:01',
                'updated_at' => '2023-06-21 16:26:01',
            ),
            151 => 
            array (
                'id' => 157,
                'key' => 'browse_rewards',
                'table_name' => 'rewards',
                'created_at' => '2023-06-21 16:26:04',
                'updated_at' => '2023-06-21 16:26:04',
            ),
            152 => 
            array (
                'id' => 158,
                'key' => 'read_rewards',
                'table_name' => 'rewards',
                'created_at' => '2023-06-21 16:26:04',
                'updated_at' => '2023-06-21 16:26:04',
            ),
            153 => 
            array (
                'id' => 159,
                'key' => 'edit_rewards',
                'table_name' => 'rewards',
                'created_at' => '2023-06-21 16:26:04',
                'updated_at' => '2023-06-21 16:26:04',
            ),
            154 => 
            array (
                'id' => 160,
                'key' => 'add_rewards',
                'table_name' => 'rewards',
                'created_at' => '2023-06-21 16:26:04',
                'updated_at' => '2023-06-21 16:26:04',
            ),
            155 => 
            array (
                'id' => 161,
                'key' => 'delete_rewards',
                'table_name' => 'rewards',
                'created_at' => '2023-06-21 16:26:04',
                'updated_at' => '2023-06-21 16:26:04',
            ),
            156 => 
            array (
                'id' => 162,
                'key' => 'browse_global_announcements',
                'table_name' => 'global_announcements',
                'created_at' => '2024-08-07 17:27:57',
                'updated_at' => '2024-08-07 17:27:57',
            ),
            157 => 
            array (
                'id' => 163,
                'key' => 'read_global_announcements',
                'table_name' => 'global_announcements',
                'created_at' => '2024-08-07 17:27:57',
                'updated_at' => '2024-08-07 17:27:57',
            ),
            158 => 
            array (
                'id' => 164,
                'key' => 'edit_global_announcements',
                'table_name' => 'global_announcements',
                'created_at' => '2024-08-07 17:27:57',
                'updated_at' => '2024-08-07 17:27:57',
            ),
            159 => 
            array (
                'id' => 165,
                'key' => 'add_global_announcements',
                'table_name' => 'global_announcements',
                'created_at' => '2024-08-07 17:27:57',
                'updated_at' => '2024-08-07 17:27:57',
            ),
            160 => 
            array (
                'id' => 166,
                'key' => 'delete_global_announcements',
                'table_name' => 'global_announcements',
                'created_at' => '2024-08-07 17:27:57',
                'updated_at' => '2024-08-07 17:27:57',
            ),
            161 => 
            array (
                'id' => 167,
                'key' => 'browse_polls',
                'table_name' => 'polls',
                'created_at' => '2025-02-04 01:19:37',
                'updated_at' => '2025-02-04 01:19:37',
            ),
            162 => 
            array (
                'id' => 168,
                'key' => 'read_polls',
                'table_name' => 'polls',
                'created_at' => '2025-02-04 01:19:37',
                'updated_at' => '2025-02-04 01:19:37',
            ),
            163 => 
            array (
                'id' => 169,
                'key' => 'edit_polls',
                'table_name' => 'polls',
                'created_at' => '2025-02-04 01:19:37',
                'updated_at' => '2025-02-04 01:19:37',
            ),
            164 => 
            array (
                'id' => 170,
                'key' => 'add_polls',
                'table_name' => 'polls',
                'created_at' => '2025-02-04 01:19:37',
                'updated_at' => '2025-02-04 01:19:37',
            ),
            165 => 
            array (
                'id' => 171,
                'key' => 'delete_polls',
                'table_name' => 'polls',
                'created_at' => '2025-02-04 01:19:37',
                'updated_at' => '2025-02-04 01:19:37',
            ),
            166 => 
            array (
                'id' => 172,
                'key' => 'browse_poll_answers',
                'table_name' => 'poll_answers',
                'created_at' => '2025-02-04 01:20:37',
                'updated_at' => '2025-02-04 01:20:37',
            ),
            167 => 
            array (
                'id' => 173,
                'key' => 'read_poll_answers',
                'table_name' => 'poll_answers',
                'created_at' => '2025-02-04 01:20:37',
                'updated_at' => '2025-02-04 01:20:37',
            ),
            168 => 
            array (
                'id' => 174,
                'key' => 'edit_poll_answers',
                'table_name' => 'poll_answers',
                'created_at' => '2025-02-04 01:20:37',
                'updated_at' => '2025-02-04 01:20:37',
            ),
            169 => 
            array (
                'id' => 175,
                'key' => 'add_poll_answers',
                'table_name' => 'poll_answers',
                'created_at' => '2025-02-04 01:20:37',
                'updated_at' => '2025-02-04 01:20:37',
            ),
            170 => 
            array (
                'id' => 176,
                'key' => 'delete_poll_answers',
                'table_name' => 'poll_answers',
                'created_at' => '2025-02-04 01:20:37',
                'updated_at' => '2025-02-04 01:20:37',
            ),
            171 => 
            array (
                'id' => 177,
                'key' => 'browse_user_taxes',
                'table_name' => 'user_taxes',
                'created_at' => '2025-02-12 16:31:10',
                'updated_at' => '2025-02-12 16:31:10',
            ),
            172 => 
            array (
                'id' => 178,
                'key' => 'read_user_taxes',
                'table_name' => 'user_taxes',
                'created_at' => '2025-02-12 16:31:10',
                'updated_at' => '2025-02-12 16:31:10',
            ),
            173 => 
            array (
                'id' => 179,
                'key' => 'edit_user_taxes',
                'table_name' => 'user_taxes',
                'created_at' => '2025-02-12 16:31:10',
                'updated_at' => '2025-02-12 16:31:10',
            ),
            174 => 
            array (
                'id' => 180,
                'key' => 'add_user_taxes',
                'table_name' => 'user_taxes',
                'created_at' => '2025-02-12 16:31:10',
                'updated_at' => '2025-02-12 16:31:10',
            ),
            175 => 
            array (
                'id' => 181,
                'key' => 'delete_user_taxes',
                'table_name' => 'user_taxes',
                'created_at' => '2025-02-12 16:31:10',
                'updated_at' => '2025-02-12 16:31:10',
            ),
            176 => 
            array (
                'id' => 187,
                'key' => 'browse_user_genders',
                'table_name' => 'user_genders',
                'created_at' => '2025-03-26 18:14:42',
                'updated_at' => '2025-03-26 18:14:42',
            ),
            177 => 
            array (
                'id' => 188,
                'key' => 'read_user_genders',
                'table_name' => 'user_genders',
                'created_at' => '2025-03-26 18:14:42',
                'updated_at' => '2025-03-26 18:14:42',
            ),
            178 => 
            array (
                'id' => 189,
                'key' => 'edit_user_genders',
                'table_name' => 'user_genders',
                'created_at' => '2025-03-26 18:14:42',
                'updated_at' => '2025-03-26 18:14:42',
            ),
            179 => 
            array (
                'id' => 190,
                'key' => 'add_user_genders',
                'table_name' => 'user_genders',
                'created_at' => '2025-03-26 18:14:42',
                'updated_at' => '2025-03-26 18:14:42',
            ),
            180 => 
            array (
                'id' => 191,
                'key' => 'delete_user_genders',
                'table_name' => 'user_genders',
                'created_at' => '2025-03-26 18:14:42',
                'updated_at' => '2025-03-26 18:14:42',
            ),
        ));
        
        
    }
}