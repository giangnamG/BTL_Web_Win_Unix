# overview

## Setup
Môi trường yêu cầu cần có <b>docker-compose</b>

```
git clone https://github.com/giangnamG/BTL_Web_Win_Unix.git
```
```
cd BTL_Web_Win_Unix
```
```
docker-compose up -d
```

# Backend
Backend được viết bằng PHP và xây dựng theo mô hình MVC


## Cấu trúc thư mục
![](./images%20on%20git/overview.png)

# database
Sử dụng kỹ thuật ORM

## seed
Khởi tạo hoặc tạo lại các bảng cùng toàn bộ dữ liệu
```bash
./make
```

Chỉ khởi tạo hoặc tạo lại bộ các bảng mẫu:

```bash
./make migrate
```
Chỉ khởi tạo hoặc tạo lại các bộ dữ liệu mẫu của các bảng

```bash
./make seed
```


## select all

```php
$result = DB::selectAll("column_1,column_2,...","table");

exmaple:
$products = DB::selectAll("*","products");
```


## select 
```php
$result = DB::select(
            'column_1, column_2, ...',
            'tables',
            $where = 
            [
                ['arg_1','=','value_1'],
                ['arg_2','=','value_2'],
                ...
            ],
            $type="logic"
        );

example:
$user = DB::select(
            '*',
            'users',
            $where = 
            [
                ['username','=',$username],
                ['password','=',md5($password)]
            ],
            $type="and"
        );
```

## insert

```php
DB::insert(
    "table",
    [
        'arg_1' => value,
        'arg_2' => value,
        'arg_3' => value,
        'arg_4' => value,
        ...
    ]
);

example:
DB::insert(
    "products",
    [
        'title' => $product['title'],
        'category' => $product['category'],
        'don_gia_nhap' => $product['buy'],
        'don_gia_ban' => $product['sell'],
        'image' => $product['image'],
        'nha_cung_cap' => $product['provider'],
        'quantity' => $product['quantity'],
    ]
);
```

## update

```php
DB::update(
    "table",
        [
            ['column_1','=',value],
            ['column_2','=',value],
            ...
        ],
        // where
        [
            ['arg_1','=',value],
            ['arg_2','=',value],
            ...
        ],
        'type_logic'
    );

example: 
DB::update(
    "users",
        [
            ['phone','=',$phone],
            ['email','=',$email]
        ],
        [
            ['id','=',$user_id]
        ],
        'and'
    );
```
## delete

```php
DB::delete("table", 
    // where
    [
        ['arg_1','=',value],
        ...
    ]
);

example:
DB::delete("users", 
    [
        ['id','=',$_POST['user_id']]
    ]
);
```

## search

```php
$result = DB::search(
            "tables",
            ['column_1','like',value],
            ['column_2','like',value],
            ...
            );

example:
$products = DB::search(
            "products",
            ['title','like',$search]
            );
```