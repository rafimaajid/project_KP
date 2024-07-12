<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        // Mungkin Anda ingin mengambil data produk dari database
        // Untuk contoh ini, kita akan menggunakan data statis seperti di blade
        $categories = [
            [
                'name' => 'Personal Cloud Server',
                'description' => 'Ultra-high performance, all-flash storage solutions for latency-sensitive workloads.',
                'products' => [
                    [
                        'name' => 'FS3600',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            '2.2 GHz, Turbo Boost up to 3.2 GHz',
                            'DDR4 ECC UDIMM',
                            'Scale up to 72 SATA/SSD',
                        ],
                    ],
                    [
                        'name' => 'FS3410',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Over 100,000 iSCSI 4K random write IOPS',
                            '2.5" SATA drive bays',
                        ],
                    ],
                    [
                        'name' => 'FS2500',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Over 80,000 iSCSI 4K random write IOPS',
                            '2.5" SATA drive bays',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Family Cloud Server',
                'description' => 'High performance storage solutions for businesses, engineered for reliability.',
                'products' => [
                    [
                        'name' => 'RS4021xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Over 2344/6214 MB/s read/write',
                            'Built-in dual PSU',
                        ],
                    ],
                    [
                        'name' => 'RS3621xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Intel Xeon 6-core processor',
                            'Dual SAS ports',
                        ],
                    ],
                    [
                        'name' => 'RS3621RPxs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Intel Xeon 6-core processor',
                            'Redundant power',
                        ],
                    ],
                    [
                        'name' => 'RS1619xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.1 GHz CPU',
                            'DDR4 ECC SODIMM',
                        ],
                    ],
                    [
                        'name' => 'DS3622xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.1 GHz CPU',
                            'Scale up to 36 drives',
                        ],
                    ],
                    [
                        'name' => 'DS1823xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Dual 10GbE ports',
                            'Built-in M.2 NVMe slots',
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Company Cloud Server',
                'description' => 'Accelerate data management with expanded data protection and management capabilities.',
                'products' => [
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                    [
                        'name' => 'RS3618xs',
                        'image' => 'FS3600.jpeg',
                        'specs' => [
                            'Quad-core 2.4 GHz CPU',
                            'Expandable memory up to 64 GB',
                        ],
                    ],
                ],
            ],
        ];

        return view('products', compact('categories'));
    }
    public function show($productName)
    {
        // Data produk dapat diambil dari database atau sebagai contoh menggunakan array
        $products = [
            'FS3410' => [
                'name' => 'FS3410',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'FS2500' => [
                'name' => 'FS2500',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'FS3600' => [
                'name' => 'FS3600',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'RS4021xs' => [
                'name' => 'RS4021xs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'RS3621xs' => [
                'name' => 'RS3621xs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'RS3621RPxs' => [
                'name' => 'RS3621RPxs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'RS1619xs' => [
                'name' => 'RS1619xs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'DS3622xs' => [
                'name' => 'DS3622xs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'DS1823xs' => [
                'name' => 'DS1823xs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
            'RS3618xs' => [
                'name' => 'RS3618xs',
                'image' => 'FS3600.jpeg',
                'features' => [
                    'Safety and Protecting Data Share',
                    'File Server & Data Share',
                    'Protection and Fast',
                    'Centralized Storage',
                    'Expand and Manage Storage',
                ],
                'description' => [
                    'Multi-device access' => [
                        'desc' => 'Memungkinkan akses dan sinkronisasi data secara real-time di berbagai perangkat seperti komputer, laptop, tablet, dan Smartphone, yang meningkatkan fleksibilitas dan produktivitas kerja. Dengan fitur ini, pengguna dapat memulai pekerjaan di satu perangkat dan melanjutkannya di perangkat lain tanpa kehilangan data, mendukung kolaborasi tim yang lebih baik dengan data yang selalu terbarui.Data yang disimpan di cloud dilindungi oleh protokol keamanan yang kuat dan secara otomatis dicadangkan, mengurangi risiko kehilangan data akibat perangkat rusak atau hilang. Selain itu, cloud multi device menyederhanakan pengelolaan data, memungkinkan kemudahan akses dari mana saja, dan mendukung mobilitas, sehingga pengguna dapat bekerja dengan perangkat apa pun yang tersedia. Jika terjadi masalah perangkat keras, data tetap aman di cloud dan dapat diakses dari perangkat lain, memastikan kelangsungan bisnis dan mengurangi downtime.',
                        'img' => 'MultiDeviceAccess.jpg'
                    ],
                    'Cross-Platform Sharing' => [
                        'desc' => 'Berbagi dan mengakses data secara universal di berbagai perangkat dan sistem operasi, seperti Windows, macOS, Linux, Android, dan iOS, tanpa terhalang oleh perbedaan platform. Fitur ini meningkatkan fleksibilitas dan kenyamanan, karena data dapat diakses dari perangkat apa pun yang tersedia, serta mendukung kolaborasi tim yang lebih efisien tanpa batasan perangkat.Dengan mengurangi kebutuhan untuk membeli perangkat tambahan atau perangkat lunak khusus, Cross-Platform Sharing juga menghemat biaya operasional. Selain itu, data yang dibagikan tetap terlindungi dengan protokol keamanan yang konsisten di semua perangkat, menjamin keamanan dan kemudahan pengelolaan data, sehingga pengguna selalu memiliki akses ke versi terbaru dari file mereka.',
                        'img' => 'CrossPlatformSharing.jpg'
                    ],
                    'Recovery Data' => [
                        'desc' => 'Kami menyediakan solusi cepat, aman, dan efisien untuk memulihkan data yang hilang, rusak, atau terhapus akibat kesalahan pengguna, kegagalan perangkat keras, serangan malware, atau bencana alam. Fitur ini memastikan bahwa data penting dapat segera dikembalikan, mengurangi downtime dan memastikan kelangsungan bisnis.Dengan cadangan data yang otomatis dan konsisten, pengguna dapat mengandalkan titik pemulihan yang dapat diandalkan untuk menghindari kehilangan informasi berharga. Selain itu, pemulihan data dari cloud melindungi bisnis dari ancaman ransomware tanpa harus membayar tebusan, memastikan bahwa operasi bisnis dapat dilanjutkan dengan cepat meskipun terjadi insiden.',
                        'img' => 'RecoveryData.jpg'
                    ],
                ],
            ],
        ];

        if (array_key_exists($productName, $products)) {
            $product = $products[$productName];
            return view('Show', compact('product'));
        } else {
            abort(404);
        }
    }

    // ProductController.php Specs
public function specs($productName)
{
    $product = $this->getProductByName($productName);

    if (!array_key_exists('specs', $product)) {
        // Jika kunci specs tidak ada, buat array kosong atau tangani dengan cara lain
        $product['specs'] = [
            'Capacity' => 'No data available',
            'Connector' => 'No data available',
            'System requirements' => 'No data available',
            'Add Cloud Home Mobile App' => 'No data available',
            'Compatibility' => 'No data available',
            'Supported Browsers' => 'No data available',
            'Supported Streaming Options' => 'No data available',
            'Note' => 'No data available'
        ];
    }

    return view('specs', compact('product'));
}

// Pastikan Anda memiliki metode getProductByName yang mengembalikan produk berdasarkan nama
    private function getProductByName($productName)
{
    // Contoh data produk, sesuaikan dengan data aktual Anda
    $products = [
        [
            'name' => 'FS2500',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'FS3600',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'FS3410',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'RS4021xs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'RS3621xs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'RS3621RPxs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'RS1619xs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'DS3622xs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'DS1823xs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
        [
            'name' => 'RS3618xs',
            'image' => 'FS3600.jpeg',
            'description' => 'Description of Product 1',
            'specs' => [
                'Capacity' => '4TB',
                'Connector' => 'USB-A, Ethernet RJ45, Power Supply',
                'System requirements' => 'Windows® 10+ macOS 12+',
                'Add Cloud Home Mobile App' => 'iOS® 15+ operating systems Android™ 8+ operating systems Router and Internet Service Provider for Internet connection',
                'Compatibility' => 'Internet Explorer 11+ Microsoft Edge 10.10514+ Safari 8.9+ Firefox® 50+ Google Chrome™ 50+',
                'Supported Browsers' => 'H.264 via Android and iOS media playback H.265 via Android and iOS media playback',
                'Supported Streaming Options' => 'No data available',
                'Note' => 'Compatibility may vary depending on user’s hardware configuration and operating system'
            ]
        ],
    ];

    foreach ($products as $product) {
        if ($product['name'] === $productName) {
            return $product;
        }
    }

    abort(404); // Jika produk tidak ditemukan, kembalikan halaman 404
}


}


