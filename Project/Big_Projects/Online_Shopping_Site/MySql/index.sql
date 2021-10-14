create database online_shopping_site;

use online_shopping_site;

--user_table
create table users(
	uid int not null auto_increment,
    user_name varchar(20) not null,
    email varchar(20) not null,
    pswd varchar(40) not null,
	primary key(uid)
);

select * from users;



--phone_table

create table phone(
	phone_id int not null auto_increment,
    comp_name varchar(50),
    title varchar(100),
    prize int,
    cros int,
    main_img varchar(500),
    sec_img varchar(500),
    thr_img varchar(500),
    four_img varchar(500),
    primary key(phone_id)
);

insert into phone (comp_name,title,prize,cros,main_img,sec_img,thr_img,four_img) values ("POCO","POCO X3 Pro (Steel Blue, 128 GB)  (6 GB RAM)",18999,23999,"https://rukminim1.flixcart.com/image/416/416/kr9jafk0/mobile/m/m/y/x3-pro-mzb08t9in-poco-original-imag52znesm3hemf.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kmthz0w0/mobile/7/g/m/x3-pro-mzb08t8in-poco-original-imagfn94gdjjkcgf.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kr9jafk0/mobile/h/g/k/x3-pro-mzb08t9in-poco-original-imag52zn8gb3jkxt.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kr9jafk0/mobile/k/x/u/x3-pro-mzb08t9in-poco-original-imag52znk7usvut9.jpeg?q=70"),
("APPLE","APPLE iPhone 12 Mini ( White) (RAM 64 GB )",40999,59900,"https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/d/g/b/apple-iphone-12-mini-dummyapplefsn-original-imafwgbfhfevaajh.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/d/g/b/apple-iphone-12-mini-dummyapplefsn-original-imafwgbfhfevaajh.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/d/g/b/apple-iphone-12-mini-dummyapplefsn-original-imafwgbfhfevaajh.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/d/g/b/apple-iphone-12-mini-dummyapplefsn-original-imafwgbfhfevaajh.jpeg?q=70"),
("realme","realme C21Y (Cross Blue, 64 GB)  (4 GB RAM)",8999,10999,"https://rukminim1.flixcart.com/image/416/416/ksnjp8w0/mobile/k/o/m/c21y-rmx3261-realme-original-imag65kcytrk8dtr.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ksnjp8w0/mobile/l/b/2/c21y-rmx3261-realme-original-imag65kc5dzyqndg.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ksnjp8w0/mobile/d/v/d/c21y-rmx3261-realme-original-imag65kcebtzmyrd.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ksnjp8w0/mobile/j/9/g/c21y-rmx3261-realme-original-imag65kcwqzbr6z5.jpeg?q=70"),
("OPPO","OPPO F19 Pro (Crystal Silver, 128 GB)  (8 GB RAM)",21990,23990,"https://rukminim1.flixcart.com/image/416/416/klzhq4w0/mobile/b/y/u/f19-pro-cph2285-oppo-original-imagyyvj8sdezgxh.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/klzhq4w0/mobile/m/8/j/f19-pro-cph2285-oppo-original-imagyyvjngdxjrsz.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/klzhq4w0/mobile/u/d/o/f19-pro-cph2285-oppo-original-imagyyvj8qzmzeru.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/klzhq4w0/mobile/z/6/a/f19-pro-cph2285-oppo-original-imagyyvjrejw2nfx.jpeg?q=70"),
("REDMI","REDMI 9 Power (Blazing Blue, 64 GB)  (4 GB RAM)",10499,13999,"https://rukminim1.flixcart.com/image/416/416/kkh6zrk0/mobile/o/o/c/redmi-9-power-mzb084xin-mzb084zin-mi-original-imafztfv3cywtzvz.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kkh6zrk0/mobile/n/t/b/redmi-9-power-mzb084xin-mzb084zin-mi-original-imafztfvhcwwhuda.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kkh6zrk0/mobile/f/c/4/redmi-9-power-mzb084xin-mzb084zin-mi-original-imafztfvmv5s4bfu.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kkh6zrk0/mobile/t/z/y/redmi-9-power-mzb084xin-mzb084zin-mi-original-imafztfv5fnvxvkx.jpeg?q=70"),
("SAMSUNG","SAMSUNG Galaxy F12 (Sky Blue, 64 GB)  (4 GB RAM)",9499,12999,"https://rukminim1.flixcart.com/image/416/416/kn22m4w0/mobile/9/k/s/galaxy-f12-sm-f127glbiins-samsung-original-imagftmhhhvghq7w.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kn22m4w0/mobile/z/y/z/galaxy-f12-sm-f127glbiins-samsung-original-imagftmhawdaep9u.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kn22m4w0/mobile/w/n/d/galaxy-f12-sm-f127glbiins-samsung-original-imagftmhxaxy9aeg.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kn22m4w0/mobile/n/4/u/galaxy-f12-sm-f127glbiins-samsung-original-imagftmhafheas9j.jpeg?q=70"),
("ASUS","ASUS ROG Phone 5 (Black, 256 GB)  (12 GB RAM)",57999,63999,"https://rukminim1.flixcart.com/image/416/416/km2clu80/mobile/8/r/x/rog-phone-5-zs673ks-1a053in-asus-original-imagff5hufbu4eg5.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/km2clu80/mobile/f/w/r/rog-phone-5-zs673ks-1a053in-asus-original-imagff5hmycyphcj.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/km2clu80/mobile/k/g/o/rog-phone-5-zs673ks-1a053in-asus-original-imagff5hythhxpcn.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/km2clu80/mobile/y/m/c/rog-phone-5-zs673ks-1a053in-asus-original-imagff5hznsuq5z5.jpeg?q=70"),
("LG","LG W11 (Black, 32 GB)  (3 GB RAM)",7990,7990,"https://rukminim1.flixcart.com/image/416/416/knhsgi80/mobile/6/f/y/w11-lmk310im-lg-original-imag25v8h9uqwd7q.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/knhsgi80/mobile/j/q/e/w11-lmk310im-lg-original-imag25v8txmwhd6g.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/knhsgi80/mobile/6/f/y/w11-lmk310im-lg-original-imag25v8h9uqwd7q.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/knhsgi80/mobile/j/q/e/w11-lmk310im-lg-original-imag25v8txmwhd6g.jpeg?q=70");

