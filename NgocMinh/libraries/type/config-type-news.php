<?php
    /* Hướng dẫn */
    $nametype = "huong-dan";
    $config['news'][$nametype]['title_main'] = "Hướng dẫn mua hàng";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['comment'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['width'] = 385;
    $config['news'][$nametype]['height'] = 385;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Tiêu chí */
    // $nametype = "tieu-chi";
    // $config['news'][$nametype]['title_main'] = "Tiêu chí";
    // $config['news'][$nametype]['dropdown'] = false;
    // $config['news'][$nametype]['list'] = false;
    // $config['news'][$nametype]['view'] = false;
    // $config['news'][$nametype]['copy'] = false;
    // $config['news'][$nametype]['copy_image'] = false;
    // $config['news'][$nametype]['comment'] = false;
    // $config['news'][$nametype]['slug'] = false;
    // $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    // $config['news'][$nametype]['images'] = true;
    // $config['news'][$nametype]['show_images'] = true;
    // $config['news'][$nametype]['desc'] = true;
    // $config['news'][$nametype]['content'] = false;
    // $config['news'][$nametype]['content_cke'] = false;
    // $config['news'][$nametype]['schema'] = false;
    // $config['news'][$nametype]['seo'] = false;
    // $config['news'][$nametype]['width'] = 72;
    // $config['news'][$nametype]['height'] = 72;
    // $config['news'][$nametype]['thumb'] = '72x72x1';
    // $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    /* Chính Sách */
    $nametype = "chinh-sach";
    $config['news'][$nametype]['title_main'] = "Chính sách";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['comment'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 690;
    $config['news'][$nametype]['height'] = 300;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';


    /* Hình thức thanh toán */
    $nametype = "hinh-thuc-thanh-toan";
    $config['news']['hinh-thuc-thanh-toan']['title_main'] = "Hình thức thanh toán";
    $config['news']['hinh-thuc-thanh-toan']['check'] = array("hienthi" => "Hiển thị");
    $config['news']['hinh-thuc-thanh-toan']['desc'] = true;

    /* Quản lý mục (Không cấp) */
    if(isset($config['news']))
    {
        foreach($config['news'] as $key => $value)
        {
            if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>