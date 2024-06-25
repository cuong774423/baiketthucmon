<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'Bánh Mỳ Huynh Hoa',
                'category_id' => 1,
                'description' => 'Một ổ bánh mì siêu to với đầy ụ nhân: thịt nguội, chả lụa, dăm bông, chả bò, chà bông,… ăn kèm với đồ chua muối sẵn theo công thức độc quyền của Huynh Hoa.',
                'unit_price' => 68000.00,
                'image' => 'banhmyhh.png'
            ],
            [
                'name' => 'Bánh Bao Đặc Biệt',
                'category_id' => 2,
                'description' => 'Vỏ bánh nóng hổi bao lấy lớp nhân đầy ụ, thơm lừng với đầy đủ thịt, trứng cùng hương vị đặc biệt mà chỉ Huynh Hoa mới có chắc chắn sẽ khiến bạn “đổ gục” ngay từ lần đầu thưởng thức luôn nè.',
                'unit_price' => 35000.00,
                'image' => 'banhbaodb.jpg'
            ],
            [
                'name' => 'Bơ Đặc Biệt',
                'category_id' => 3,
                'description' => 'Bánh mì thịt hay các món bánh mì khác mà thiếu bơ thì mất ngon, đây là loại sốt gia tăng sự thơm ngon khi thưởng thức.',
                'unit_price' => 65000.00,
                'image' => 'bodb.jpg'
            ],
            [
                'name' => 'Chả Chiên Đặc Biệt',
                'category_id' => 3,
                'description' => 'Chả lụa chiên Huynh Hoa thơm ngon, vị béo béo của mỡ và lớp mỏng chả chiên nằm bên ngoài miếng chả sẽ mang lại cho bạn một hương vị thật khó quên.',
                'unit_price' => 140000.00,
                'image' => 'chachiendb.jpg'
            ],
            [
                'name' => 'Chả Lụa Đặc Biệt',
                'category_id' => 3,
                'description' => 'Chả lụa được chế biến với những nguyên liệu tươi ngon cùng công thức chế biến riêng biệt từ thương hiệu Huynh Hoa. Chả lụa Huynh Hoa mang đến độ dai giòn chuẩn vị và được nêm nếm gia vị hoàn hảo.',
                'unit_price' => 140000.00,
                'image' => 'chaluadb.jpg'
            ],
            [
                'name' => 'Dăm Bông Vai Tròn',
                'category_id' => 3,
                'description' => 'Dăm bông vai vuông được chế biến từ những loại thịt vai chất lượng cao. Thịt được tẩm ướp với các gia vị hảo hạng, qua xử lý kĩ, rồi đem đi nấu chín theo công nghệ chế biến dăm bông hiện đại.',
                'unit_price' => 60000.00,
                'image' => 'dambongvt.jpg'
            ],
            [
                'name' => 'Giò Thủ Đỏ',
                'category_id' => 3,
                'description' => 'Giò Thủ được chế biến từ hỗn hợp thịt thủ, thịt heo, nấm, pha trộn kĩ với các gia vị truyền thống và được đem đi nấu chín vừa đủ, đảm bảo món Giò Thủ vẫn 100% ngon miệng và hợp khẩu vị truyền thống, mà lại tốt cho sức khỏe.',
                'unit_price' => 140000.00,
                'image' => 'giothudo.jpg'
            ], 
            [
                'name' => 'Pate Đặc Biệt',
                'category_id' => 3,
                'description' => 'Là loại Pate truyền thống ăn kèm với bánh mì sẽ làm gia tăng khẩu vị của bạn với vị ngon đậm đà. Được chế biến từ gan heo tươi, da heo và thịt heo chất lượng cao, tẩm ướp tỉ mỉ với các gia vị quê hương, Pate Huynh Hoa chắc chắn có hương vị thơm ngoc đặc trưng theo khẩu vị của người Việt.',
                'unit_price' => 90000.00,
                'image' => 'patedb.jpg'
            ], 
            [
                'name' => 'Thịt Heo Xá Xíu',
                'category_id' => 3,
                'description' => 'Nếu bạn nào là tín đồ của ẩm thực Trung Quốc thì chắc không còn xa lạ gì với xá xíu. Món ăn với hương vị thơm ngon khó cưỡng và được sử dụng rất nhiều trong chế biến món ăn. Thịt heo xá xíu Huynh Hoa là món ăn ngon với hương vị đậm đà, béo ngậy. Với hương vị ngon đậm đà lại dễ kết hợp với nhiều loại món ăn khác nên thịt heo xá xíu ngày càng trở nên phổ biến và có nhiều người ưa chuộng.',
                'unit_price' => 250000.00,
                'image' => 'thitheoxx.jpg'
            ], 
            [
                'name' => 'Xúc Xích Tỏi',
                'category_id' => 3,
                'description' => 'Sản phẩm được pha trộn với tỏi, làm gia tăng hơn nữa vị thơm của xúc xích thịt heo. Bạn có thể đặt mua nguyên cây hoặc được cắt lát.',
                'unit_price' => 60000.00,
                'image' => 'xucxichtoi.jpg'
            ], 
            [
                'name' => 'Xúc Xích Tỏi Xông Khói',
                'category_id' => 3,
                'description' => 'Sản phẩm được pha trộn với tỏi, làm gia tăng hơn nữa vị thơm của xúc xích thịt heo. Bạn có thể đặt mua nguyên cây hoặc được cắt lát.',
                'unit_price' => 60000.00,
                'image' => 'xucxichtoixk.jpg'
            ], 
            [
                'name' => 'Chà Bông Đặc Biệt',
                'category_id' => 4,
                'description' => 'Chà bông Huynh Hoa thơm ngon an toàn và chất lượng được sấy thơm cùng gia vị kích thích vị giác, ăn rất ngon miệng.',
                'unit_price' => 120000.00,
                'image' => 'chabongdb.jpg'
            ], 
            [
                'name' => 'Cơm Cháy Đặc Biệt',
                'category_id' => 4,
                'description' => 'Miếng cơm cháy giòn, khi cắn vô một miếng thì nghe cái “rụm” mới vui tai, vui miệng làm sao. Cái giòn rụm của cơm cháy giúp con người ta có thể nhai chầm chậm để cảm nhận được hương vị của quê hương, một phút nghỉ ngơi giữa cái nhộn nhịp, hối hả của chốn phồn hoa đô thị.',
                'unit_price' => 50000.00,
                'image' => 'comchaydb.jpg'
            ], 
        ]);
    }
}