select * from phone;



--cloths_table

create table cloth(
	cloth_id int not null auto_increment,
    comp_name varchar(50),
    title varchar(100),
    prize int,
    cros int,
    main_img varchar(500),
    sec_img varchar(500),
    thr_img varchar(500),
    four_img varchar(500),
    primary key(cloth_id)
);

select * from cloth;

insert into cloth (comp_name,title,prize,cros,main_img,sec_img,thr_img,four_img) values ("Seven Rocks","Color Block Men Round Neck Black T-Shirt",399,1299,"https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/w/j/s/xs-t322-blwh-seven-rocks-original-imafxhagtyj2xvpn.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/o/x/w/xs-t322-blwh-seven-rocks-original-imafxhagbmz4mam5.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/4/e/v/xs-t322-blwh-seven-rocks-original-imafxhagvpbgmrj2.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/3/r/r/xs-t322-blwh-seven-rocks-original-imafxhagd9y5hn3q.jpeg?q=50");

insert into cloth (comp_name,title,prize,cros,main_img,sec_img,thr_img,four_img) values ("Seven Rocks","Striped Men Polo Neck White, Blue, Green T-Shirt",374,1299,
"https://rukminim1.flixcart.com/image/880/1056/kjkbv680-0/t-shirt/9/v/o/m-t285hs-as7whdngr-seven-rocks-original-imafz3wkfs8pevqc.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/khnqqa80-0/t-shirt/1/a/u/xl-t285hs-as7whdngr-seven-rocks-original-imafxma4ujhshqcr.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/khnqqa80-0/t-shirt/1/f/n/xl-t285hs-as7whdngr-seven-rocks-original-imafxma4svhfgfqp.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kjkbv680-0/t-shirt/9/v/o/m-t285hs-as7whdngr-seven-rocks-original-imafz3wkfs8pevqc.jpeg?q=50"),
("LIBAS","Women Printed Rayon Straight Kurta  (Blue)",299,1199,"https://rukminim1.flixcart.com/image/880/1056/k7gikcw0/kurta/q/3/x/xl-8072mj-blue-libas-original-imafpz7gqjhf8thg.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/k7gikcw0/kurta/q/3/x/xl-8072mj-blue-libas-original-imafpz7gswhmfgpd.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/k7gikcw0/kurta/q/3/x/xs-8072mj-blue-libas-original-imafpz7gfcwmrusa.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/k7gikcw0/kurta/q/3/x/s-8072mj-blue-libas-original-imafpz7ggaghwbqv.jpeg?q=50"),
("BLIVE","Striped Men Round Neck Maroon, Grey T-Shirt",249,1399,"https://rukminim1.flixcart.com/image/880/1056/keykscw0-0/t-shirt/l/d/q/3xl-bmrgyrnful-z12-blive-original-imafvgzkyjghf7ba.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/keykscw0-0/t-shirt/k/t/u/3xl-bmrgyrnful-z12-blive-original-imafvgzkazzzytqv.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/keykscw0-0/t-shirt/x/z/n/3xl-bmrgyrnful-z12-blive-original-imafvgzkqemgxpyh.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/keykscw0-0/t-shirt/l/d/q/3xl-bmrgyrnful-z12-blive-original-imafvgzkyjghf7ba.jpeg?q=50"),
("KILLER","Slim Men Light Blue Jeans",917,3399,"https://rukminim1.flixcart.com/image/880/1056/kst9gnk0/jean/z/r/f/32-kjb-1604-killer-original-imag6ashzfafdm3d.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kst9gnk0/jean/m/a/j/32-kjb-1604-killer-original-imag6ashgvky5zdn.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/kst9gnk0/jean/b/o/o/32-kjb-1604-killer-original-imag6ashcvbgnyk7.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kst9gnk0/jean/2/f/f/32-kjb-1604-killer-original-imag6ashhccrkbtc.jpeg?q=50"),
("Indian Fashionista","Rayon Striped Shirt Fabric  (Unstitched)",399,999,"https://rukminim1.flixcart.com/image/880/1056/kri3xjk0/fabric/d/o/4/no-unstitched-shirt-eye-white-indian-fashionista-original-imag5aat72hz9ycy.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kri3xjk0/fabric/d/o/4/no-unstitched-shirt-eye-white-indian-fashionista-original-imag5aat72hz9ycy.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/kri3xjk0/fabric/d/o/4/no-unstitched-shirt-eye-white-indian-fashionista-original-imag5aat72hz9ycy.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kri3xjk0/fabric/d/o/4/no-unstitched-shirt-eye-white-indian-fashionista-original-imag5aat72hz9ycy.jpeg?q=50");


