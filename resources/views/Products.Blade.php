@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="catalog-section">
        @php
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
        @endphp
        @foreach($categories as $category)
            <div class="catalog-category">
                <h2>{{ $category['name'] }}</h2>
                <p>{{ $category['description'] }}</p>
                <div class="product-grid">
                    @foreach($category['products'] as $product)
                        <div class="product-item">
                            <img src="{{ asset('assets/img/' . $product['image']) }}" alt="{{ $product['name'] }}">
                            <h3><a href="{{ route('show', $product['name']) }}">{{ $product['name'] }}</a></h3>                            @foreach($product['specs'] as $spec)
                                <p>{{ $spec }}</p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection

