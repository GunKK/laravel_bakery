<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 
                'name' => 'Bánh mặn',
                'description' => 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.',
                'image' => 'banh-man-thu-vi-nhat-1.jpg',
                'created_at' => '2016-10-25 17:19:00',
                'updated_at' => '2016-10-25 17:19:00'
            ],
            [ 
                'name' => 'Bánh ngọt',
                'description' => 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..',
                'image' => '20131108144733.jpg', 
                'created_at' => '2016-10-12 02:16:15', 
                'updated_at' => '2016-10-13 01:38:35'
            ],
            [ 
                'name' => 'Bánh trái cây',
                'description' => 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi "lạc" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.',
                'image' => 'banhtraicay.jpg', 
                'created_at' => '2016-10-18 00:33:33', 
                'updated_at' => '2016-10-15 07:25:27'
            ],
            [ 
                'name' => 'Bánh kem',
                'description' => 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 
                'image' => 'banhkem.jpg', 
                'created_at' => '2016-10-26 03:29:19', 
                'updated_at' => '2016-10-26 02:22:22'
            ],
            [ 
                'name' => 'Bánh crepe',
                'description' => 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải xiêu lòng',
                'image' => 'crepe.jpg', 
                'created_at' => '2016-10-28 04:00:00',
                'updated_at' => '2016-10-27 04:00:23',
            ],
            [ 
                'name' => 'Bánh Pizza',
                'description' => 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.',
                'image' => 'pizza.jpg', 
                'created_at' => '2016-10-25 17:19:00',
                'updated_at' => '2016-10-25 17:19:00'
            ],
            [ 
                'name' => 'Bánh su kem',
                'description' => 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.',
                'image' => 'sukemdau.jpg', 
                'created_at' => '2016-10-25 17:19:00',
                'updated_at' => '2016-10-25 17:19:00'
            ]
        ]);
    }
}