insert into cloth (comp_name,title,prize,cros,main_img,sec_img,thr_img,four_img) values ("Tokyo Talkies","Flared Women Light Blue Jeans",1899,1899,"https://rukminim1.flixcart.com/image/880/1056/kgzg8sw0-0/jean/i/t/2/34-ttjn002656-tokyo-talkies-original-imafx3eyheybxs9z.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kgzg8sw0-0/jean/5/m/z/34-ttjn002656-tokyo-talkies-original-imafx3ey3ecxrgkg.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/kgzg8sw0-0/jean/c/j/q/34-ttjn002656-tokyo-talkies-original-imafx3eyyndrzyxp.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/kgzg8sw0-0/jean/s/v/8/34-ttjn002656-tokyo-talkies-original-imafx3eypqtfhyhr.jpeg?q=50"),
("MANIAC","Color Block Men Round Neck White, Black, Yellow T-Shirt",258,959,"https://rukminim1.flixcart.com/image/880/1056/ju1jqfk0/t-shirt/u/z/4/l-men-ss19-rgln-hs-white-ylw-blk-strp-maniac-original-imaff9e8dpqzhwgu.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/ju1jqfk0/t-shirt/u/z/4/xl-men-ss19-rgln-hs-white-ylw-blk-strp-maniac-original-imaff9e7yhh6h4bg.jpeg?q=50",
"https://rukminim1.flixcart.com/image/880/1056/ju1jqfk0/t-shirt/u/z/4/m-men-ss19-rgln-hs-white-ylw-blk-strp-maniac-original-imaff9e74e97hpuj.jpeg?q=50","https://rukminim1.flixcart.com/image/880/1056/ju1jqfk0/t-shirt/u/z/4/m-men-ss19-rgln-hs-white-ylw-blk-strp-maniac-original-imaff9e7peq8zk5e.jpeg?q=50");



--laptop_table

create table laptop(
	laptop_id int not null auto_increment,
    comp_name varchar(50),
    title varchar(100),
    prize int,
    cros int,
    detail1 varchar(100),
    detail2 varchar(100),
    main_img varchar(500),
    sec_img varchar(500),
    thr_img varchar(500),
    four_img varchar(500),
    primary key(laptop_id)
);

