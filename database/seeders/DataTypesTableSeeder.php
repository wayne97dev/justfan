<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'App\\User',
                'policy_name' => 'App\\Policies\\VoyagerUserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2025-01-24 19:18:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2021-08-07 18:52:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\VoyagerRoleController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 18:52:09',
                'updated_at' => '2025-04-29 18:25:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'wallets',
                'slug' => 'wallets',
                'display_name_singular' => 'Wallet',
                'display_name_plural' => 'Wallets',
                'icon' => 'voyager-wallet',
                'model_name' => 'App\\Model\\Wallet',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 19:37:16',
                'updated_at' => '2024-04-30 23:16:27',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'attachments',
                'slug' => 'attachments',
                'display_name_singular' => 'Attachment',
                'display_name_plural' => 'Attachments',
                'icon' => 'voyager-paperclip',
                'model_name' => 'App\\Model\\Attachment',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:16:55',
                'updated_at' => '2024-04-30 23:47:58',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'notifications',
                'slug' => 'notifications',
                'display_name_singular' => 'Notification',
                'display_name_plural' => 'Notifications',
                'icon' => 'voyager-bell',
                'model_name' => 'App\\Model\\Notification',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:19:11',
                'updated_at' => '2024-04-30 23:16:45',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'post_comments',
                'slug' => 'post-comments',
                'display_name_singular' => 'Post Comment',
                'display_name_plural' => 'Post Comments',
                'icon' => 'voyager-bubble',
                'model_name' => 'App\\Model\\PostComment',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:20:55',
                'updated_at' => '2024-04-30 23:48:48',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'posts',
                'slug' => 'user-posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-images',
                'model_name' => 'App\\Model\\Post',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:22:37',
                'updated_at' => '2024-04-30 23:45:47',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'reactions',
                'slug' => 'reactions',
                'display_name_singular' => 'Reaction',
                'display_name_plural' => 'Reactions',
                'icon' => 'voyager-bubble-hear',
                'model_name' => 'App\\Model\\Reaction',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:24:58',
                'updated_at' => '2024-04-30 23:27:48',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'subscriptions',
                'slug' => 'subscriptions',
                'display_name_singular' => 'Subscription',
                'display_name_plural' => 'Subscriptions',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\Model\\Subscription',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:25:32',
                'updated_at' => '2024-05-01 00:01:14',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'transactions',
                'slug' => 'transactions',
                'display_name_singular' => 'Transaction',
                'display_name_plural' => 'Transactions',
                'icon' => 'voyager-dollar',
                'model_name' => 'App\\Model\\Transaction',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:26:33',
                'updated_at' => '2024-05-01 00:14:52',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'user_bookmarks',
                'slug' => 'user-bookmarks',
                'display_name_singular' => 'User Bookmark',
                'display_name_plural' => 'User Bookmarks',
                'icon' => 'voyager-bookmark',
                'model_name' => 'App\\Model\\UserBookmark',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:27:47',
                'updated_at' => '2024-04-30 23:50:11',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'user_lists',
                'slug' => 'user-lists',
                'display_name_singular' => 'User List',
                'display_name_plural' => 'User Lists',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Model\\UserList',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:28:45',
                'updated_at' => '2024-10-15 20:41:53',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'user_list_members',
                'slug' => 'user-list-members',
                'display_name_singular' => 'User List Member',
                'display_name_plural' => 'User List Members',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Model\\UserListMember',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:29:07',
                'updated_at' => '2024-04-30 23:37:48',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'user_messages',
                'slug' => 'user-messages',
                'display_name_singular' => 'User Message',
                'display_name_plural' => 'User Messages',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\Model\\UserMessage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:42:32',
                'updated_at' => '2024-04-30 23:21:13',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => 'withdrawals',
                'slug' => 'withdrawals',
                'display_name_singular' => 'Withdrawal',
                'display_name_plural' => 'Withdrawals',
                'icon' => 'voyager-calendar',
                'model_name' => 'App\\Model\\Withdrawal',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-07 20:51:14',
                'updated_at' => '2025-03-24 15:50:34',
            ),
            16 => 
            array (
                'id' => 20,
                'name' => 'countries',
                'slug' => 'countries',
                'display_name_singular' => 'Country',
                'display_name_plural' => 'Countries',
                'icon' => 'voyager-location',
                'model_name' => 'App\\Model\\Country',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"name","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-09-21 18:10:16',
                'updated_at' => '2021-10-23 20:43:47',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'taxes',
                'slug' => 'taxes',
                'display_name_singular' => 'Tax',
                'display_name_plural' => 'Taxes',
                'icon' => 'voyager-credit-card',
                'model_name' => 'App\\Model\\Tax',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-09-21 18:11:55',
                'updated_at' => '2024-02-27 19:29:00',
            ),
            18 => 
            array (
                'id' => 27,
                'name' => 'public_pages',
                'slug' => 'custom-pages',
                'display_name_singular' => 'Public Page',
                'display_name_plural' => 'Public Pages',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Model\\PublicPage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-09-29 19:43:27',
                'updated_at' => '2025-04-09 18:32:06',
            ),
            19 => 
            array (
                'id' => 28,
                'name' => 'user_verifies',
                'slug' => 'user-verifies',
                'display_name_singular' => 'User Verify',
                'display_name_plural' => 'User Verifies',
                'icon' => 'voyager-check',
                'model_name' => 'App\\Model\\UserVerify',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-10-20 16:11:44',
                'updated_at' => '2024-04-30 22:48:52',
            ),
            20 => 
            array (
                'id' => 29,
                'name' => 'user_reports',
                'slug' => 'user-reports',
                'display_name_singular' => 'User Report',
                'display_name_plural' => 'User Reports',
                'icon' => 'voyager-eye',
                'model_name' => 'App\\Model\\UserReport',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-11-05 11:32:40',
                'updated_at' => '2024-05-09 22:08:46',
            ),
            21 => 
            array (
                'id' => 30,
                'name' => 'contact_messages',
                'slug' => 'contact-messages',
                'display_name_singular' => 'Contact Message',
                'display_name_plural' => 'Contact Messages',
                'icon' => 'voyager-book',
                'model_name' => 'App\\Model\\ContactMessage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-11-19 18:11:33',
                'updated_at' => '2022-06-24 14:53:36',
            ),
            22 => 
            array (
                'id' => 32,
                'name' => 'featured_users',
                'slug' => 'featured-users',
                'display_name_singular' => 'Featured User',
                'display_name_plural' => 'Featured Users',
                'icon' => 'voyager-star',
                'model_name' => 'App\\Model\\FeaturedUser',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-02-01 15:00:10',
                'updated_at' => '2024-04-22 15:03:58',
            ),
            23 => 
            array (
                'id' => 33,
                'name' => 'payment_requests',
                'slug' => 'payment-requests',
                'display_name_singular' => 'Payment Request',
                'display_name_plural' => 'Payment Requests',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Model\\PaymentRequest',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-02-06 16:23:24',
                'updated_at' => '2024-05-01 00:18:22',
            ),
            24 => 
            array (
                'id' => 34,
                'name' => 'invoices',
                'slug' => 'invoices',
                'display_name_singular' => 'Invoice',
                'display_name_plural' => 'Invoices',
                'icon' => 'voyager-receipt',
                'model_name' => 'App\\Model\\Invoice',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-08-04 19:06:47',
                'updated_at' => '2024-10-09 17:33:43',
            ),
            25 => 
            array (
                'id' => 37,
                'name' => 'stream_messages',
                'slug' => 'stream-messages',
                'display_name_singular' => 'Stream Message',
                'display_name_plural' => 'Stream Messages',
                'icon' => 'voyager-chat',
                'model_name' => 'App\\Model\\StreamMessage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-06-21 14:48:56',
                'updated_at' => '2024-04-30 23:55:59',
            ),
            26 => 
            array (
                'id' => 38,
                'name' => 'streams',
                'slug' => 'streams',
                'display_name_singular' => 'Stream',
                'display_name_plural' => 'Streams',
                'icon' => 'voyager-video',
                'model_name' => 'App\\Model\\Stream',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-06-21 15:01:44',
                'updated_at' => '2024-05-10 14:45:55',
            ),
            27 => 
            array (
                'id' => 39,
                'name' => 'referral_code_usages',
                'slug' => 'referral-code-usages',
                'display_name_singular' => 'Referrals',
                'display_name_plural' => 'Referrals',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Model\\ReferralCodeUsage',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-06-21 16:26:01',
                'updated_at' => '2023-06-21 16:27:13',
            ),
            28 => 
            array (
                'id' => 40,
                'name' => 'rewards',
                'slug' => 'rewards',
                'display_name_singular' => 'Referral',
                'display_name_plural' => 'Referrals',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Model\\Reward',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-06-21 16:26:04',
                'updated_at' => '2024-05-01 00:26:33',
            ),
            29 => 
            array (
                'id' => 42,
                'name' => 'global_announcements',
                'slug' => 'global-announcements',
                'display_name_singular' => 'Global Announcement',
                'display_name_plural' => 'Announcements',
                'icon' => 'voyager-megaphone',
                'model_name' => 'App\\Model\\GlobalAnnouncement',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2024-08-07 17:27:57',
                'updated_at' => '2024-09-12 22:05:33',
            ),
            30 => 
            array (
                'id' => 45,
                'name' => 'polls',
                'slug' => 'polls',
                'display_name_singular' => 'Poll',
                'display_name_plural' => 'Polls',
                'icon' => 'voyager-bar-chart',
                'model_name' => 'App\\Model\\Poll',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2025-02-04 01:19:37',
                'updated_at' => '2025-02-04 01:23:42',
            ),
            31 => 
            array (
                'id' => 46,
                'name' => 'poll_answers',
                'slug' => 'poll-answers',
                'display_name_singular' => 'Poll Answer',
                'display_name_plural' => 'Poll Answers',
                'icon' => 'voyager-check',
                'model_name' => 'App\\Model\\PollAnswer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2025-02-04 01:20:37',
                'updated_at' => '2025-02-04 01:20:37',
            ),
            32 => 
            array (
                'id' => 47,
                'name' => 'user_taxes',
                'slug' => 'user-taxes',
                'display_name_singular' => 'Tax Information',
                'display_name_plural' => 'Tax Information',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Model\\UserTax',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":"legal_name","scope":null}',
                'created_at' => '2025-02-12 16:31:10',
                'updated_at' => '2025-02-17 16:51:09',
            ),
            33 => 
            array (
                'id' => 50,
                'name' => 'user_genders',
                'slug' => 'user-genders',
                'display_name_singular' => 'User Gender',
                'display_name_plural' => 'User Genders',
                'icon' => 'voyager-pirate',
                'model_name' => 'App\\Model\\UserGender',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2025-03-26 18:14:42',
                'updated_at' => '2025-03-26 18:14:42',
            ),
        ));
        
        
    }
}