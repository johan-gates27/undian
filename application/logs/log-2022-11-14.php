<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-11-14 00:33:38 --> Severity: error --> Exception: Too few arguments to function Undian_model::get_list_hadiah(), 0 passed in C:\xampp\htdocs\undian\application\controllers\Undian.php on line 18 and at least 2 expected C:\xampp\htdocs\undian\application\models\Undian_model.php 27
ERROR - 2022-11-14 00:36:31 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near 'order'. - Invalid query: SELECT *
FROM "hadiah"
ORDER BY "order by" "order" asc
ERROR - 2022-11-14 00:36:31 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 44
ERROR - 2022-11-14 00:38:22 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near '`order`'. - Invalid query: SELECT *
FROM "hadiah"
ORDER BY "order by" "`order`" asc
ERROR - 2022-11-14 00:38:22 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 44
ERROR - 2022-11-14 00:38:54 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near the keyword 'order'. - Invalid query: SELECT *
FROM "hadiah"
ORDER BY order by 'order' asc
ERROR - 2022-11-14 00:38:54 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 44
ERROR - 2022-11-14 00:39:12 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near 'order'. - Invalid query: SELECT *
FROM "hadiah"
ORDER BY "order by" "order" asc
ERROR - 2022-11-14 00:39:12 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 44
ERROR - 2022-11-14 00:39:21 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near 'id'. - Invalid query: SELECT *
FROM "hadiah"
ORDER BY "order by" "id" asc
ERROR - 2022-11-14 00:39:21 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 44
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: nama C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: nama C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: nama C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 12:11:32 --> Severity: Notice --> Undefined index: nama C:\xampp\htdocs\undian\application\views\undian\undian.php 148
ERROR - 2022-11-14 20:35:29 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Incorrect syntax near the keyword 'order'. - Invalid query: SELECT 
                h.id, 
                h.nama,
                h.qty as qty_awal,
                tmp.jml as terpakai,
                h.qty-tmp.jml as sisa
            FROM HADIAH H 
            LEFT JOIN (
              SELECT ID, SUM(JML) JML FROM (
                SELECT ID, 0 AS JML FROM HADIAH H 
                UNION
                SELECT ID_HADIAH AS ID, COUNT(ID) JML FROM PEMENANG P GROUP BY ID_HADIAH
              ) AS TMP GROUP BY ID
            ) AS TMP ON H.ID = TMP.ID
            ORDER BY H.order asc
            
ERROR - 2022-11-14 20:35:29 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 51
ERROR - 2022-11-14 20:36:07 --> Query error: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Invalid column name 'H.order'. - Invalid query: SELECT 
                h.id, 
                h.nama,
                h.qty as qty_awal,
                tmp.jml as terpakai,
                h.qty-tmp.jml as sisa
            FROM HADIAH H 
            LEFT JOIN (
              SELECT ID, SUM(JML) JML FROM (
                SELECT ID, 0 AS JML FROM HADIAH H 
                UNION
                SELECT ID_HADIAH AS ID, COUNT(ID) JML FROM PEMENANG P GROUP BY ID_HADIAH
              ) AS TMP GROUP BY ID
            ) AS TMP ON H.ID = TMP.ID
            ORDER BY [H.order] asc
            
ERROR - 2022-11-14 20:36:07 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\undian\application\models\Undian_model.php 51