insert into laptop (comp_name,title,prize,cros,detail1,detail2,main_img,sec_img,thr_img,four_img) values ("Lenovo","Lenovo Core i3 11th Gen - (4 GB/1 TB HDD/DOS)",33990,45999,"Stylish & Portable Thin and Light Laptop","15 inch Full HD TN LED Anti-glare Display",
"https://rukminim1.flixcart.com/image/416/416/ku2zjww0/computer/a/v/d/v15-itl-gen-2-thin-and-light-laptop-lenovo-original-imag7a2u2utbgmew.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ku2zjww0/computer/q/n/e/v15-itl-gen-2-thin-and-light-laptop-lenovo-original-imag7a2ugpt9wsnp.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ku2zjww0/computer/m/f/d/v15-itl-gen-2-thin-and-light-laptop-lenovo-original-imag7a2uxjp2t9wq.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ktrk13k0/computer/l/d/w/v15-itl-gen-2-thin-and-light-laptop-lenovo-original-imag7fh6wqyf8uzt.jpeg?q=70"),
("HP","HP Core i5 11th Gen - (8 GB + 32 GB Optane/512 GB SSD/Windows 10 Home)",54990,59999,"Stylish & Portable Thin and Light Laptop","Light Laptop without Optical Disk Drive","https://rukminim1.flixcart.com/image/416/416/klscivk0/computer/n/k/a/na-thin-and-light-laptop-hp-original-imagyufpjfryjnku.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/klscivk0/computer/9/y/c/na-thin-and-light-laptop-hp-original-imagyufpafgyxh8g.jpeg?q=70",
"https://rukminim1.flixcart.com/image/416/416/klscivk0/computer/5/h/x/na-thin-and-light-laptop-hp-original-imagyufp2zjeghrg.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/klscivk0/computer/f/f/r/na-thin-and-light-laptop-hp-original-imagyufps5ff65zk.jpeg?q=70"),
("MSI","MSI GF63 Thin Hexa Core i5 10th Gen",54990,76990,"NVIDIA GeForce GTX 1650 Max Q","Pre-installed Genuine Windows 10 OS","https://rukminim1.flixcart.com/image/416/416/ko7idu80/computer/x/l/i/gf63-thin-10scxr-1616in-notebook-msi-original-imag2q55h6w2avfr.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/ko7idu80/computer/2/3/8/gf63-thin-10scxr-1616in-notebook-msi-original-imag2q55ymzzc6jy.jpeg?q=70",
"https://rukminim1.flixcart.com/image/416/416/km2clu80/computer/s/p/5/na-laptop-msi-original-imagf2y3fwppamgu.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kawtvgw0/computer/t/b/b/msi-na-gaming-laptop-original-imafsdbg3vgphft5.jpeg?q=70"),
("acer","acer Aspire 7 Core i5 10th Gen",49990,89999,"NVIDIA GeForce GTX 1650","Pre-installed Genuine Windows 10 OS","https://rukminim1.flixcart.com/image/416/416/kp1imq80/computer/u/b/z/na-gaming-laptop-acer-original-imag3d63hk3h8nm2.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kp1imq80/computer/e/g/s/na-gaming-laptop-acer-original-imag3d63hrxptn7p.jpeg?q=70",
"https://rukminim1.flixcart.com/image/416/416/kp1imq80/computer/w/r/k/na-gaming-laptop-acer-original-imag3d63ezfxh63w.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kp1imq80/computer/t/g/j/na-gaming-laptop-acer-original-imag3d63fzx4yjmc.jpeg?q=70"),
("HP","HP Pavilion Core i5 10th Gen",62990,81868,"NVIDIA GeForce GTX 1650Ti","Preloaded with MS Office","https://rukminim1.flixcart.com/image/416/416/krjjde80/computer/b/q/h/na-gaming-laptop-hp-original-imag5bg5uwgmhmqj.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/krjjde80/computer/l/e/l/na-gaming-laptop-hp-original-imag5bg5dvcpgfge.jpeg?q=70",
"https://rukminim1.flixcart.com/image/416/416/krjjde80/computer/v/7/1/na-gaming-laptop-hp-original-imag5bg5dv7m2fre.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/kafol8w0/computer/f/g/r/hp-original-imafsyek6fwthp33.jpeg?q=70"),
("ASUS","ASUS ROG Strix G15 Core i7 10th Gen",79990,86999,"NVIDIA GeForce GTX 1650 Ti","Pre-installed Genuine Windows 10 OS","https://rukminim1.flixcart.com/image/416/416/knqd3m80/computer/q/w/j/na-gaming-laptop-asus-original-imag2cg3ggnfzrze.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/knqd3m80/computer/c/g/k/na-gaming-laptop-asus-original-imag2cg3vdbzjbee.jpeg?q=70",
"https://rukminim1.flixcart.com/image/416/416/knqd3m80/computer/c/i/w/na-gaming-laptop-asus-original-imag2cg3zcb4rzev.jpeg?q=70","https://rukminim1.flixcart.com/image/416/416/knqd3m80/computer/l/v/o/na-gaming-laptop-asus-original-imag2cg3gahggbkw.jpeg?q=70");

select * from laptop;
